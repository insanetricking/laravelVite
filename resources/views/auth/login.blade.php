<x-layouts.app>
    <h1 class="text-4xl">LogIN</h1>


    <form class='m-5 w-50' action="{{ route('auth.login') }}" method="POST">
        @csrf
        <label for="">
            <input required class="border text-lg px-5 py-2 rounded-lg w-full my-2" name="username" type="text"
                placeholder="login">
        </label>

        <label for="">
            <input required class="border text-lg px-5 py-2 rounded-lg w-full my-2" name="password" type="password"
                placeholder="password">
        </label>
        <button type="submit"
            class="border text-lg px-5 py-2 rounded-lg w-full my-2 hover:bg-blue-200 ease-in-out duration-300"> Log
            IN</button>


    </form>
</x-layouts.app>
