@extends('layouts.app')

@section('content')
    <x-solution.hero />
    <x-solution.dashboard-preview />
    <x-solution.mobile-preview />
    <x-solution.ecosystem />
    <x-solution.capabilities />
    <x-solution.faq />

    <x-cta.section eyebrow="Choose your next step"
        title="See the full ecosystem, then choose a billing term that fits your plans."
        description="Compare complete-term pricing or contact PRX Holdings with questions about the owner, staff, customer, or check-in experience."
        :primary-href="home_url('/price')" primary-label="Review pricing" :secondary-href="home_url('/contact')" secondary-label="Contact PRX Holdings" />
@endsection
