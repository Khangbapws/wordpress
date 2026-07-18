<?php

/**
 * Native contact form handling.
 */

namespace App;

const PRX_CONTACT_ACTION = 'prx_submit_contact';
const PRX_CONTACT_NONCE = 'prx_contact_nonce';
const PRX_CONTACT_RESULT_QUERY = 'prx_contact_result';
const PRX_CONTACT_TRANSIENT_PREFIX = 'prx_contact_';

add_action('admin_post_'.PRX_CONTACT_ACTION, __NAMESPACE__.'\\handle_contact_form');
add_action('admin_post_nopriv_'.PRX_CONTACT_ACTION, __NAMESPACE__.'\\handle_contact_form');

/**
 * Process contact submissions for authenticated and unauthenticated visitors.
 */
function handle_contact_form(): void
{
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
        redirect_contact_result([
            'status' => 'error',
            'message' => __('The contact form only accepts form submissions.', 'sage'),
        ]);
    }

    $nonce = sanitize_text_field(contact_post_value(PRX_CONTACT_NONCE));

    if (! wp_verify_nonce($nonce, PRX_CONTACT_ACTION)) {
        redirect_contact_result([
            'status' => 'error',
            'message' => __('We could not verify your submission. Refresh the page and try again.', 'sage'),
        ]);
    }

    $honeypot = sanitize_text_field(contact_post_value('company_website'));

    if ($honeypot !== '') {
        redirect_contact_result([
            'status' => 'error',
            'message' => __('We could not send your message. Please try again.', 'sage'),
        ]);
    }

    $values = [
        'full_name' => sanitize_text_field(contact_post_value('full_name')),
        'email' => sanitize_email(contact_post_value('email')),
        'phone' => sanitize_text_field(contact_post_value('phone')),
        'message' => sanitize_textarea_field(contact_post_value('message')),
    ];

    $values['phone'] = preg_replace('/[^0-9+()\-.\s]/u', '', $values['phone']) ?? '';

    $errors = [];

    if ($values['full_name'] === '') {
        $errors['full_name'] = __('Enter your full name.', 'sage');
    } elseif (mb_strlen($values['full_name']) > 100) {
        $errors['full_name'] = __('Use 100 characters or fewer for your full name.', 'sage');
    }

    if ($values['email'] === '') {
        $errors['email'] = __('Enter your email address.', 'sage');
    } elseif (mb_strlen($values['email']) > 254 || ! is_email($values['email'])) {
        $errors['email'] = __('Enter a valid email address.', 'sage');
    }

    if (mb_strlen($values['phone']) > 30) {
        $errors['phone'] = __('Use 30 characters or fewer for your phone number.', 'sage');
    }

    if ($values['message'] === '') {
        $errors['message'] = __('Enter a message.', 'sage');
    } elseif (mb_strlen($values['message']) > 3000) {
        $errors['message'] = __('Use 3,000 characters or fewer for your message.', 'sage');
    }

    if ($errors !== []) {
        redirect_contact_result([
            'status' => 'error',
            'message' => __('Check the highlighted fields and submit the form again.', 'sage'),
            'errors' => $errors,
            'values' => $values,
        ]);
    }

    $recipient = sanitize_email((string) get_option('admin_email'));

    if (! is_email($recipient)) {
        redirect_contact_result([
            'status' => 'error',
            'message' => __('The message destination is not configured. Please try again later.', 'sage'),
            'values' => $values,
        ]);
    }

    $subject = __('New PRX Holdings website enquiry', 'sage');
    $body = implode("\n", [
        'Full name: '.$values['full_name'],
        'Email: '.$values['email'],
        'Phone: '.($values['phone'] !== '' ? $values['phone'] : 'Not provided'),
        '',
        'Message:',
        $values['message'],
    ]);
    $headers = ['Reply-To: <'.$values['email'].'>'];

    if (! wp_mail($recipient, $subject, $body, $headers)) {
        redirect_contact_result([
            'status' => 'error',
            'message' => __('WordPress could not send your message. Your details remain in the form so you can try again.', 'sage'),
            'values' => $values,
        ]);
    }

    redirect_contact_result([
        'status' => 'success',
        'message' => __('Your message was sent to PRX Holdings.', 'sage'),
    ]);
}

/**
 * Read a scalar POST value safely before sanitizing it for its field type.
 */
function contact_post_value(string $key): string
{
    $value = $_POST[$key] ?? '';

    return is_string($value) ? wp_unslash($value) : '';
}

/**
 * Store a short-lived result and return to the fixed contact route.
 *
 * @param  array<string, mixed>  $result
 */
function redirect_contact_result(array $result): never
{
    $token = wp_generate_uuid4();
    set_transient(PRX_CONTACT_TRANSIENT_PREFIX.$token, $result, 10 * MINUTE_IN_SECONDS);

    $url = add_query_arg(PRX_CONTACT_RESULT_QUERY, $token, home_url('/contact/'));
    wp_safe_redirect($url, 303, 'PRX Holdings');
    exit;
}

/**
 * Consume the current visitor's contact result once.
 *
 * @return array<string, mixed>
 */
function consume_contact_result(): array
{
    $queryToken = $_GET[PRX_CONTACT_RESULT_QUERY] ?? '';
    $token = is_string($queryToken) ? sanitize_key(wp_unslash($queryToken)) : '';

    if ($token === '' || ! preg_match('/^[a-f0-9-]{36}$/', $token)) {
        return [];
    }

    $key = PRX_CONTACT_TRANSIENT_PREFIX.$token;
    $result = get_transient($key);
    delete_transient($key);

    return is_array($result) ? $result : [];
}
