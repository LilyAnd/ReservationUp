<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<h1>Reservasi</h1>
<form action="{{ action('CustreservController@postReservasi')}}" method="POST">
	{{csrf_field()}}
	@foreach($merchants as $val)
	Nama Merchant   : 	
	<input type="hidden" name="id_merchant" value="{{ $val->id_merchant }}"> <span>{{$val->merchant_name}}</span><br/>

	ID Reservasi	: <input type="text" name="id_reservation">	<br>

  ID Customer   : <select name="id_customer" class="selected2">
          <option selected="selected" > Please choose one</option>
          @foreach($customers as $val)
          <option value="{{$val->id_customer}}">{{$val->customer_name}}</option>
          @endforeach
          </select>

	<br>Tanggal		: <input type="datetime" name="reservation_date" data-date-format='yyyy-mm-dd'><br>

 <!--  Total harga   : <input type="text" name="total_price"><br>

  Status  : <input type="text" name="reservation_status"> <br> -->

	<br><table id="tabel" class="table table-striped">
		<tr >
			<th>No</th>
			<th>Item</th>
			<th>Quantity</th>
			
		</tr>
		<tr id="clone">
			<td></td>
			<td>
				<select name="id_item[]" class="form-control"><br/>
              	@foreach($items as $value)
              	<option value="{{$value->id_item}}">{{$value->item_name}}</option>
               	@endforeach    
                </select>
			</td>
			<td><input type="text" name="quantity[]" placeholder="Quantity"></td>
		</tr>
		
	</table>
	<button id="addButton" type="button">Add</button>
	<button id="removeButton" type="button">Remove</button><br>
	<br><input type="submit" value="Submit" class="btn btn-info">
	@endforeach
</form>
</body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
  $(document).ready(function()
    {
       $("#addButton").click(function(){
       $("#clone").clone().appendTo("#tabel");
    }); 
      $("#removeButton").click(function()
        {
          if($('#tabel tr').length>2)
          {
              $('#tabel tr:last').remove();
          }
          else
               {
                 alert("You can not remove this row");
               }
        });
  }); 
</script>
</html>