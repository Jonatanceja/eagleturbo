<footer class="bg-azul z-50">
    <div class="container mx-auto py-5 md:py-10">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-5 md:gap-10">
            <div class="col-span-1">
                <img src="/images/logotipo-2.svg" alt="Logotipo" class="h-8 md:h-16 mx-auto md:m-0 opacity-50">

            </div>
            <div>
                <h1 class="text-md md:text-xl text-white opacity-50 text-center md:text-left uppercase tracking-wider">Navigation</h1>
                <ul class="text-white text-xs uppercase block space-x-y text-center md:text-left mb-3">
                    @foreach ($site->children()->listed() as $subpage)
                    <a href="{{ $subpage->url() }}"><li class="hover:text-white opacity-40 hover:opacity-80 my-2">{{ $subpage->title() }}</li></a>
                    @endforeach
                </ul>
            </div>

            <div>
                <h1 class="text-md md:text-xl text-white opacity-50 text-center md:text-left uppercase tracking-wider">Catalog</h1>
                <ul class="text-white text-xs uppercase block space-x-y text-center md:text-left mb-3">
                    @foreach (page('catalog')->children() as $subpage)
                    <a href="<?= $subpage->url() ?>"><li class="hover:text-white opacity-40 hover:opacity-80 my-2"><?= $subpage->title() ?></li></a>
                    @endforeach 
                </ul>
            </div>

            <div>
                <h1 class="text-md md:text-xl text-white opacity-50 text-center md:text-left uppercase tracking-wider">Help</h1>
                <ul class="text-white text-xs uppercase block space-x-y text-center md:text-left mb-3">
                    <a href="/privacy-policy"><li class="hover:text-white opacity-40 hover:opacity-80 my-2">Privacy Policy</li></a>
                    <a href="/terms-and-conditions"><li class="hover:text-white opacity-40 hover:opacity-80 my-2">Terms and conditions<li></a>
                </ul>
            </div>

        </div>

    </div>
    <div class="bg-azul-dark text-sm text-azul-light text-center py-3">
        <div class="container mx-auto">
            <p>All rights reserved Eagle Turbo co 2021</p>

        </div>

    </div>

</footer>