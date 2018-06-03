@extends('layouts.app')

@section('content')
<?php $count=0; ?>
@foreach($carrera as $car)
<a href="/home">
<div class="row" style="height:140px">
  <div class="col-md-12 h-100">
    <div class="row h-100">
      <div class="col-md-12 h-100">
      <div class="card h-100" style="background-color:#FF8116 !important">
      <div class="row">
        <div class="col-md-4">
          <img src="{{$car->img}}"alt="profile photo" class="circle profile-photo" style="height: 100%; max-height: 120px;">
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              {{$car->nombreliga}}
              <div class="row">
                <div class="col-md-4">
                  1
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    66
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</a>
<?php $count++; ?>
@endforeach
@while($count<4)
<div class="row pt-2" style="height:140px" >
  <div class="col-md-12 h-100">
    <div class="row h-100">
      <div class="col-md-12 h-100">
      <div class="card h-100" style="background-color:#FF8116 !important">
        <div class="row">
        <div class="col-md-12">
          Nueva Liga
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<?php $count++; ?>
@endwhile
@endsection
