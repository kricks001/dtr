<a href="/items/{{ $item->name }}">
    <figure class="card w-64 shadow-xl">
        <img class="rounded-lg" src="{{ $item->images }}" alt="{{ $item->name }}" />
        <figcaption class="card-body">
            <h2 class="card-title">{{ $item->name }}</h2>
            <p>{{ $item->amount }}</p>
        </figcaption>
    </figure>
</a>
