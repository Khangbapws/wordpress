@extends('layouts.app')

@section('content')
    <x-solution.hero />
    <x-solution.capabilities />
    <x-solution.delivery-model />
    <x-solution.ecosystem />
    <x-solution.why-us />
    <x-solution.dashboard-preview />
    <x-solution.mobile-preview />
    <x-cta.section eyebrow="START A PROJECT" title="Have a software project in mind?"
        description="Tell us what you are building, what needs to improve, and where your team needs technical support."
        :primary-href="home_url('/contact')" primary-label="Discuss Your Project" :secondary-href="home_url('/services')" secondary-label="Explore Our Capabilities" />
    <x-solution.own-product />
    <x-solution.faq />
@endsection
