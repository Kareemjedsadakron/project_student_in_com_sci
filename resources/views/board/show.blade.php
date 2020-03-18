@extends('layouts.dash')

@section('content')
<center>

<div class="p-3 mb-2 bg-dark text-white"><h3><i class="fas fa-grin-hearts"></i>&nbsp; : {{ $board->title }}</h3></div>
</center>
<div class="container-fluid">
<br><br><br><br>


<div class="form-group row">
    <strong class=" col-form-label">&nbsp;รหัสผู้โฟส :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $board->number }} </span>
    </div>
    <strong class=" col-form-label">ชื่อผู้โฟส :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $board->personnel }} </span>
	</div>
	<strong class=" col-form-label">&nbsp;วันที่ :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $board->date }} </span>
    </div>
</div><br>

<div class="form-group row">
    <strong class=" col-form-label">รายละเอียด :</strong>
    <div class="col-md-11">
        <span class="form-control">{{ $board->data }} </span>
    </div>
</div><br>



<!-- คอมเม้น -->
<div class="table-primary">
<hr>
<div class="row">
  	<div class="col-sm-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  	<div class="fb-share-button" data-href="{{ url('http://ponkasam.online/public/board/'.$board->id) }}" 
			data-layout="button_count">
		</div>
	</div>
  	<div class="col-sm-10">
		<div class="fb-comments" data-href="{{ url('http://ponkasam.online/public/board/'.$board->id) }}" 
			data-width="1000" data-numposts="5">
		</div>
	</div>
</div>
<hr>
</div>

<!-- จบคอมเม่น -->






<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=241110544128";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v5.0&appId=2547428158827089&autoLogAppEvents=1"></script>


@endsection



