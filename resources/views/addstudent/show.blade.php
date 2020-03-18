@extends('layouts.dash')

@section('content')

<div class="p-3 mb-2 bg-dark text-white"><h3><i class="fas fa-user-circle"></i>
&nbsp; : ชื่อนักศึกษา : {{ $addstudent->name }}&nbsp; &nbsp; {{ $addstudent->lastname }}</h3>
</div>
<div class="container-fluid">
<br><br><br><br>

<div class="form-group row">
    <strong class=" col-form-label">รหัสนักศึกษา :</strong>
    <div class="col-md-11">
        <span class="form-control">{{ $addstudent->number }}</span>
    </div>
</div><br>
<div class="form-group row">
    <strong class=" col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ :</strong>
    <div class="col-md-11">
        <span class="form-control">{{ $addstudent->name }} </span>
    </div>
</div><br>
<div class="form-group row">
    <strong class=" col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นามสกุล :</strong>
    <div class="col-md-11">
        <span class="form-control">{{ $addstudent->lastname }} </span>
    </div>
</div><br>

</div>

@endsection


