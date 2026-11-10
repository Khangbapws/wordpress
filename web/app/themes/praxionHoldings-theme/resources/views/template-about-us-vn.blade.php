{{--
  Template Name: About Us Template VN
--}}

@extends('layouts.app')

@section('content')
    <x-about-vn.hero />
    <x-about-vn.values />
    <x-about-vn.timeline />
    <x-about-vn.partners-testimonials />

    <x-cta.section eyebrow="Explore the PRX Holdings ecosystem"
        title="See how connected tools support beauty and spa operations."
        description="Review the owner and mobile experiences, compare billing terms, or contact PRX Holdings."
        :primary-href="home_url('/solution')" primary-label="Explore the solution" :secondary-href="home_url('/contact')" secondary-label="Contact PRX Holdings" />
@endsection
