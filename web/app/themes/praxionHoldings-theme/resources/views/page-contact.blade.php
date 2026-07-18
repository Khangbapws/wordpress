@extends('layouts.app')

@php
    $contactResult = \App\consume_contact_result();
    $contactStatus = $contactResult['status'] ?? '';
    $contactMessage = $contactResult['message'] ?? '';
    $contactErrors = isset($contactResult['errors']) && is_array($contactResult['errors']) ? $contactResult['errors'] : [];
    $contactValues = isset($contactResult['values']) && is_array($contactResult['values']) ? $contactResult['values'] : [];

    $fieldValue = static fn (string $field): string => isset($contactValues[$field]) && is_string($contactValues[$field])
        ? $contactValues[$field]
        : '';
@endphp

@section('content')
    <section aria-labelledby="contact-title"
        class="relative isolate overflow-hidden bg-linear-to-b from-brand-light via-white to-surface pt-32 pb-18 sm:pt-36 sm:pb-24 lg:pt-44 lg:pb-28">
        <div class="absolute inset-0 -z-10" aria-hidden="true">
            <div class="absolute -top-28 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/10 blur-3xl"></div>
        </div>

        <div class="container-page">
            <div class="mx-auto max-w-4xl text-center">
                <x-ui.badge>Contact PRX Holdings</x-ui.badge>
                <h1 id="contact-title"
                    class="hero-title mx-auto mt-7 max-w-4xl text-4xl leading-[1.08] font-bold tracking-tight text-text-dark sm:text-5xl lg:text-6xl xl:text-7xl">
                    Start a clear conversation about
                    <span class="text-primary">your beauty or spa operation.</span>
                </h1>
                <p class="hero-subtitle mx-auto mt-7 max-w-3xl text-lg leading-8 text-muted sm:text-xl">
                    Contact PRX Holdings if you want to discuss the connected owner, staff, customer-booking, branch, or check-in experience before choosing a billing term.
                </p>
            </div>
        </div>
    </section>

    <section aria-labelledby="contact-form-title" class="py-20 sm:py-24 lg:py-32">
        <div class="container-page">
            <div class="grid gap-12 lg:grid-cols-[0.72fr_1.28fr] lg:gap-16 xl:gap-24">
                <div>
                    <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Send a message</p>
                    <h2 id="contact-form-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl">Tell us what you want to understand.</h2>
                    <p class="mt-5 text-lg leading-8 text-muted">Share enough context for PRX Holdings to understand your question. Fields marked “required” must be completed.</p>

                    <div class="mt-9 space-y-4">
                        <a href="{{ home_url('/solution') }}" class="group flex min-h-14 items-center justify-between gap-4 rounded-2xl border border-gray-200/80 bg-white px-5 py-4 font-semibold text-text-dark shadow-sm hover:border-primary/30 hover:text-primary">
                            Explore the product experience
                            <i data-lucide="arrow-right" class="h-4 w-4 shrink-0 transition-transform group-hover:translate-x-1" aria-hidden="true"></i>
                        </a>
                        <a href="{{ home_url('/services') }}" class="group flex min-h-14 items-center justify-between gap-4 rounded-2xl border border-gray-200/80 bg-white px-5 py-4 font-semibold text-text-dark shadow-sm hover:border-primary/30 hover:text-primary">
                            Compare billing terms
                            <i data-lucide="arrow-right" class="h-4 w-4 shrink-0 transition-transform group-hover:translate-x-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="rounded-3xl border border-gray-200/80 bg-white p-5 shadow-xl shadow-black/[0.05] sm:p-8 lg:p-10">
                    <div aria-live="polite" aria-atomic="true">
                        @if ($contactStatus === 'success')
                            <div class="mb-7 flex items-start gap-3 rounded-2xl border border-green-300 bg-green-50 p-4 text-green-950" role="status">
                                <i data-lucide="circle-check" class="mt-0.5 h-5 w-5 shrink-0" aria-hidden="true"></i>
                                <p class="font-semibold">{{ $contactMessage }}</p>
                            </div>
                        @elseif ($contactStatus === 'error')
                            <div class="mb-7 rounded-2xl border border-red-300 bg-red-50 p-4 text-red-950" role="alert" tabindex="-1">
                                <div class="flex items-start gap-3">
                                    <i data-lucide="circle-alert" class="mt-0.5 h-5 w-5 shrink-0" aria-hidden="true"></i>
                                    <div>
                                        <p class="font-semibold">{{ $contactMessage }}</p>
                                        @if ($contactErrors !== [])
                                            <p class="mt-1 text-sm">Review these fields:</p>
                                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm">
                                                @foreach ($contactErrors as $field => $error)
                                                    <li><a href="#contact-{{ str_replace('_', '-', $field) }}" class="font-semibold underline underline-offset-2">{{ $error }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <form method="post" action="{{ admin_url('admin-post.php') }}" x-data="{ submitting: false }"
                        x-on:submit="if (submitting) { $event.preventDefault(); } else { submitting = true; }"
                        x-bind:aria-busy="submitting" class="space-y-6">
                        <input type="hidden" name="action" value="{{ \App\PRX_CONTACT_ACTION }}">
                        @php(wp_nonce_field(\App\PRX_CONTACT_ACTION, \App\PRX_CONTACT_NONCE))

                        <div class="sr-only" aria-hidden="true">
                            <label for="company-website">Leave this field empty</label>
                            <input id="company-website" name="company_website" type="text" tabindex="-1" autocomplete="off">
                        </div>

                        <div>
                            <div class="flex items-baseline justify-between gap-3">
                                <label for="contact-full-name" class="font-semibold text-text-dark">Full name</label>
                                <span class="text-xs font-medium text-muted">Required</span>
                            </div>
                            <input id="contact-full-name" name="full_name" type="text" autocomplete="name" required maxlength="100"
                                value="{{ $fieldValue('full_name') }}"
                                @if (isset($contactErrors['full_name'])) aria-invalid="true" @endif
                                aria-describedby="full-name-help{{ isset($contactErrors['full_name']) ? ' full-name-error' : '' }}"
                                @class([
                                    'mt-2 min-h-12 w-full rounded-xl border bg-white px-4 py-3 text-text-dark shadow-sm placeholder:text-gray-400',
                                    'border-red-400' => isset($contactErrors['full_name']),
                                    'border-gray-300 focus:border-primary' => !isset($contactErrors['full_name']),
                                ])>
                            <p id="full-name-help" class="mt-2 text-xs leading-5 text-muted">Use 100 characters or fewer.</p>
                            @if (isset($contactErrors['full_name']))<p id="full-name-error" class="mt-2 text-sm font-semibold text-red-700">{{ $contactErrors['full_name'] }}</p>@endif
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <div class="flex items-baseline justify-between gap-3">
                                    <label for="contact-email" class="font-semibold text-text-dark">Email</label>
                                    <span class="text-xs font-medium text-muted">Required</span>
                                </div>
                                <input id="contact-email" name="email" type="email" autocomplete="email" inputmode="email" required maxlength="254"
                                    value="{{ $fieldValue('email') }}"
                                    @if (isset($contactErrors['email'])) aria-invalid="true" @endif
                                    aria-describedby="email-help{{ isset($contactErrors['email']) ? ' email-error' : '' }}"
                                    @class([
                                        'mt-2 min-h-12 w-full rounded-xl border bg-white px-4 py-3 text-text-dark shadow-sm placeholder:text-gray-400',
                                        'border-red-400' => isset($contactErrors['email']),
                                        'border-gray-300 focus:border-primary' => !isset($contactErrors['email']),
                                    ])>
                                <p id="email-help" class="mt-2 text-xs leading-5 text-muted">Enter an address that can receive a reply.</p>
                                @if (isset($contactErrors['email']))<p id="email-error" class="mt-2 text-sm font-semibold text-red-700">{{ $contactErrors['email'] }}</p>@endif
                            </div>

                            <div>
                                <div class="flex items-baseline justify-between gap-3">
                                    <label for="contact-phone" class="font-semibold text-text-dark">Phone</label>
                                    <span class="text-xs font-medium text-muted">Optional</span>
                                </div>
                                <input id="contact-phone" name="phone" type="tel" autocomplete="tel" inputmode="tel" maxlength="30"
                                    value="{{ $fieldValue('phone') }}"
                                    @if (isset($contactErrors['phone'])) aria-invalid="true" @endif
                                    aria-describedby="phone-help{{ isset($contactErrors['phone']) ? ' phone-error' : '' }}"
                                    @class([
                                        'mt-2 min-h-12 w-full rounded-xl border bg-white px-4 py-3 text-text-dark shadow-sm placeholder:text-gray-400',
                                        'border-red-400' => isset($contactErrors['phone']),
                                        'border-gray-300 focus:border-primary' => !isset($contactErrors['phone']),
                                    ])>
                                <p id="phone-help" class="mt-2 text-xs leading-5 text-muted">Use 30 characters or fewer.</p>
                                @if (isset($contactErrors['phone']))<p id="phone-error" class="mt-2 text-sm font-semibold text-red-700">{{ $contactErrors['phone'] }}</p>@endif
                            </div>
                        </div>

                        <div>
                            <div class="flex items-baseline justify-between gap-3">
                                <label for="contact-message" class="font-semibold text-text-dark">Message</label>
                                <span class="text-xs font-medium text-muted">Required</span>
                            </div>
                            <textarea id="contact-message" name="message" rows="7" required maxlength="3000"
                                aria-describedby="message-help{{ isset($contactErrors['message']) ? ' message-error' : '' }}"
                                @if (isset($contactErrors['message'])) aria-invalid="true" @endif
                                @class([
                                    'mt-2 w-full resize-y rounded-xl border bg-white px-4 py-3 text-text-dark shadow-sm placeholder:text-gray-400',
                                    'border-red-400' => isset($contactErrors['message']),
                                    'border-gray-300 focus:border-primary' => !isset($contactErrors['message']),
                                ])>{{ $fieldValue('message') }}</textarea>
                            <p id="message-help" class="mt-2 text-xs leading-5 text-muted">Use 3,000 characters or fewer. Do not include sensitive information.</p>
                            @if (isset($contactErrors['message']))<p id="message-error" class="mt-2 text-sm font-semibold text-red-700">{{ $contactErrors['message'] }}</p>@endif
                        </div>

                        <button type="submit" x-bind:disabled="submitting"
                            class="inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-full bg-primary px-7 py-3 font-semibold text-white transition hover:bg-primary-dark disabled:cursor-wait disabled:opacity-70 sm:w-auto">
                            <span x-show="!submitting">Send message</span>
                            <span x-show="submitting" x-cloak class="inline-flex items-center gap-2">
                                <i data-lucide="loader-circle" class="h-4 w-4 animate-spin" aria-hidden="true"></i>
                                Sending…
                            </span>
                        </button>
                        <p class="sr-only" aria-live="polite" x-text="submitting ? 'Your message is being sent.' : ''"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
