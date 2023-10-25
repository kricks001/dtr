<x-layout>
<section class="mt-5">
        <h2 class="hidden">All Items</h2>
        <div class="flex flex-row flex-wrap justify-center gap-2">
            @each('partials.item-card', $items, 'item', 'partials.empty-list')
        </div>
        <div class="container mx-auto my-4">
            {{ $items->links() }}
        </div>
    </section>
</x-layout>