{{--
  Template Name: Solution Template VN
--}}

@extends('layouts.app')

@section('content')
    <x-solution-vn.hero />
    <x-solution-vn.capabilities />
    <x-solution-vn.zalo-mini-app />
    <x-solution-vn.delivery-model />
    <x-solution-vn.ecosystem />
    <x-solution-vn.why-us />
    {{-- <x-solution.dashboard-preview /> --}}
    <x-solution-vn.live-demo />
    <x-solution-vn.mobile-preview />
    <x-cta.section eyebrow="START A PROJECT" title="Have a software idea worth building?"
        description="Bring us your product idea, business challenge, or existing system. We can help turn it into software your customers and team can actually use."
        :primary-href="home_url('/contact')" primary-label="Discuss Your Project" :secondary-href="home_url('/services')" secondary-label="Explore Our Capabilities" />
    <x-solution-vn.own-product />
    <x-solution-vn.faq />
@endsection
