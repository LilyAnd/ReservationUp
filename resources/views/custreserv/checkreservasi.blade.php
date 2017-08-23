@extends('layouts.app')

@section('sidemenubar')

<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Dashboard</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="home">Dashboard</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>

                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Reservasi</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="daftar">Pilih Item</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-file">
                            </span>History Reservasi</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-eye-open text-primary"></span><a href="">Lihat History</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <div class="col-sm-3 col-md-9">
            <div class="well">
                
            <h1>Reservasi</h1>
            <hr>
            <h3>Data Merchant</h3>
            <form action="{{ action('CustreservController@postReservasi')}}" method="POST">
              {{csrf_field()}}
              @foreach($admins as $val)
              Nama Merchant : <input type="hidden" name="id_admin" value="{{ $val->id }}"> <span>{{$val->name}}</span><br>
              Nomor Telepon : <input type="hidden" name="phone_number" value="{{ $val->phone_number }}"> <span>{{$val->phone_number}}</span><br>
              Waktu Buka : <input type="hidden" name="start_time" value="{{ $val->start_time }}"> <span>{{$val->start_time}}</span><br>
              Waktu Tutup : <input type="hidden" name="end_time" value="{{ $val->end_time }}"> <span>{{$val->end_time}}</span><br>
              <hr>
              <h3>Lakukan Reservasi</h3>
              <h5>Pilih Tanggal Reservasi <h5>
              <div id="reservation_date" class="input-append date">

               <input type="datetime" name="reservation_date" required="required"></input>

                  <span class="add-on">

                   <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>

                  </span>
              </div>
              <br> 
              <h5> Pilih item yang Anda inginkan</h5>
              <table id="example" class="display table table-striped " width="100%" cellspacing="0">
                <tr>
                  <th></th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Harga</th>
                  
                </tr>
                @foreach($items as $key => $value)
            <tr>

              <td>
                  <input type="checkbox" name="id_item[]" class ='checkbox-item' data-id='#qty{{$key}}' value="{{$value->id_item}}">
              </td>
              <td>
                  {{$value->item_name}}
              </td>
              <td>
                  <input type="number" name="quantity[]" id="qty{{$key}}" placeholder="Quantity" disabled="true" required="">
              </td>
              <td>
                  <input type="hidden" id="element" name="item_price" value="{{$value->item_price}}"> {{$value->item_price}}
              </td>
            </tr>
            @endforeach
            </table>

            <br>
              <input type="submit" value="Submit" id="submit">
            @endforeach
            </form>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
            <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script><script type="text/javascript"
              src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
            </script>
            <script type="text/javascript"
             src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
            </script>
            <script type="text/javascript"
             src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
            </script>
            <script type="text/javascript"
             src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
            </script>
            <script src="./your-project/jquery.priceformat.min.js"></script>
            <script type="text/javascript">

          $('.checkbox-item').change(function() {        
            $('.checkbox-item').each(function (index, element) {
                var target = $(element).data('id'); 

                if ($(element).is(':checked')) {
                    $(target).prop('disabled', false);
                  }else{
                    $(target).prop('disabled', true);
                }        
          });
      });

              $('#submit').click(function(event) 
              {
                var val = [];
                var name = [];
                
                $('.data').each(function(index) 
                {
                  if($(this).children('td').children('input').is(':checked')){
                    val[index] = $(this).children('td').children('input').val();
                    name[index] = $(this).children('td').eq(1).text();
                  }
                });

                $('.test').text(val);
                $('.test2').text(name);
              });

              $("#reservation_date").datetimepicker(
              {
                format: 'yyyy-MM-dd HH:mm:ss',
                language: 'en'
              });
          </script>
            </div>
        </div>
    </div>
</div>

@endsection

