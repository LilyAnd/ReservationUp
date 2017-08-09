<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
	<h1>Daftar Merchant</h1>
	<table class="table table-striped">
		<tr>
			<th>ID Merchant</th>
			<th>Nama Merchant</th>
			<th>Aksi</th>
		</tr>
		@foreach($merchants as $val)
		<tr>
			<td>{{$val->id_merchant}}</td>
			<td>{{$val->merchant_name}}</td>
			<td><a href="daftar/dashboard/{{$val->id_merchant}}" class="btn btn-info">detail</a>
			<a href="daftar/reservasi/{{$val->id_merchant}}" class="btn btn-info">reservasi</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>