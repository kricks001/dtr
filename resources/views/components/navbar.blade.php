<div class="">
<nav class="navbar bg-base-100">
    <div class="navbar-start justify-evenly">
        <img src="{{ asset('favicon.png', false) }}" alt="favicon" width="60" height="60" />
        <form action="/search" method="post" class="join">
            <input type="search" name="q" id="q" placeholder="Search" class="rounded join-item p-2" />
            <button type="submit" class="join-item btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
</svg>

            </button>
        </form>
    </div>
    <div class="navbar-center gap-8">
        <a class="link hover:link-success" href="/">Home</a>
        <a href="/items" class="link hover:link-success">Items</a>
        <a class="link hover:link-success" href="/cart">Cart</a>
        <a class="link hover:link-success" href="/wishlist">Wishlist</a>
    </div>
    <div class="navbar-end justify-center">
        <a href="mailto:hello@dtr.co.ke">hello@dtr.co.ke</a> | <a href="tel:++254 0712345678">+254 0712345678</a>
    </div>
</nav>
</div>