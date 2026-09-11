{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

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
                    Tell us what you are trying to
                    <span class="text-primary">build.</span>
                </h1>
                <p class="hero-subtitle mx-auto mt-7 max-w-3xl text-lg leading-8 text-muted sm:text-xl">
                    Have a product, system, or idea in mind? Contact us to discuss your technical requirements,
                    architecture, and how our engineering team can help bring it to production.
                </p>
            </div>
        </div>
    </section>

    <section aria-labelledby="contact-form-title" class="py-20 sm:py-24 lg:py-32">
        <div class="container-page">
            <div class="grid gap-12 lg:grid-cols-[0.72fr_1.28fr] lg:gap-16 xl:gap-24">
                <div>
                    <p class="text-sm font-semibold tracking-[0.18em] text-primary uppercase">Send a message</p>
                    <h2 id="contact-form-title" class="mt-4 text-3xl leading-tight font-bold text-text-dark sm:text-4xl">
                        Tell us what you want to understand.</h2>
                    <p class="mt-5 text-lg leading-8 text-muted">Share enough context for PRX Holdings to understand your
                        question. Fields marked “required” must be completed.</p>

                    <div class="mt-9 space-y-4">
                        <a href="{{ home_url('/solution') }}"
                            class="group flex min-h-14 items-center justify-between gap-4 rounded-2xl border border-gray-200/80 bg-white px-5 py-4 font-semibold text-text-dark shadow-sm hover:border-primary/30 hover:text-primary">
                            Explore the product experience
                            <i data-lucide="arrow-right"
                                class="h-4 w-4 shrink-0 transition-transform group-hover:translate-x-1"
                                aria-hidden="true"></i>
                        </a>
                        <a href="{{ home_url('/price') }}"
                            class="group flex min-h-14 items-center justify-between gap-4 rounded-2xl border border-gray-200/80 bg-white px-5 py-4 font-semibold text-text-dark shadow-sm hover:border-primary/30 hover:text-primary">
                            Compare billing terms
                            <i data-lucide="arrow-right"
                                class="h-4 w-4 shrink-0 transition-transform group-hover:translate-x-1"
                                aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61593519958952"
                            class="group flex min-h-14 items-center justify-between gap-4 rounded-2xl border border-gray-200/80 bg-white px-5 py-4 font-semibold text-text-dark shadow-sm hover:border-primary/30 hover:text-primary">
                            <div class="flex flex-row gap-2">
                                <img src="{{ Vite::asset('resources/images/contact/facebook.svg') }}" alt="Facebook"
                                    class="h-6 w-6 shrink-0" />
                                Facebook
                            </div>
                            <i data-lucide="arrow-right"
                                class="h-4 w-4 shrink-0 transition-transform group-hover:translate-x-1"
                                aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/prxholdings777/"
                            class="group flex min-h-14 items-center justify-between gap-4 rounded-2xl border border-gray-200/80 bg-white px-5 py-4 font-semibold text-text-dark shadow-sm hover:border-primary/30 hover:text-primary">
                            <div class="flex flex-row gap-2">
                                <img src="{{ Vite::asset('resources/images/contact/instagram.svg') }}" alt="Instagram"
                                    class="h-6 w-6 shrink-0" />
                                Instagram
                            </div>
                            <i data-lucide="arrow-right"
                                class="h-4 w-4 shrink-0 transition-transform group-hover:translate-x-1"
                                aria-hidden="true"></i>
                        </a>
                        <a href="https://x.com/prxholdings"
                            class="group flex min-h-14 items-center justify-between gap-4 rounded-2xl border border-gray-200/80 bg-white px-5 py-4 font-semibold text-text-dark shadow-sm hover:border-primary/30 hover:text-primary">
                            <div class="flex flex-row gap-2">
                                <img src="{{ Vite::asset('resources/images/contact/social.svg') }}" alt="X Social"
                                    class="h-6 w-6 shrink-0" />
                                X social
                            </div>
                            <i data-lucide="arrow-right"
                                class="h-4 w-4 shrink-0 transition-transform group-hover:translate-x-1"
                                aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="rounded-3xl border border-gray-200/80 bg-white p-5 shadow-xl shadow-black/[0.05] sm:p-8 lg:p-10">
                    {!! do_shortcode('[contact-form-7 id="ad43528" html_class="prx-contact-form"]') !!}
                </div>
            </div>
        </div>
    </section>
@endsection
