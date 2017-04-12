@extends('layouts')

@section('body_class', 'join')


@section('content')
    <h1>Hello world</h1>

    <div class="Testimonial {{ $testimonial->featured ? 'Testimonial--is--featured': ''}}">
        
    </div>
@endsection