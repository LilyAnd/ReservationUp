<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<h1>Daftar Reservasi</h1>
<table class="table table-striped">
	<tr>
		<th>ID Reservasi</th>
		<th>Item</th>
		<th>Quantity</th>
		<th>Tanggal</th>
		<th>Status</th>
		<th>Alasan</th>
	</tr>
	@foreach($reservations_items as $val)
	<tr>
		<td>{{$val->id_reservation}}</td>
		<td>{{$val->id_item}}</td>
		<td>{{$val->quantity}}</td>
		<td>{{$val->reservation_date}}</td>
		<td>{{$val->reservation_status}}</td>
		<td>{{$val->alasan}}</td>
	</tr>
	@endforeach
</table>
{{$reservations_items->links()}}
</body>
</html>