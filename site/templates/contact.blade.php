@extends('layouts.default')
@section('content')
<section>
    <x-layout.container class="wow">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-10">
            <div class="md:col-span-1 wow fadeIn" data-wow-delay="0.5s">
                {!! $page->map()->value() !!}
            </div>

            <div class="md:col-span-2 wow fadeIn" data-wow-delay="1s">
                <h1 class="text-2xl md:text-4xl text-azul tracking-wider my-2">{{ $site->companyName() }}</h1>
                <x-text.p>
                    <span class="text-rojo"><i class="fas fa-map-marker-alt"></i></span> {{ $page->number() }} {{ $page->street() }} <br>
                    {{ $page->city() }}, {{ $page->state() }} {{ $page->zip() }}
                </x-text.p>
                <div class="block md:flex md:space-x-5">
                    <a href="tel:{{ $site->phone() }}">
                        <button class="bg-rojo px-5 py-2 text-white uppercase rounded-full my-5 transform hover:scale-110 transition group">
                            Give us a call <i class="fas fa-phone"></i>
                        </button>
                    </a>
                    <a href="https://wa.me/{{ $site->whatsapp() }}">
                        <button class="bg-azul px-5 py-2 text-white uppercase rounded-full my-5 transform hover:scale-110 transition group">
                            Whatsapp <i class="fab fa-whatsapp"></i>
                        </button>
                    </a>
                </div>
                <div>
                    <?php snippet('formbuilder'); ?>
                </div>
            </div>
        </div>
    </x-layout.container>
</section>



@endsection