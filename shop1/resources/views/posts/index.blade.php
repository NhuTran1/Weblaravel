@extends('layouts.app')

@yield('content')
@section('name')
<h1>PageCOntroller. index, hello hello</h1>
<img src="{{ asset('storage/anh-sach.jpg') }}" alt="anhsach" style="width: 100 " height="100">

<ul>
    @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    
</ul>
@endsection