<x-layout>
    <h1>Login</h1>

    <form action="{{route('login.process')}}" method="post">
        @csrf

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="border" value="{{old('email')}}">

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="border">

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <button type="submit" class="border">Login</button>
    </form>
</x-layout>