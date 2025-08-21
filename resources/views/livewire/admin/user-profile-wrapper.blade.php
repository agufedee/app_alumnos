@extends('layouts.app')

@section('content')
    @livewire('admin.user-profile', ['user' => $user])
@endsection