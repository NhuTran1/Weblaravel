@extends('layouts/app')
@yield('content')

echo url('')
<img src="{{ url('storage/anh-sach.jpg') }}" alt=""
    width="100"
    height="100">

<img src="{{ asset('storage/anh-sach.jpg') }}" alt=""
    width="100"
    height="100">
<h1>Hello word</h1>

<a href="{{ route('contact') }}">Contact</a>
