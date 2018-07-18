<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style>

table {
  border: "1px";
  border-collapse: collapse;
  width: 100%;
  align: center;
}

td, th {
  border: 1px solid;
  text-align: center;
}

h1 {
  text-align: center;
}

</style>
<body>
  <h1>DATA ARTIKEL</h1>
  <table>
    <thead>
      <tr bgcolor="#b8b8b8">
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tahun</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($artikel as $dataartikel)
      <tr>
        <td>{{$dataartikel->no}}</td>
        <td>{{$dataartikel->judul}}</td>
        <td>{{$dataartikel->isi}}</td>
        <td>{{$dataartikel->tahun}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
