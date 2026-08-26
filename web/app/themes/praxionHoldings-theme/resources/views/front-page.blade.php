@extends('layouts.app')

@section('content')
    <x-front-page.hero-section />
    <x-front-page.infrastructure-section /> <!-- Bổ sung: Tech Partners -->
    <x-front-page.services-section /> <!-- Core Capabilities -->
    <x-front-page.approach-section /> <!-- Bổ sung: Philosophy -->
    <x-front-page.ecosystem-section /> <!-- Engagement Models -->
    <x-front-page.showcase-section /> <!-- Own Product Portfolio -->
    <x-front-page.values-section /> <!-- PRX Values (Update text theo P-R-X ở trên) -->

    <x-cta.section eyebrow="Start your engineering journey" title="Ready to build software that scales?"
        description="Schedule a technical consultation to discuss your product architecture, engineering needs, or MVP ideas."
        :primary-href="home_url('/contact')" primary-label="Discuss Your Project" :secondary-href="home_url('/capabilities')" secondary-label="View Capabilities" />
@endsection
