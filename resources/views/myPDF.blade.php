<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	<style>
@font-face{
 font-family:  'THSarabunNew';
 font-style: normal;
 font-weight: normal;
 src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: normal;
 font-weight: bold;
 src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: italic;
 font-weight: normal;
 src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
}
@font-face{
 font-family:  'THSarabunNew';
 font-style: italic;
 font-weight: bold;
 src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
}
body{
 font-family: "THSarabunNew";
}
</style>	
</head>
<body>

<div class="container-fluid">
<div class="row" style ="color:white; background:green;"> 
<h1>รายชื่อนักศึกษา</h1>
</div><br>




<center>
	<h1>
	<div class="row">
    <div class="col-lg-10">
<table addstudent=1>
<tr>
		<th>ลำดับ</th>
		<th>รหัสนักศึกษา</th>
		<th>ชื่อ</th>
		<th>นามสกุล</th>
		
	</tr>
	@foreach($addstudent as $addstudent)
	<tr>
		<td>{{ $loop->iteration }} </td>
		<td>{{ $addstudent->number }} </td>
		<td>{{ $addstudent->name }} </td>
		<td>{{ $addstudent->lastname }}</td>
		
		<td>
	
		</td>
	</tr>
	@endforeach
</table>
</div></div>
</h1>
</center>
		
</div>



</body>
</html>