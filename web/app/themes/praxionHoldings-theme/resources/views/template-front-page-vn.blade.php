{{--
  Template Name: Front Page VN
--}}
@extends('layouts.app')

@section('content')
    <x-front-page-vn.hero-section />
    <x-front-page-vn.infrastructure-section /> <!-- Bổ sung: Tech Partners -->
    <x-front-page-vn.services-section /> <!-- Core Capabilities -->
    <x-front-page-vn.approach-section /> <!-- Bổ sung: Philosophy -->
    <x-front-page-vn.ecosystem-section /> <!-- Engagement Models -->
    <x-front-page-vn.showcase-section /> <!-- Own Product Portfolio -->
    <x-front-page-vn.values-section /> <!-- PRX Values (Update text theo P-R-X ở trên) -->

    <x-cta.section eyebrow="Start your engineering journey" title="Ready to build software that scales?"
        description="Schedule a technical consultation to discuss your product architecture, engineering needs, or MVP ideas."
        :primary-href="home_url('/contact')" primary-label="Discuss Your Project" :secondary-href="home_url('/services')" secondary-label="View Capabilities" />
@endsection
