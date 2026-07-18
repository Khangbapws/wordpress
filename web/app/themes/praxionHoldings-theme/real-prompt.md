# PRX Holdings Website Content and Product-Experience Upgrade

## Role

Act as all of the following:

- A senior WordPress and Sage theme developer.
- A senior frontend engineer specializing in Blade, Tailwind CSS, Alpine.js, GSAP, semantic HTML, accessibility, and responsive interfaces.
- A senior UI/UX designer who makes complex business software easy to scan, understand, and use.
- A senior English-language content strategist, writer, editor, and factual-content validator.

This is an implementation task. Inspect the current theme, make the changes, validate them in the real project, and report the result. Do not stop after analysis or provide only sample code.

## Objective

Redesign and rewrite the content for these WordPress routes:

- `/services`
- `/solution`
- `/about-us`
- `/contact`

The result must clearly position PRX Holdings as a connected software ecosystem for beauty and spa businesses serving men and women. It must explain the product without overwhelming visitors, guide different business types and sizes toward an appropriate billing term, and provide a convincing but factual view of the owner-facing web and mobile experience.

All four routes and any shared layout they use must work from small mobile screens through large desktop screens.

## Business source of truth

Use only the facts in this section for business and marketing claims. You may improve their wording, hierarchy, and clarity, but you must not expand them into unsupported claims.

### Company

The official public name is **PRX Holdings**.

The name expresses three core values:

- **P — Precision**
- **R — Reliability**
- **X — eXcellence**

PRX Holdings provides an ecosystem connecting booking customers with beauty and spa service providers/business owners.

### Product capabilities

The ecosystem provides:

1. Staff, work-schedule, and commission management.
2. Inventory management with low-stock tracking and notifications, such as when shampoo is running low.
3. Pre-tax and post-tax revenue management.
4. Accounting and profit visibility after expenses are deducted.
5. Trending-service tracking so owners can understand which services are popular and frequently booked.
6. A **Digital Beauty Portfolio** that stores customers' before-and-after service images chronologically and automatically combines them to make progress easier to see. This is especially useful for skin-care spas and hair salons.
7. A **Smart CRM and Retention** system that analyzes each customer's service cycle. For example, when a hair-color service commonly needs a touch-up after four weeks, the system can send a Zalo or SMS reminder in week three with a small discount code to encourage a return visit.
8. One mobile application for booking customers.
9. One mobile application shared by business owners and staff.
10. Support for unlimited shop branches.
11. Free check-in app management.

### Pricing

Present these amounts exactly as supplied:

| Term | Price |
|---|---:|
| Free trial | 15 days |
| 1 month | US$20 |
| 3 months | US$30 |
| 6 months | US$50 |
| 12 months | US$99 |
| Elite — 24 months | US$199 |

Only the 12-month and Elite 24-month packages receive **30% off the next billing cycle**.

Important pricing rules:

- Treat each listed amount as the price for its complete stated term. For example, display `3 months — US$30`; do not rewrite it as `US$30/month`.
- Calculate or advertise an equivalent monthly rate, percentage saving, or renewal total.
- Do not claim that the free trial requires no credit card, includes onboarding, or has other conditions that were not supplied.
- Do not invent feature restrictions or different feature access for different billing terms.
- Package recommendations may be based on commitment horizon, operational stability, business stage, and the owner's desire for flexibility. Do not imply unsupported limits on staff, bookings, branches, or features.
- Describe the 30% benefit as applying to the **next** billing cycle only; do not imply a permanent discount.

## Evidence and anti-hallucination rules

- Treat the business source of truth above as authoritative. Where current theme copy conflicts with it, replace the conflicting copy.
- Use **PRX Holdings** in public content. Keep technical directory or package names unchanged unless a code change genuinely requires otherwise.
- Remove unrelated positioning such as restaurants, cafés, F&B, POS orders, coffee products, or other industries not included in this brief.
- Do not invent customer counts, revenue growth, conversion rates, uptime, security certifications, locations, founding dates, team members, awards, partnerships, testimonials, response times, third-party integrations, phone numbers, email addresses, or social profiles.
- Do not present mock dashboard values as real PRX Holdings performance. Label them clearly as sample or demo data where a visitor could otherwise misunderstand them.
- Do not use vague superlatives such as “best,” “leading,” or “guaranteed.” Prefer clear statements about the supplied capabilities and their practical value.
- You may write a mission and vision for `/about-us`, but both must be direct, conservative syntheses of the stated ecosystem, audience, capabilities, and PRX values—not invented company history.
- If a business-critical fact is missing, use neutral copy or omit the claim. Do not fill the gap with a guess.
- Resolve technical uncertainty by inspecting the repository and runtime. Do not guess how a WordPress route, template, handler, component, or asset is wired.

## Confirmed project context to verify before editing

This is a Sage WordPress theme using Blade templates, Tailwind CSS v4, Alpine.js, GSAP, Vite, Lucide icons, and existing reusable UI components.

Current likely entry points include:

- `resources/views/page-services.blade.php`
- `resources/views/page-solution.blade.php`
- `resources/views/template-about-us.blade.php`
- `resources/views/components/services/`
- `resources/views/components/solution/`
- `resources/views/components/about/`
- `resources/views/components/layout/header.blade.php`
- `resources/views/components/layout/footer.blade.php`
- `resources/css/app.css`
- `resources/js/app.js`
- `resources/js/animations/`

There may not yet be a dedicated `/contact` template. Verify WordPress's actual template hierarchy, the page slug, assigned page templates, and existing handler code before creating or changing files. Do not assume that similarly named but empty Blade files are active.

Before implementation:

1. Read all repository-level instructions, including `AGENTS.md` if present.
2. Inspect the current templates, Blade components, shared layout, design tokens, JavaScript initialization, animation patterns, and build scripts.
3. Confirm how each of the four URLs resolves to a template.
4. Search for existing contact-form markup, handlers, plugins, actions, nonce logic, validation, and mail configuration before adding a new implementation.
5. Preserve useful, working abstractions; remove or replace stale content only within this task's scope.

## Page requirements

### 1. `/services` — pricing and package guidance

The page's primary purpose is to make the six billing choices easy to compare and help visitors choose a suitable commitment period without inventing tier-specific features.

Include:

- A concise hero that explains the platform and leads naturally into the 15-day free trial.
- A readable pricing grid containing every term and exact amount from the source of truth.
- Clear visual emphasis for a recommended option only when the recommendation is explained as editorial guidance rather than a factual popularity claim. Never label a plan “most popular” without evidence.
- Short, practical “best fit” guidance for different business stages and sizes. Base this guidance on flexibility and commitment horizon, not invented usage or feature limits.
- A separate overview of the shared business capabilities so visitors do not mistake the plans for different products.
- An explicit, easy-to-understand note that the 12-month and Elite 24-month plans receive 30% off the next billing cycle only.
- A pricing FAQ grounded only in the supplied facts. Do not fabricate cancellation, refund, payment, onboarding, data-migration, or support policies.
- Clear calls to action to start the free trial, explore the solution, or contact PRX Holdings. Link only to valid internal routes or verified external destinations.

The plan cards must remain easy to compare on mobile. Do not solve mobile layout by shrinking desktop cards until the text becomes difficult to read.

### 2. `/solution` — interactive owner dashboard and ecosystem explanation

Turn this route into the strongest product-explanation page. Improve the existing owner dashboard preview so visitors can understand what business owners can manage on the web and in the owner/staff mobile application.

The page should include:

- A product-focused hero explaining the connected PRX Holdings ecosystem.
- A polished, code-built desktop owner dashboard preview using clearly labeled demo data.
- A complementary mobile-app preview or mobile workflow that demonstrates how owners and staff can access essential operational information away from the desktop.
- A clear explanation of the separate booking-customer mobile application and the shared owner/staff mobile application.
- An explanation of free check-in app management and unlimited branch support without adding unsupported conditions.
- Capability sections and a factual FAQ.
- A final CTA to review pricing or make contact.

The owner dashboard should make the supplied capabilities visible through a coherent information architecture. At minimum, represent:

- An all-branches or branch-selection context.
- Today's schedule/appointments and staff workload.
- Staff schedules and commissions.
- Inventory and low-stock alerts.
- Revenue before tax, revenue after tax, expenses, and resulting profit.
- Trending services.
- CRM retention reminders using the supplied service-cycle example.
- Digital Beauty Portfolio activity.
- Access to settings or branch management where appropriate.

Use a small number of meaningful Alpine.js interactions—such as dashboard module tabs, a mobile panel, or a branch selector—only when they improve understanding. Interactive controls must change visible content, expose a selected state, and work with a keyboard. Do not add decorative controls that do nothing.

On small screens, reorganize the experience into readable cards, tabs, or a compact navigation pattern. Do not render an unusably scaled-down desktop dashboard or allow the page to create global horizontal overflow. If an individual data region truly needs horizontal scrolling, contain it and label it accessibly.

Use GSAP only for restrained progressive enhancement. Animation must never be required to reveal essential content and must respect `prefers-reduced-motion`.

### 3. `/about-us` — identity, mission, vision, and values

All current page content may be replaced.

Build a focused company story around:

- What PRX Holdings is and who it serves.
- Why beauty and spa businesses benefit from one connected operational ecosystem.
- A mission derived from helping owners manage operations clearly and helping service teams focus on customers.
- A vision derived from connecting booking customers, owners, and staff through dependable digital tools.
- The three core values: Precision, Reliability, and eXcellence. Explain each value in practical product and customer-experience terms.
- A concise section about the company's approach or commitments, using only supportable statements.
- CTAs to explore `/solution`, compare `/services`, or use `/contact`.

Do not retain or create a team section, historical timeline, global footprint, client logo wall, testimonial, or company statistic unless the repository contains verified business content explicitly approved for use.

### 4. `/contact` — trustworthy contact experience

Create or update a dedicated contact-page experience containing:

- A clear, welcoming hero explaining why a beauty or spa business owner might contact PRX Holdings.
- A contact form with exactly these visible fields:
  - Full name
  - Email
  - Phone
  - Message
- Explicit `<label>` elements, appropriate input types and autocomplete values, clear required/optional states, accessible help text, inline validation, an error summary when useful, and an `aria-live` status region.
- A submit state that prevents accidental duplicate submissions and communicates progress without relying only on color.
- Helpful links to `/solution` and `/services` for visitors who are not ready to submit.

The form must not fake success. Reuse a working existing handler if one exists. Otherwise, implement a secure native WordPress submission path that:

- Works for logged-in and logged-out visitors.
- Verifies a WordPress nonce.
- Sanitizes every field and validates required values, email format, and reasonable length limits on the server.
- Includes a low-friction anti-spam measure such as a honeypot without creating an accessibility trap.
- Sends to a verified configured destination. If no public recipient is supplied, use WordPress's configured administrator email internally; do not print or hard-code an invented public address.
- Returns honest success and failure states, preserves safe user input when practical, and prevents open redirects.
- Does not expose personal form data in URLs or logs.

Do not add an address, office hours, map, phone number, public email address, social profile, or promised response time unless it is verified in the project or supplied business data.

## Shared UX and visual requirements

- Preserve and refine the existing PRX green visual language unless repository evidence establishes a different approved brand system.
- Reuse existing containers, buttons, cards, badges, typography, spacing, and tokens where they are sound. Consolidate repeated patterns into Blade components or data-driven structures when this materially improves maintainability.
- Maintain a clear visual hierarchy, concise copy, generous spacing, and scannable sections. Avoid long undifferentiated paragraphs.
- Keep one primary action per section and use descriptive link text.
- Audit the shared header and footer as they appear on the four target routes. Make the smallest necessary shared changes to provide a usable mobile menu, correct internal links such as `/about-us`, visible focus states, and removal of fake or dead links. Do not redesign unrelated pages.
- Use `home_url()` or the project's established WordPress URL helper for internal routes rather than environment-specific absolute URLs.
- Do not add a new UI framework, icon library, form plugin, or animation dependency unless the existing stack cannot meet a confirmed requirement.
- Use Lucide icons only when they improve comprehension. Icons must not replace visible labels for essential actions.
- Use real product-oriented UI built with HTML and CSS rather than fabricating a screenshot. Reuse an existing image only if it accurately supports the new content and has meaningful alt text.

## Responsive and accessibility acceptance criteria

Validate the four routes at representative widths of approximately 320, 375, 768, 1024, and 1440 pixels.

At every width:

- No page-level horizontal overflow, clipped content, overlapping sections, or unreadably small text.
- Navigation, pricing cards, dashboard controls, FAQs, CTAs, and the contact form remain usable by touch and keyboard.
- Tap targets are comfortably sized and spaced.
- Headings follow a logical hierarchy with one clear page-level `<h1>`.
- Landmarks, sections, lists, buttons, links, tables, and forms use semantic HTML.
- Focus indicators are visible and are not removed without an accessible replacement.
- Text and meaningful UI states have sufficient contrast; information is not communicated by color alone.
- Collapsible or tabbed UI exposes appropriate names, selected/expanded state, and relationships to its panels.
- Decorative icons are hidden from assistive technology; informative images have accurate alt text.
- Essential content remains available when JavaScript fails.
- Reduced-motion preferences are respected.

## Engineering constraints

- Follow Sage, Blade, WordPress, Tailwind CSS v4, Alpine.js, and the theme's existing conventions.
- Keep changes tightly scoped to the four requested routes plus shared components directly required to make those routes correct and responsive.
- Do not modify WordPress core, generated build output, dependencies, unrelated plugins, database content, or environment configuration unless the task demonstrably requires it and the change is explicitly justified.
- Do not hard-code environment-specific domains such as local DDEV URLs.
- Avoid unsafe raw output. Escape dynamic content appropriately and apply WordPress security practices to all request handling.
- Avoid large inline scripts and duplicated event handlers. Integrate JavaScript through the current initialization structure.
- Ensure repeated initialization, browser back/forward navigation, or resize behavior does not duplicate handlers or animations.
- Keep Tailwind class usage statically discoverable by the current source scanner. Do not assemble arbitrary class names at runtime.
- Preserve progressive enhancement: server-rendered copy, links, pricing, and form labels must remain meaningful before Alpine or GSAP initializes.

## Required workflow

1. Inspect and map the four WordPress routes to their actual templates and components.
2. Audit existing content against the business source of truth and identify every conflicting or unsupported claim in the touched views.
3. Define the page hierarchy, reusable components, and dashboard interaction model before editing.
4. Implement the content, responsive layouts, interactions, and secure contact behavior.
5. Review the complete diff for factual accuracy, scope control, semantics, security, and unintended regressions.
6. Run the most relevant available validation, including at minimum:
   - The repository's production frontend build (`npm run build`).
   - PHP syntax checks for changed PHP files where applicable.
   - Any existing project lint, format, or test commands relevant to changed code.
   - Runtime smoke checks of `/services`, `/solution`, `/about-us`, and `/contact` when the WordPress environment is available.
   - Browser-console, interaction, keyboard, and responsive checks when browser tooling is available.
7. Fix issues found by validation before handing off the result.

Do not claim a check passed if it was not run. If an environment limitation prevents a check, state exactly what was blocked and provide a precise manual verification step.

## Definition of done

The task is complete only when:

- All four routes render the intended new experience through the correct WordPress templates.
- Every supplied capability and every price appears accurately where relevant.
- No unsupported industry, product, customer, company, or performance claim remains in the touched page experiences.
- `/solution` clearly demonstrates both the owner web dashboard and mobile ecosystem using understandable, responsive product UI.
- `/services` clearly distinguishes billing duration from feature availability and explains which commitment horizon may fit different businesses.
- `/about-us` communicates PRX Holdings, its mission and vision, and Precision, Reliability, and eXcellence without invented history.
- `/contact` has a secure, accessible, honest submission path with the four required visible fields.
- Shared navigation on these routes works on mobile and points to valid URLs.
- The implementation remains readable and maintainable, and the production frontend build succeeds.

## Final response format

Provide a concise implementation report containing:

1. The outcome for each of the four routes.
2. The important shared or backend changes.
3. The exact validation commands/checks run and their results.
4. Any remaining limitation that could not be validated, without hiding or overstating it.