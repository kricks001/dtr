<x-layout>
<section>
    <h2>Create a New Item</h2>
    <div>
        <form action="/" method="post">
            @method("post")
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div>
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" />
            </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</section>
</x-layout>