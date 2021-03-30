<section class="bg-azul-dark wow fadeIn">
    <x-layout.container>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-10 items-center">
            <div class="wow fadeInRight" data-wow-delay="0.5s">
                <x-heading.h2-light>
                    <x-slot name="super">{{ $page->aboutSubtitle() }}</x-slot>
                    {{ $page->aboutTitle() }}
                </x-heading.h2-light>
                <x-text.p-light>
                    {{ $page->aboutText() }}
                </x-text.p-light>
            </div>
            <div class="wow fadeInLeft" data-wow-delay="0.5s">
                @if ($image = $page->aboutImage()->toFile())
                <img class="mx-auto" src="{{ $image->url() }}" alt="">
                @endif
            </div>

        </div>
    </x-layout.container>    

</section>