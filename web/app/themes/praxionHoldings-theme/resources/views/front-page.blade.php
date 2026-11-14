@extends('layouts.app')

@section('content')
    @php
        /*
         * Detect the current Polylang language.
         * English is the fallback language.
         */
        $currentLanguage = function_exists('pll_current_language') ? pll_current_language('slug') : 'en';
    @endphp

    @if ($currentLanguage === 'vi')
        {{-- Vietnamese Homepage --}}
        @include('partials.front-page.vi')
    @else
        {{-- English Homepage --}}
        @include('partials.front-page.en')
    @endif
@endsection
