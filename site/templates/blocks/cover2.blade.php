<section class="-mt-24 md:-mt-32 wow fadeIn">
    @if ($image = $page->bgImage()->toFile())
    <div class="h-screen w-full bg-right-top bg-cover absolute z-0" style="background-image: url( {{ $image->url() }}">
    @endif
</div>
    <div class="h-screen w-full bg-right relative z-10 bg-cover3">
        <x-layout.container>
            <div class="flex items-end md:items-center h-screen justify-end">
                <div class="w-full md:w-1/2 pb-12 md:pb-0">
                    <h1 class="text-2xl md:text-6xl text-azul font-bold tracking-wider">{{ $page->headline() }}</h1>
                    <x-text.p>{{ $page->text() }}</x-text.p>
                </div>
            </div>
        </x-layout.container>    
    </div>
</section>