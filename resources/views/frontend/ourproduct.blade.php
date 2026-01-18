@extends('layouts.master')

@section("content")


    <section>
        @include('frontend.include.export')
    </section>
     
    <section>
        @include('frontend.include.partner')
    </section>

    <section id="contact" class="relative z-[50]">
        @include('frontend.include.contact-form')
    </section>

    <section>
        <div class="last-banner">
            <img src="{{ asset('assets/images/bg-3.png') }}">
        </div>
    </section>
@endsection