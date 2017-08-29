@extends('layouts.app')

@section('sidemenubar')

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
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.dashboard')}}">Dashboard</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                            </span>Item</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ route('item.index') }}">Lihat Item</a>
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
                            </span>Reservation</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="reservmerchant">Lihat Reservasi</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>History Reservation</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="history-reservation">Lihat History</a>
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
                <h1>Daftar Reservasi</h1>
                @foreach($reservation as $value)

                Nama Customer : <input type="hidden" name="name" value="{{ $value->name }}"><span>{{$value->name}}</span><br/>
                No Telepon : <input type="hidden" name="phone_number" value="{{ $value->phone_number }}"><span>{{$value->phone_number}}</span><br/>
                Alamat : <input type="hidden" name="address" value="{{ $value->address }}"><span>{{$value->address}}</span><br/>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">Detail Data</div>

                                <div class="panel-body">
                                    <form class="form-horizontal" role="form">
                                    <input name="_method" type="hidden" value="PATCH">
                                    {{ csrf_field() }}

                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID Reservasi</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Tanggal</th>
                                            <th>Total Harga</th>

                                            <!-- <th>Status</th> -->
                                        </tr>
                                        @foreach($reservations_items as $key => $val)
                                        <tr>
                                            <td>{{$val->id_reservation}}</td>
                                            <td>{{$val->item_name}}</td>
                                            <td>{{$val->quantity}}</td>
                                            <td>{{$val->reservation_date}}</td>
                                            <td>
                                                <input type="hidden" name="total_price" value="{{ $val->quantity*$val->item_price}}" ><span>{{$val->quantity*$val->item_price}}</span>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                @endforeach

                                    Total Bayar : 
                                    <br>

                                <div class="form-group{{ ($errors->has('reservation_status')) ? $errors->first('reservation_status') : '' }}" style="margin-left: 200px; width: 1000px">
                                    <input type="hidden" name="reservation_status" class="col-md-4 control-label"  value="{{$val->reservation_status}}"><span>{{$val->reservation_status}}</span>
                                    {!! $errors->first('reservation_status','<p class="help-block">:message</p>') !!}
                                </div>

                                <label style="margin-left: 200px">Alasan penolakan :</label>
                                <div class="form-group{{ ($errors->has('alasan')) ? $errors->first('status') : '' }}" style="margin-left: 200px; width: 300px;" >
                                    <input type="hidden" name="reservation_status" class="col-md-4 control-label"  value="{{$val->alasan}}"><span>{{$val->alasan}}</span>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
                    </div>
                </div>  
            </div>
        </div>

@endsection