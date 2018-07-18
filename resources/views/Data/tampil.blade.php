@extends('Data.Layouts.Master')
@section('content')

	<a class="btn btn-primary" href="{{ Route('create') }}">Tambah Data</a>
	<br><br>

	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
				<th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tahun</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($artikel as $dataartikel)
        {{-- expr --}}
        <tr>
					<td>{{$dataartikel->no}}</td>
          <td>{{$dataartikel->judul}}</td>
          <td>{{$dataartikel->isi}}</td>
          <td>{{$dataartikel->tahun}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $dataartikel->id]) }}" class="btn btn-danger btn-xs">Hapus</a>
            {{-- <a href="{{ Route('delete')}}" class="btn btn-danger btn-xs">Hapus</a> --}}
						<a href="{{ Route('edit', ['id' => $dataartikel->id]) }}" class="btn btn-warning btn-xs">Edit</a>
            {{-- <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
             --}}

          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
@endsection
