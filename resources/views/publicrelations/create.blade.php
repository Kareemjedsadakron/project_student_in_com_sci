@extends('layouts.dash')

@section('content')
<center>

<div class="p-3 mb-2 bg-dark text-white"><h3> <i class="far fa-file"></i> เพิ่มประชาสัมพันธ์</h3></div>
</center>
<div class="container-fluid">


<br><br>


<form 
	action="{{ url('/') }}/publicrelations" 
	method="POST" >

		{{ csrf_field() }}
		{{ method_field('POST') }}

		@include("publicrelations/form")
		<center>
	
		<div>

			
			<a href="{{ url('/') }}/publicrelations"><button type="button"class="btn btn-warning"class="text-white">
			<i class="fas fa-undo-alt"></i>	กลับ
			</button>
		</a>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp; &nbsp; &nbsp; &nbsp;

			<button type="submit"class="btn btn-dark">
			<i class="far fa-save"></i>	
			บันทึก</button>
		</div>
		</center>
</form>
</div>
@endsection

