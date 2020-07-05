@extends('sbadmin2.master');


@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Artikel</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Judul</th>
                      <th>Slug</th>
                      <th>Tag</th>
                      <th>Artikel</th>
                      <th>Perintah</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach('$artikel as $key => $list')
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $list=>judul}}</td>
                      <td>{{$list->slug}}</td>
                      <td>{{$list->tag}}</td>
                      <td>{{$list->isi}}</td>
                      <td><a href="/artikel/{{$list->id}}"><button type="button" class="btn btn-primary">Show</button></a>
                      <a href="/artikel/{{$list->id}}"><button type="button" class="btn btn-info">Edit</button></a>
                      <form role="form" action="/artikel/{{$list->id}}" method="POST" display="inline">
                               @csrf
                                 @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                      </form>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

@endsection


@push('script s')

<script src="{{ asset('/sbadmin2/js/swal.min.js') }}"></script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Posting Artikel Baru',
        icon: 'success',
        confirmButtonText: 'Tutup'
    })
</script>

@endpush



