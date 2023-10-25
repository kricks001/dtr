<x-layout>
<div class="container mx-auto">
<section class="card card-side shadow-xl">
    <figure>
        <img class="w-96 rounded-xl" src="https://source.unsplash.com/random" alt="unsplash-image" />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $item->name }}</h2>
        <p>{{ $item->amount }}</p>
        <p>{{ $item->description }}</p>
        <div class="card-actions justify-evenly">
            <a href="/items/edit/{{ $item->id }}" class="btn btn-success">Edit</a>
            <form action="/items/{{ $item->id }}" method="post">
                @method("delete")
                @csrf
                <button class="btn btn-warning" type="submit">Delete</button>
            </form>
        </div>
    </div>
</section>
</div>
</x-layout>