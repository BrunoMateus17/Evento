
@extends('layouts.main')
@section('title','Produto')
@section('js','/js/scripts.js')
@section('content')
    @if($busca != '')
        <p>{{$busca}}</p>
    @endif
@endsection
