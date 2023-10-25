<x-layout>
<section class="card">
    <h2 class="card-title">Edit Item</h2>
    <div class="card-body">
        <form action="/items/{{ $item->id }}" method="post">
            @method("put")
            @csrf
            <div class="form-control mt-2">
                <label for="name" class="label">Name</label>
                <input type="text" name="name" id="name" class="input input-bordered" value="{{ $item->name }}" />
            </div>
            <div class="form-control mt-2">
                <label for="description" class="label">Description</label>
                <textarea name="description" id="description" class="textarea textarea-bordered">
                    {{ $item->description }}
                </textarea>
            </div>
            <div class="form-control mt-2">
                <label for="amount" class="label">Amount</label>
                <input type="number" name="amount" id="amount" class="input input-bordered" value="{{ $item->amount }}" />
            </div>
            <div class="form-control mt-2">
                <button class="btn btn-lg btn-outline btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>
</section>
</x-layout>