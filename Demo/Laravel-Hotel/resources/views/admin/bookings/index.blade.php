@extends('app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Manage Bookings</div>

        <div class="panel-body" style="margin:0px;padding:0px;overflow:hidden">

      <iframe src="/booking/index.html#/room_admin" frameborder="0" style="overflow:hidden;height:100%;width:100%;padding:20px;min-height:700px;" height="100%" width="100%"></iframe>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection