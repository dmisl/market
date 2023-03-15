@extends('layouts.base')

@section('title', 'Register')

@section('content')

<x-container style="width: 30vw;">
    <x-title class="text-center py-3">Register</x-title>
    <x-form action="{{ route('register.store') }}">
        
        <x-form-item>
            <x-input name="name" placeholder="Name" />
        </x-form-item>

        <x-form-item>
            <x-input name="email" placeholder="Email" />
        </x-form-item>

        <x-form-item>
            <x-input name="password" placeholder="Password" />
        </x-form-item>

        <x-form-item>
            <x-input name="password_confirmation" placeholder="Password Confirmation" />
        </x-form-item>

        <x-form-item>
            <x-checkbox value="true" name="agreement">
                Agree with page`s policies
            </x-checkbox>
        </x-form-item>

        <x-form-item>
            <x-button type="submit">
                Register
            </x-button>
        </x-form-item>

    </x-form>

    <div class="py-4">
        <a href="{{ route('login.index') }}" class="small">
            Have an account?
        </a>
    </div>
    
</x-container>

@endsection