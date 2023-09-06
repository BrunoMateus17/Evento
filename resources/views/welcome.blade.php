
@extends('layouts.main')
@section('title','HDC Events')
@section('js','/js/scripts.js')
@section('content')
<div class="container-fluid">
<h1>teste</h1>
    <img src="/img/banner.jpeg" alt="">
    @if(10 > 5)
        <p>true</p>
    @endif
    <h1>{{$nome}}</h1>


    @for($i = 0; $i < count($arr);$i++)
        <p>{{ $arr[$i] }}</p>
    @endfor
    @php
        $name = "doido";
        echo $name;
    @endphp
    @foreach($names as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
    @endforeach
    <!-- comentario da blade -->
    {{-- asd --}}
</div>

@endsection
