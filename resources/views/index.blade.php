@extends('app')
@section('content_body')
    <div class="logo_fixed background_default"></div>
    @include('elements.main_menu')
    <div class="container-fluid">
        @include('sections.header')
        @include('sections.section_one')
{{--        @include('sections.section_two')--}}
        @include('sections.section_three')
        @include('sections.section_four')
        @include('sections.section_five')
{{--        @include('sections.section_six')--}}
        @include('sections.section_seven')
        @include('sections.footer')
    </div>
@endsection
