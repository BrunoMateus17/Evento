
@extends('layouts.main')
@section('title','Produto')
@section('js','/js/scripts.js')
@section('content')
    @if($id != null)
        <p>Exibindo produto id : {{$id}}</p>
    @endif
@endsection
