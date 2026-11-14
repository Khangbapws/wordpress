{{--
  Template Name: About Us Template VN
--}}

@extends('layouts.app')

@section('content')
    <x-about-vn.hero />
    <x-about-vn.values />
    <x-about-vn.timeline />
    <x-about-vn.partners-testimonials />

    <x-cta.section eyebrow="Khám phá hệ sinh thái PRX Holdings"
        title="Trải nghiệm sức mạnh của hệ thống công cụ đồng bộ trong vận hành thực tế."
        description="Trải nghiệm giao diện dành cho chủ doanh nghiệp và ứng dụng di động, đối chiếu các gói thanh toán linh hoạt, hoặc kết nối trực tiếp với PRX Holdings."
        :primary-href="home_url('/giai-phap')" primary-label="Khám phá giải pháp" :secondary-href="home_url('/lien-he')" secondary-label="Liên hệ PRX Holdings" />
@endsection
