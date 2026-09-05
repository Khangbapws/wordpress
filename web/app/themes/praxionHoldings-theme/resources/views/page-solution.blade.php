@extends('layouts.app')

@section('content')
    <x-solution.hero />
    <x-solution.capabilities />
    <x-solution.zalo-mini-app />
    <x-solution.delivery-model />
    <x-solution.ecosystem />
    <x-solution.why-us />
    {{-- <x-solution.dashboard-preview /> --}}
    <x-solution.live-demo />
    <x-solution.mobile-preview />
    <x-cta.section eyebrow="START A PROJECT" title="Have a software idea worth building?"
        description="Bring us your product idea, business challenge, or existing system. We can help turn it into software your customers and team can actually use."
        :primary-href="home_url('/contact')" primary-label="Discuss Your Project" :secondary-href="home_url('/services')" secondary-label="Explore Our Capabilities" />
    <x-solution.own-product />
    <x-solution.faq />
@endsection
