{{--
  Template Name: Services Template VN
--}}

@extends('layouts.app')

@section('content')
    {{-- 1. Hero: Định vị lại là Software Engineering Partner --}}
    <x-services-vn.hero />

    {{-- 2. Capabilities: Chi tiết năng lực (Web, Mobile, AI, DevOps...) --}}
    <x-services-vn.capabilities />

    <x-services-vn.why-us />

    {{-- 3. Zalo Mini App: Vũ khí cạnh tranh chiến lược với 80M+ users --}}
    <x-services-vn.mini-app />

    {{-- 4. Value: Thay thế Pricing Grid - Giải thích tại sao chọn outsource Việt Nam lại tối ưu chi phí --}}
    <x-services-vn.value />

    {{-- 5. Product Demo: Show case sản phẩm nội bộ để chứng minh năng lực thật --}}
    <x-services-vn.product-demo />

    {{-- 6. Process: Thay thế Guidance cũ - Quy trình làm việc từ Phân tích đến Launch --}}
    <x-services-vn.process />

    <x-services-vn.project-economics />

    {{-- 7. FAQ: Xử lý các lo ngại (objections) của khách hàng B2B --}}
    <x-services-vn.faq />

    {{-- 8. CTA: Lời kêu gọi hành động tập trung vào việc bắt đầu thảo luận dự án --}}
    <x-services-vn.cta-section />
@endsection
