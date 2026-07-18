@extends('layouts.app')

@section('content')
    <x-front-page.hero-section />
    <x-front-page.ecosystem-section />
    <x-front-page.services-section />
    <x-front-page.showcase-section />
    <x-front-page.pricing-section />
    <x-front-page.values-section />

    <x-cta.section eyebrow="Bring the ecosystem into focus"
        title="Explore how PRX Holdings can connect your beauty or spa operation."
        description="Review the full product experience, compare billing terms, or contact PRX Holdings with your questions."
        :primary-href="home_url('/solution')" primary-label="Explore the solution"
        :secondary-href="home_url('/contact')" secondary-label="Contact PRX Holdings" />
@endsection
