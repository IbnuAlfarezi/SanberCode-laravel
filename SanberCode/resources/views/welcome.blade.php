@extends('layout.layout')
@section('title', 'Halaman Home')
@section('header-content', 'Welcome')
@section('content')
    <h2 class="text-2xl font-bold text-gray-700 mb-5">Selamat Datang, {{ $firstName }} {{ $lastName }}!</h2>
    <p class="text-gray-600">Terima kasih telah bergabung di SanberBook. Social Media kita bersama</p>
@endsection