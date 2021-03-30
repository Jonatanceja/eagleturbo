<nav class="fixed w-full z-50">
    <div class="bg-rojo py-3 hidden md:block">
        <div class="container mx-auto flex">
            <ul class="text-white uppercase flex space-x-5">
                @foreach ($site->children()->listed() as $subpage)
                <a href="{{ $subpage->url() }}"><li class="hover:underline transition">{{ $subpage->title() }}</li></a>
                @endforeach

            </ul>
            <div class="flex-grow text-right justify-end space-x-5 text-white">
                <a class="text-sm tracking-wider hover:underline transition" href="tel:{{ $site->phone() }}"><span class="text-naranja"><i class="fas fa-phone mr-2"></i></span>{{ $site->phone() }}</a>
                <a class="text-sm tracking-wider hover:underline transition" href="mailto:{{ $site->mail() }}"><span class="text-naranja"><i class="fas fa-envelope mr-2"></i></span>{{ $site->mail() }}</a>   
            </div>
        </div>
    </div>

    <div class="bg-white shadow-sm py-3">
        <div class="container mx-auto flex items-center">

            <!--- Left hamburger Hidden --->

            <div class="flex w-1/4 md:hidden" 
            x-data="{ isOpen: false }"
            @keydown.escape="isOpen = false">
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="block px-2 text-azul hover:text-azul-light focus:outline-none focus:text-azul-dark z-40"
                    :class="{ 'transition transform-180': isOpen }">
                    <svg
                    class="h-6 w-6 fill-current"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        x-show="isOpen"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                    <path
                        x-show="!isOpen"
                        fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>
                

                <div class="bg-rojo flex items-center absolute right-0 top-0 w-full  md:w-1/3 h-screen shadow-xl z-30"
                :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
                @click.away="isOpen = false"
                x-show.transition="true">
                    <div class="container mx-auto">
                        <ul class="text-white uppercase block space-x-y text-center mb-3">
                            @foreach ($site->children()->listed() as $subpage)
                            <a href="{{ $subpage->url() }}"><li>{{ $subpage->title() }}</li></a>
                            @endforeach
                        </ul>
                        <div class="text-center space-x-5 text-white block">
                            <p><a class="text-sm tracking-wider hover:underline transition" href="tel:{{ $site->phone() }}"><span class="text-naranja"><i class="fas fa-phone mr-2"></i></span>{{ $site->phone() }}</a></p>
                            <p><a class="text-sm tracking-wider hover:underline transition" href="mailto:{{ $site->mail() }}"><span class="text-naranja"><i class="fas fa-envelope mr-2"></i></span>{{ $site->mail() }}</a></p>  
                        </div>
                    </div>
                </div>
            </div>

            <!--- Logo --->

            <div class="w-2/4 md:w-2/5">
                <a href="{{ $site->url() }}"><img src="/images/logotipo.svg" alt="Eagle Turbo" class="h-8 md:h-16 mx-auto md:m-0 hover:opacity-90"></a>
            </div>

            <div class="hidden md:block md:w-2/5">
                <form action="search" method="GET" class="flex">
                    <input class="border-gris rounded-l-full bg-white focus:border-azul w-full" type="search" name="q" value="{{ html(get('q')) }}">
                    <input class="bg-rojo px-3 rounded-r-full text-white hover:bg-rojo-light cursor-pointer" type="submit" value="Search">
                </form>
            </div>

            <!--- Hamburger Menu --->

            <div class="flex w-1/5 justify-end"  
            x-data="{ isOpen: false }"
            @keydown.escape="isOpen = false">
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="block px-2 text-rojo hover:text-rojo-light focus:outline-none focus:text-rojo-dark z-50"
                    :class="{ 'transition transform-180': isOpen }">
                    <svg
                    class="h-6 w-6 fill-current"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        x-show="isOpen"
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                    <path
                        x-show="!isOpen"
                        fill-rule="evenodd"
                        d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                    </svg>
                </button>

                <!--- Products Menu --->

                <div class="bg-rojo flex items-center absolute right-0 top-0 w-full  md:w-1/3 h-screen shadow-xl z-40"
                :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
                @click.away="isOpen = false"
                x-show.transition="true"
                >

                    <div class="mx-auto px-5 md:px-0">
                        <h1 class="text-2xl uppercase font-bold text-white my-6">Products</h1>
                        <ul class="container mx-auto text-center text-white uppercase tracking-wide">
                            @foreach (page('catalog')->children() as $subpage)
                            <a href="<?= $subpage->url() ?>"><li><?= $subpage->title() ?></li></a>
                            @endforeach 
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>

    
</nav>

<div class="h-24 md:h-32">

</div>