@extends('layouts.admin')

@section('admin.title', 'Users')

@section('admin.content')


<x-container>
        @if(session()->exists('alert'))
        <div class="alert alert-success" role="alert">
            {{ session('alert') }}
        </div>
        @endif
    <table class="table">
        <tr class="table-dark">
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>email_verified_at</th>
            <th>is_admin</th>
            <th>created_at</th>
            <th></th>
        </tr>
        @foreach($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->email_verified_at }}</td>
                <td>{{ !! $user->is_admin }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <img style="width:1vw;" src="{{ asset('storage/icons/edit.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
                    <img style="width:1vw" src="{{ asset('storage/icons/delete.png') }}" data-bs-toggle="modal" data-bs-target="#deleteModal{{$user->id}}">
                </td>
            </tr>
            <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure you want to delete this user?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                        <button type="button" class="btn btn-secondary">Dismiss</button>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $user->name }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <x-form action="{{ route('admin.users.update') }}" method="put">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <x-form-item>
                                    <label for="">Name</label>
                                    <x-input name="name" value="{{ $user->name }}"></x-input>
                                </x-form-item>
                                <x-form-item>
                                    <label for="">Email</label>
                                    <x-input name="email" value="{{ $user->email }}"></x-input>
                                </x-form-item>
                                <x-form-item>
                                    <label for="">Email verified at</label>
                                    <x-input name="email_verified_at" value="{{ $user->email_verified_at }}"></x-input>
                                </x-form-item>
                                <x-form-item>
                                    <label for="">Admin</label>
                                    <x-input name="is_admin" value="{{ $user->is_admin }}"></x-input>
                                </x-form-item>
                                <x-form-item>
                                    <label for="">Created at (YYYY-MM-DD HH:II:SS)</label>
                                    <x-input name="created_at" value="{{ $user->created_at }}"></x-input>
                                </x-form-item>
                                <x-form-item>
                                    <x-button type="submit">
                                        Update
                                    </x-button>
                                </x-form-item>
                            </x-form>
                        </div>
                </div>
            </div>
            
        @endforeach
    </table>
    {{ $users->links() }}
</x-container>

@endsection