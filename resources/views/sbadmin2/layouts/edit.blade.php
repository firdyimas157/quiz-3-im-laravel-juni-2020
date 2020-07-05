@extends('sbadmin2.master');

@section('content')
<section>
<h1>Edit Artikelmu</h1>
  <div>
  <form role="form" action="/artikel/{{$artikeledit->id}}" method="POST">
  @csrf
    @method{'PUT'}
  <div class="form-group">
    <label for="exampleFormControlInput1">Judul</label>
    <input type="text" class="form-control" id="name"  value="{{$artikeledit->judul}}" name="judul" placeholder="tuliskan judul">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Slug</label>
    <input type="text" class="form-control" id="slug"  value="{{$artikeledit->slug}}"name="slug" placeholder="contoh: cara-membuat-kopi">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tag</label>
    <input type="text" class="form-control" id="tag"  value="{{$artikeledit->tag}}"name="tag" placeholder="contoh: kopi, susu, buah, dll.">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Tuliskan Artikelmu</label>
    <textarea class="form-control" id="isi" value="{{$artikeledit->isi}}"name="artikel" artikel" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Buat Artikel</button>
</form>
</section>

@endsection