<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h3>Form Item</h3>
		<hr>

	       {!! Form::open(array('route' => 'item.index')) !!} 

	       {{ Form::label('id_merchant', 'ID Merchant:')}}
           {{ Form::text('id_merchant', null, array('class' => 'form-control', 'required' => ''))}}            

           {{ Form::label('item_name', 'Item Name:')}}
           {{ Form::text('item_name', null, array('class' => 'form-control', 'required' => ''))}}          
          {{ Form::label('item_stock', 'Item Stock:')}}

           {{ Form::text('item_stock', null, array('class' => 'form-control', 'required' => ''))}}           
           {{ Form::label('item_price', 'Item Price:')}}
           {{ Form::text('item_price', null, array('class' => 'form-control', 'required' => ''))}}        


    		{{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'margin-top: 10px;'))}}
		{!! Form::close() !!}
		</div>
	</div>
</body>
</html>