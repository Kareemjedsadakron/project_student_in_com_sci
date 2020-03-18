@extends('layouts.dash')

@section('content')
<div class="container-fluid">
<div class="row" style ="color:white; background:green;"> 
<h1>แก้ไข</h1>
</div>
<br><br><br><br>
<form 
	action="{{ url('/') }}/activities/{{ $activities->id }}" 
	method="POST" >

		{{ csrf_field() }}
		{{ method_field('PUT') }}

		@include("activities/form")
		<center>
		<div>
			<button type="submit"class="btn btn-warning">
			<i class="fas fa-undo-alt"></i>	
			<a href="{{ url('/') }}/activities">กลับ</a>
			</button>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				&nbsp; &nbsp; &nbsp; &nbsp;

			<button type="submit"class="btn btn-dark">
			<i class="far fa-save"></i>	บันทึก</button>
		</div>
		</center>
</form>
</div>
@endsection


