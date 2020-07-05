@extends('sbadmin2.master');

@section('content')

<h1>Artikel Showup</h1>
    <p>Judul : {{$list->judul}}</p>
    <p>Slug : {{$list->slug}}</p>
    <p>Tag : {{$list->tag}}</p>
    <p>Isi : {{$list->isi}}</p>

@endsection

