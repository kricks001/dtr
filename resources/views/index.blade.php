<x-layout>
<section class="hero min-h-screen" style="background-image: url({{ asset('background-1.jpg') }})">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">DTR Furnitures</h1>
                <p class="mb-5">Get 50% OFF NOW!</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <h2 class="hidden">Categories</h2>
        <div class="flex flex-row flex-wrap justify-center gap-2">
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('interior-design-1.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Interior Design</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('interior-design-2.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Furniture</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('coffee-tables-1.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Coffee Tables</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('tv-cabinets-2.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">TV Cabinets</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('mordern-seats-1.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Mordern Seats</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('river-concepts-2.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">River Concepts</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('lights-and-lamps-2.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Lights and Lamps</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('mats-and-carpets-2.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Mats and Carpets</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
            <section class="card w-96">
                <figure>
                    <img class="rounded-xl image-full" src="{{ asset('home-interiors-1.jpg', false) }}" alt="unsplash-image" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Home Interiors</h3>
                    <div class="card-actions">
                        <a href="/" class="btn btn-outline btn-primary">Read More</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
</x-layout>