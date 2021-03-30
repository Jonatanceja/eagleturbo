<x-layout.container>

        <x-heading.h2 class="wow fadeInUp">
            <x-slot name="super">{{ $page->subtitleIntro() }}</x-slot>
            {{ $page->titleIntro() }}
        </x-heading.h2>
        <x-text.p class="wow fadeInDown">
            <?= $page->textIntro() ?>
        </x-text.p>
        <?php 
        $items = $page->buttonIntro()->toStructure();
        foreach ($items as $item): ?>
        <a href="{{ $item->link() }}"><x-buttons.primary>{{ $item->text() }}</x-buttons.primary></a>
        <?php endforeach ?>

</x-layout.container>