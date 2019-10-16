@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Kategori Galeri</div>
                <div class="card-body">

                    <div class="card-body">
                        <div class="row justify-content-right">
                            <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-secondary">Tambah Data</a>

                            <a href="{!! route('kategori_galeri.trash') !!}" class="btn btn-success">Lihat Data Hapus</a>
                        </div>
                    </div>

                <table class="table table-bordered">
                    <thead class="bg-info">
                        <tr>
                        <tr>
                        <th scope="col"><center>ID</center></th>
                        <th scope="col"><center>Nama</center></th>
                        <th scope="col"><center>User Id</center></th>
                        <th scope="col"><center>Create</center></th>
                        <th scope="col"><center>Update</center></th>
                        <th scope="col"><center>Aksi</center></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listKategoriGaleri as $item)
                        <tr>
                        <td><center>{!! $item->id !!}</center></td>
                        <td><center>{!! $item->nama !!}</center></td>
                        <td><center>{!! $item->users_id !!}</center></td>
                        <td><center>{!! $item->created_at->format('d/m/Y H:i:s')!!}</center></td>
                        <td><center>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</center></td>
                        
                        <td>
                            <a href="{!! route('kategori_galeri.show',[$item->id]) !!}"class="btn btn-warning">Lihat</a>

                            <a href="{!! route('kategori_galeri.edit',[$item->id]) !!}"class="btn btn-success">Ubah</a>

                            {!! Form::open(['route' => ['kategori_galeri.destroy', $item->id],'method'=>'delete']); !!}

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