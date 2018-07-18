@extends('Data.Layouts.Master')
@section('content')
  <form class="form-horizontal" action="{{ Route('insert') }}" method="post">
    <fieldset>
      @csrf
      <div class="form-group">
        <label class="col-md-2 control-label" for="no">No</label>
        <div class="col-md-6">
          <input name="no" type="number" placeholder="No" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="judul">Judul</label>
        <div class="col-md-6">
          <input name="judul" type="text" placeholder="Judul" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="isi">Isi</label>
        <div class="col-md-6">
          <input name="isi" type="text" placeholder="Isi" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="tahun">Tahun</label>
        <div class="col-md-6">
          <input name="tahun" type="text" placeholder="tahun" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </fieldset>


  </form>
@endsection
