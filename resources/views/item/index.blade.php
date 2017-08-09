

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form>
	<h1>Tabel Data Item</h1>

	<div class="container">
		@include('partials._messages')
	</div>
	

	<table class="table table-striped">
	  	<tr>
	  		<th>
	  			No.
	  		</th>
	  		<th>
                ID Merchant
            </th>
	    	
	    	<th>
	    		Item Name
	    	</th>
	    	<th>
	    		Item Stock
	    	</th>
	    	<th>
	    		Item Price
	    	</th>
	    	<th>
	    		Action
	    	</th>
	  	</tr>  	
	
		@foreach($items as $key => $mhs)
	 <form action="{{route('item.destroy',$mhs->id_item)}}" method="POST"  class="form-inline">
		<tr>
			<td>
				{{ $key + 1 }}<br/>
			</td>	
			
			 <td>
                {{$mhs->id_merchant}}<br/>
            </td>

			<td>
				{{$mhs->item_name}}<br/>
			</td>
			<td>
				{{$mhs->item_stock}}<br/>
			</td>

			<td>
				{{$mhs->item_price}}<br/>
			</td> 
			 <td>
             
                <div class="col-sm-2">
                    <a href="{{ route('item.edit', $mhs->id_item) }}"  class="btn btn-warning">Edit</a>
                </div>
                <div class="col-sm-3">
                    {!! Form::open(['route' => ['item.destroy', $mhs->id_item], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{route('item.create')}}" class="btn btn-success"><span class="ti-plus"></span> Add Item</a></th> 
    <div class="pagination-bar text-center">
        {{$items->links()}}
   
    </div>
  
</form>


</body>
</html>
