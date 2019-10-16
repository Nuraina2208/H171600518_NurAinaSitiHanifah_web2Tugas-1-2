@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Artikel</div>
                <div class="card-body">

                    <div class="card-body">
                        <div class="row justify-content-right">
                            <a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>

                            <a href="{!! route('artikel.trash') !!}" class="btn btn-success">Lihat Data Hapus</a>
                       </div>
                    </div>

                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr>
                        <th scope="col"><center>ID</center></th>
                        <th scope="col"><center>Judul</center></th>
                        <th scope="col"><center>Isi</center></th>
                        <th scope="col"><center>Kategori</center></th>
                        <th scope="col"><center>Users Id</center></th>
                        <th scope="col"><center>Create</center></th>
                        <th scope="col"><center>Update</center></th>
                        <th scope="col"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listArtikel as $item)
                        <tr>
                        <td><center>{!! $item->id !!}</center></td>
                        <td><center>{!! $item->judul !!}</center></td>
                        <td><center>{!! $item->isi !!}</center></td>
                        <td><center>{!! $item->kategori_artikel_id !!}</center></td>
                        <td><center>{!! $item->users_id !!}</td>
                        <td><center>{!! $item->created_at->format('d/m/Y H:i:s') !!}</center></td>
                        <td><center>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</center></td>
                        <td>
                         <a href="{!! route('artikel.show',[$item->id]) !!}"class="btn btn-success">Lihat</a>

                         <a href="{!! route('artikel.edit',[$item->id]) !!}"class="btn btn-primary">Ubah</a>

                          {!! Form::open(['route' => ['artikel.destroy', $item->id],'method'=>'delete']); !!}

                         {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini ?')"]); !!}

                         {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection