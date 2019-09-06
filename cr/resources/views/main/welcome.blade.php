@extends('main')
@section('title','| Home')

@section('content')

@include('main.partials._form')
@include('main.partials._about')
@include('main.partials._services')
@include('main.partials._fun')

@include('main.partials._allcars')


<section id="testimonial-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
               
                <!-- Section Title End -->
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 m-auto">
                   
                </div>
            </div>
        </div>
    </section>
    @include('main.partials._mobile')


@endsection