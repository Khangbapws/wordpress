{{--
  Template Name: About Us Template
--}}

@extends('layouts.app')

@section('content')
    <x-about.hero />
    <x-about.values />
    <x-about.timeline />

    <x-cta.section eyebrow="Explore the PRX Holdings ecosystem"
        title="See how connected tools support beauty and spa operations."
        description="Review the owner and mobile experiences, compare billing terms, or contact PRX Holdings."
        :primary-href="home_url('/solution')" primary-label="Explore the solution"
        :secondary-href="home_url('/contact')" secondary-label="Contact PRX Holdings" />
@endsection
