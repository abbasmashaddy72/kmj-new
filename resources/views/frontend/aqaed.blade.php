@extends('layouts.front_end_layout')
@section('content')
    <section class="relative">
        <div class="absolute inset-0 h-128 pt-16 box-content -z-1">
            <img class="absolute inset-0 w-full h-full object-cover opacity-25" src="{{ asset('images/karbala-bg.jpg') }}"
                width="1440" height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-16">

                <!-- Featured article -->
                <div class="max-w-3xl" data-aos="fade-down">
                    <article>
                        <header>
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <a href="#">
                                    <h1 class="h1 font-red-hat-display mb-4">What is <span
                                            class="text-amber-600 uppercase">Karbala? </span></h1>
                                </a>
                                <p class="text-xl text-gray-600 dark:text-gray-400">Brief Description Of The Tragic Events
                                    Of Karbala.
                                </p>
                            </div>
                        </header>
                    </article>
                </div>

            </div>
        </div>
    </section>
    @include('frontend.partials.karbala.posts')
    @include('frontend.partials.karbala.blog_list')
@endsection
