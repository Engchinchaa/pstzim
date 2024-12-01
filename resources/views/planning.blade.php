@extends('layouts.app')

@section('title', 'Services Us Page')

@section('content')
<!-- Slider Start -->
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Planning and Designing
            </h1>
            <span class="sub-text">Excepteur sint occaecat cupidatat non proident, sunt in coulpa qui official<br>
			            modeserunt mollit anim id est 20 years experience.</span>
            <ul class="breadcrumbs-area">
                <li title="Go to konstruk">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li>General Construction</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->
<!-- Services End -->
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush

