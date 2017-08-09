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
		<h3>Edit Item</h3>
		<hr>
        <form action="{{route('item.update',$item->id_item)}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id_item" value="$item->id_item">
        <input type="hidden" name="_method" value="PUT">
          <div class="row">
          <div class="col-md-5">
                      <label>ID Merchant</label>
                      <input type="text" class="form-control border-input" value="{{$item->id_merchant}}" name="id_merchant">     
              </div>
              </div>
      <div class="row">
          <div class="col-md-5">
                      <label>Item Name</label>
                      <input type="text" class="form-control border-input" value="{{$item->item_name}}" name="item_name">     
              </div>
              </div>
               <div class="row">
          <div class="col-md-5">
                      <label>Item Stock</label>
                      <input type="text" class="form-control border-input" value="{{$item->item_stock}}" name="item_stock">     
              </div>
              </div>
                   <div class="row">
          <div class="col-md-5">
                      <label>Item Price</label>
                      <input type="text" class="form-control border-input" value="{{$item->item_price}}" name="item_price">     
              </div>
              </div>       
 <div class="row">
              <div class="col-md-12">
                <a href="{{ route('item.index') }}" class="btn btn-success">Cancel</a><span class="ti-plus"></span> 

              <input type="submit" value="Save" class="btn btn-success">
              </div>
            </div>
        </form>
</body>
</html>