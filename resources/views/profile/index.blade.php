@extends('layouts.base')

@section('title', 'Profile')

@section('content')

<x-container style="width: 50vw;">
    <div class="d-flex">
        <div>
            <x-title>
                Profile
            </x-title>
            <table class="table w-50">
                <tr class="table-dark">
                    <td>Email</td>
                    <td>{{ auth()->user()->email }}</td>
                </tr>
                <tr class="table-dark">
                    <td>Name</td>
                    <td>{{ auth()->user()->name }}</td>
                </tr>
                <tr class="table-dark">
                    <td>Created at</td>
                    <td>{{ auth()->user()->created_at }}</td>
                </tr>
            </table>
            <x-form action="{{ route('profile.logout') }}">
                <x-button type="submit">
                    Logout
                </x-button>
            </x-form>
        </div>
        @if(!! auth()->user()->is_admin)
        
        <div>
            <x-title>
                <a href="{{ route('admin.index') }}">
                    Admin Panel
                </a>
            </x-title>
        </div>

        @endif
    </div>
</x-container>

@endsection