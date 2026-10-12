{{--
  Template Name: Additional Services
--}}

@extends('layouts.app')
@section('content')
    {{-- Overview and service selection --}}
    <x-additional-services.hero />
    <x-additional-services.service-overview />

    {{-- Technical Guidance --}}
    <x-additional-services.vibe-coding />
    <x-additional-services.vibe-coding-pricing />
    <x-additional-services.vibe-coding-process />

    {{-- Brand & Creative --}}
    <x-additional-services.brand-photography />
    <x-additional-services.brand-photography-gallery />
    <x-additional-services.graphic-design />
    <x-additional-services.photography-process />

    {{-- Questions and conversion --}}
    <x-additional-services.faq />

    <x-cta.section eyebrow="LET'S WORK ON IT" title="Need the right expertise for your next step?"
        description="Tell us what you are building or how you want your business to be presented. We will help you identify the right next step."
        :primary-href="home_url('/contact')" primary-label="Tell Us What You Need" :secondary-href="home_url('/services')"
        secondary-label="Explore Software Development" />
@endsection
