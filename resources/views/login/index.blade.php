@extends('layouts.base')

@section('title', 'Login')

@section('content')

<x-container style="width: 30vw;">
    <x-title class="text-center py-3">Login</x-title>
    <x-form action="{{ route('login.store') }}">
        <x-form-item>
            <x-input name="email" placeholder="Email" />
        </x-form-item>
        <x-form-item>
            <x-input name="password" placeholder="Password" />
        </x-form-item>
        <x-form-item>
            <x-checkbox name="remember">
                Remember me
            </x-checkbox>
        </x-form-item>
        <x-form-item>
            <x-button class="mx-auto" type="submit">
                Login
            </x-button>
        </x-form-item>
    </x-form>

    <div class="py-4">
        <a href="{{ route('register.index') }}" class="small">
            Haven`t registered yet?
        </a>
    </div>
    
</x-container>

@endsection