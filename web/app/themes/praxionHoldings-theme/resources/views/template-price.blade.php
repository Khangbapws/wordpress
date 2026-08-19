{{--
  Template Name: Price Template
--}}

@extends('layouts.app')

@section('content')
    <x-services.hero />
    <x-services.pricing-grid />
    <x-services.guidance />
    <x-services.capabilities />
    <x-services.faq />

    <x-cta.section eyebrow="Ready to explore PRX Holdings?"
        title="Start with the 15-day free trial, then choose your billing horizon."
        description="Review how the ecosystem works or contact PRX Holdings before deciding on a billing term."
        :primary-href="home_url('/contact')" primary-label="Ask to start the free trial"
        :secondary-href="home_url('/solution')" secondary-label="Explore the solution" />
@endsection
