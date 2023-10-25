<x-layout>
    <section>
        <h2>Login</h2>
        <div>
            <form action="/login" method="post">
                @method("post")
                @csrf
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </section>
</x-layout>