@extends('layouts.admin')

@section('title', 'User Management')

@section('content')




    <h1 class="text-2xl font-bold">User Management</h1>
    <p class="mt-2">Manage your users from this page.</p>

    @foreach($users as $user)
        <div class="mt-4 p-4 border rounded">
            <h2 class="text-xl font-semibold">{{ $user->name }}</h2>
            <p>Email: {{ $user->email }}</p>
            <p>Role: {{ $user->role }}</p>
        </div>
    @endforeach 
@endsection