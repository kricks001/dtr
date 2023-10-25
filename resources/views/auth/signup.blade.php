<x-layout>
    <section>
        <h2>Signup</h2>
        <div>
            <form action="/signup" method="post">
                @method("post")
                @csrf
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div>
                    <label for="password-confirmation">Confirm Password</label>
                    <input type="password" name="password-confirmation" id="password-confirmation" />
                </div>
                <div>
                    <button type="submit">Signup</button>
                </div>
            </form>
        </div>
    </section>
</x-layout>