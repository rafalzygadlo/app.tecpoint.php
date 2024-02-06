@extends('layouts.html')
@section('content')

@include('html.de.service.header') 

@include('html.de.service.hero')

<main id="main">

@include('html.de.service.client')
@include('html.de.service.information')
@include('html.de.service.about')
@include('html.de.service.count')
@include('html.de.service.service')
@include('html.de.service.portfolio')
@include('html.de.service.pricing')
@include('html.de.service.faq')
@include('html.de.service.team')
@include('html.de.service.contact')
@include('html.de.service.footer')
  

</main><!-- End #main -->

@stop
    
