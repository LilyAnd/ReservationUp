<!DOCTYPE html>
<html>
<head>
	
</head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style src="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">    
      table{
          counter-reset: rowNumber;
      }    
      table tr:not(:first-child){
        counter-increment: rowNumber;
       }    
      table tr td:first-child::before {
        content: counter(rowNumber);
        min-width: 1em;
        margin-right: 0.5em;
    }

</style> 
<body>
<h1>Tabel Merchant</h1>

	@foreach($merchants as $val)

	ID Merchant  : {{$val->id_merchant}}<br>
	Nama merchant: {{$val->merchant_name}}<br>
	Buka		 : {{$val->start_time}}<br>
	Tutup		 : {{$val->end_time}}<br>

	<br><table class="table table-striped">
		<tr>
			<th>No</th>
			<th>Nama Item</th>
			<th>Harga</th>
			<th>Stok</th>
		</tr>
		@foreach($items as $value)
		
		<tr>
			<td></td>
			<td>{{$value->item_name}}</td>
			<td>{{$value->item_price}}</td>
			<td>{{$value->item_stock}}</td>
		</tr>
		
		@endforeach
	</table>
	<br>
	@endforeach

	<a href="" class="btn btn-info"><i class="ti-pencil-alt"></i>Choose Items</a>
<form>
	
</form>
</body>
</html>