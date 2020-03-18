@extends('layouts.dash')

@section('content')
<div class="container-fluid">
<div class="row" style ="color:white; background:green;"> 
<h1>แก้ไขประวัติส่วนตัว</h1>
</div>
<br><br>

<form 
	action="{{ url('/') }}/member/{{ $member->id }}" 
	method="POST" enctype="multipart/form-data"> <?/* enctype="multipart/form-data คือการเข้ารหัสเดต้า ไม่ต้องแก้อะไร */?>

		{{ csrf_field() }}
		{{ method_field('POST') }}

		@include("member/form")
		<center>
		<div>
		
		

			<button type="submit"class="btn btn-dark">
			<i class="far fa-save"></i>	
			บันทึก</button>
		</div>
		</center>
</form>
</div>
@endsection

