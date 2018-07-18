@extends('Data.Layouts.Master')
@section('content')

<h1 style="text-align:center">DATA ARTIKEL</h1>
<div style="overflow-x:scroll; overflow-y:scroll;">
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

      @foreach ($result as $datarental)
        {{-- expr --}}
        <tr>
          <td>{{$datarental->no}}</td>
          <td>{{$datarental->judul}}</td>
          <td>{{$datarental->isi}}</td>
          <td>{{$datarental->tahun}}</td>
					<td>
            <a href="{{ Route('delete', ['id' => $datarental->id]) }}" class="btn btn-danger btn-xs" >Hapus</a>
						<a href="{{ Route('edit', ['id' => $datarental->id]) }}" class="btn btn-warning btn-xs">Edit</a>
          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
</div>
@endsection
