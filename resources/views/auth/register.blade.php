<x-layout>
    <h1>Register</h1>
    <form action="{{route('register.process')}}" method="post">

        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="border" value="{{old('name')}}">

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

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

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="border">

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <button type="submit" class="border">Register</button>

    </form>
</x-layout>