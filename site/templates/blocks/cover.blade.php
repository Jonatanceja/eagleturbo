<section class="bg-cover2">
    <x-layout.container>

            <x-layout.cols2>
                <div class="wow fadeInLeft">
                    <x-heading.h1>{{ $page->headline() }}</x-heading.h1>
                    <x-text.p><?= $page->text()->kti() ?></x-text>
                    <?php 
                    $items = $page->button()->toStructure();
                    foreach ($items as $item): ?>
                    <a href="{{ $item->link() }}"><x-buttons.primary>{{ $item->text() }}</x-buttons.primary></a>
                    <?php endforeach ?>
                </div>
                <div class="wow fadeInRight">
                    <div class="">
                        @if ($image = $page->rimage()->toFile())
                        <img class="mx-auto py-10 z-40 animate__animated animate__headShake animate__infinite infinite animate__delay-2s" src="{{ $image->url() }}" alt="Turbo">
                        @endif
                    </div>
                </div>

            </x-layout.cols2>



        </x-layout.container>
</section>