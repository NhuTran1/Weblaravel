@extends('layouts.app')

@section('content')
<h1>This is about page</h1>
{{-- 
@if (1<2)
<h1>1 less than 2</h1>  
@elseif(2<3)
   <h1>2 less than 3</h1> 
   <p>hello world</p>
@endif
{{-- Unless = if not --}}

{{-- @unless (empty($name))
   <h3>Name is not empty;</h3>
    
@endunless --}}
{{-- Kiem tra su ton tai $name --}}
{{-- 
@isset($name)
   <h3>Hello world</h3>
@endisset
    
@for ($i = 1; $i < 4; $i++)
<h3>Number {{ $i }} </h3>
@endfor
 --}}
{{-- {{ $i = 1 }}
@while ($i < 10)
<h2>i = {{ $i }} </h2>
{{ $i++ }}
@endwhile --}}


@endsection
    

