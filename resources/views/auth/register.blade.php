@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 rounded-md bg-cool-gray-300 mt-4 text-center">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <input type="text" name="name" placeholder="Enter your name" class="w-5/6 rounded-lg m-2 p-2 border-2 @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                @error('name')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input type="email" name="email" placeholder="Enter your email" class="w-5/6 rounded-lg m-2 p-2 border-2 @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                @error('email')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input type="text" name="username" placeholder="Choose your username" class="w-5/6 rounded-lg m-2 p-2 border-2 @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                @error('username')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" name="password" placeholder="Enter your password" class="w-5/6 rounded-lg m-2 p-2 border-2 @error('password') border-red-500 @enderror" value="">
                @error('password')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <input type="password" name="password_confirmation" placeholder="Repeat password" class="w-5/6 rounded-lg m-2 p-2 border-2 @error('password_confirmation') border-red-500 @enderror" value="">
                @error('password_confirmation')
                    <div>
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="bg-blue-600 text-white text-center font-bold w-4/6 m-2 p-2 rounded-md">Register</button>
            </form>
        </div>
    </div>
@endsection