@extends('layouts.dash')

@section('content')
<div class="container-fluid">
<div class="row" style ="color:white; background:green;"> 
<h1>แก้ไขประวัติส่วนตัว</h1>
</div>
<br><br><br><br>
<form 
	action="{{ url('/') }}/addstudent/{{ $addstudent->id }}" 
	method="POST" >

		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		@include("addstudent/form")
		
		<center>
	
				
				<a href="{{ url('/') }}/addstudent"><button type="button"class="btn btn-warning">
				<i class="fas fa-undo-alt"></i>	กลับ
				</button> 
			</a>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp; &nbsp; &nbsp; &nbsp;
		
			
				
				<button type="submit"class="btn btn-dark">
				<i class="far fa-save"></i>	
				บันทึก</button>
			

			</center>
</form>
</div>
@endsection

