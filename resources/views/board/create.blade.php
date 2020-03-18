@extends('layouts.dash')

@section('content')
<center>

<div class="p-3 mb-2 bg-dark text-white"><h3> <i class="fas fa-grin-hearts"></i> เพิ่มกระดานสนทนา</h3></div>
</center>
<div class="container-fluid">
<br><br><br><br>
<form 
	action="{{ url('/') }}/board" 
	method="POST" >

		{{ csrf_field() }}
		{{ method_field('POST') }}

		@include("board/form")
		<center>
		<div>
			
			<a href="{{ url('/') }}/board">
			<button type="button"class="btn btn-warning" class="text-white">
			<i class="fas fa-undo-alt"></i>	กลับ
			</button>
			</a>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp; &nbsp; &nbsp; &nbsp;
			<button type="submit"class="btn btn-dark">
			<i class="far fa-save"></i>	บันทึก</button>
		</div>
		</center>
</form>
</div>
@endsection


