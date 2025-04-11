@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    @include('sections.hero')
    @include('sections.about')
    @include('sections.about-second')
    @include('sections.about-third')
    @include('sections.projects')
    @include('sections.projects-list')
    @include('sections.projects-second')
    @include('sections.responsability')
    @include('sections.solutions');
    @include('sections.future')
    @include('sections.testimonials')
    @include('sections.marcas')
    @include('sections.contact')
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
@endsection