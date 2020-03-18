@extends('layouts.dash')

@section('content')

<div class="p-3 mb-2 bg-dark text-white"><h3><i class="fas fa-user-circle"></i>
&nbsp; ประวัติส่วนตัว : {{ Auth::user()-> name }}</h3>
</div>

<div class="container-fluid">

 <img src="{{ url('http://ponkasam.online/storage/app/'.$member->file) }}" class="img-thumbnail" width="200px" ><br><br>


<div class="form-group row">
    <strong class=" col-form-label">&nbsp;รหัสนักศึกษา :</strong>
    <div class="col-md-5">
        <span class="form-control">{{ $member->student_id }} </span>
    </div>
    <strong class=" col-form-label">รหัสประจำตัวประชาชน :</strong>
    <div class="col-md-4">
        <span class="form-control">{{ $member->iden_number }} </span>
    </div>
</div><br>

<div class="form-group row">
    <strong class=" col-form-label">&nbsp;ชื่อ :</strong>
    <div class="col-md-4">
        <span class="form-control">{{ $member->name }} </span>
    </div>
    <strong class=" col-form-label">นามสกุล :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $member->lastname }} </span>
	</div>
	<strong class=" col-form-label">&nbsp;ชื่อเล่น :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $member->nickname }} </span>
    </div>
</div><br>

<div class="form-group row">
    <strong class=" col-form-label">ที่อยู่ :</strong>
    <div class="col-md-11">
        <span class="form-control">{{ $member->address }} </span>
    </div>
</div><br>


<div class="form-group row">
    <strong class=" col-form-label">&nbsp;เบอร์โทรศัพท์ :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $member->phone }} </span>
    </div>
    <strong class=" col-form-label">อีเมลล์ :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $member->email }} </span>
	</div>
	<strong class=" col-form-label">เฟสบุ๊ค :</strong>
    <div class="col-md-3">
        <span class="form-control">{{ $member->facebook }} </span>
    </div>
</div><br>

<div class="form-group row">
    <strong class=" col-form-label">จบมาจากโรงเรียน :</strong>
    <div class="col-md-10">
        <span class="form-control">{{ $member->school }} </span>
    </div>
</div><br>

<div class="p-3 mb-2 bg-warning text-dark"><h4><center>สถานที่ทำงาน</center></h4></div><br>

<div class="form-group row">
    <strong class=" col-form-label">บริษัท :</strong>
    <div class="col-md-11">
        <span class="form-control">{{ $member->company }} </span>
    </div>
</div><br>

<div class="form-group row">
    <strong class=" col-form-label">ที่อยู่บริษัท :</strong>
    <div class="col-md-11">
        <span class="form-control">{{ $member->com_address }} </span>
    </div>
</div><br>
<!--
<div class="form-row">
    <div class="col">
		<div>
			<strong>student_id : </strong>
			<span> </span>
		</div>
	</div>
	<div class="col">
		<div>
			<strong>iden_number : </strong>
			<span>{{ $member->iden_number }}</span>
		</div>
	</div>
	<div class="col">
		<div>
			<strong>name : </strong>
			<span>{{ $member->name }}</span>
		</div>
	</div>
</div><br>
<div class="form-row">
	<div class="col">
		<div>
			<strong>lastname : </strong>
			<span>{{ $member->lastname }}</span>
		</div>
	</div>
	<div class="col">
		<div>
			<strong>nickname : </strong>
			<span>{{ $member->nickname }}</span>
		</div>
	</div>
	<div class="col">
		<div>
			<strong>address : </strong>
			<span>{{ $member->address }} </span>
		</div>
	</div>
</div><br>
<div class="form-row">
	<div class="col">
		<div>
			<strong>school : </strong>
			<span>{{ $member->school }}</span>ขขขขขขข
		</div>
	</div>
	<div class="col">
		<div>
			<strong>phone : </strong>
			<span>{{ $member->phone }}</span>
		</div>
	</div>
	<div class="col">
		<div>
			<strong>email : </strong>
			<span>{{ $member->email }}</span>
		</div>
	</div>
</div><br>
<div class="form-row">
	<div class="col">
		<div>
			<strong>facebook : </strong>
			<span>{{ $member->facebook }}</span>
		</div>
	</div>
	<div class="col">
		<div>
			<strong>company : </strong>
			<span>{{ $member->company }}</span>
		</div>
	</div>
	<div class="col">
		<div>
			<strong>com_address : </strong>
			<span>{{ $member->com_address }}</span>
		</div>
	</div>
</div><br>
-->
<br><br>

<div>

<a href="{{ url('/') }}/member/{{ $member->id }}/edit"><button type="submit"class="btn btn-warning">
			<i class="fas fa-pen-alt"></i> &nbsp;แก้ไขประวัติส่วนตัว
</button>
</a>
</div>
</div>
@endsection


