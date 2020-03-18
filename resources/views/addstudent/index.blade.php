@extends('layouts.dash')

@section('content')
<div class="container-fluid">
<div class="row" style ="color:white; background:green;"> 
<h1>เพิ่มนักศึกษา</h1>
</div><br>




<div>
	<form action="{{ url('/') }}/addstudent" method="GET">
		<input name="q" placeholder="Search" value="{{ $q }}">
		<button type="submit" class="btn btn-outline-success">
		<i class="fas fa-search" ></i> &nbsp;ค้นหา</button>
	</form>
</div><br>

<div class="col-lg-3">
	
  <a href="{{ url('/') }}/addstudent/create"><button type="button" class="btn btn-success " class="text-white">
  <i class="fas fa-plus"></i> &nbsp;เพิ่ม 
</button>
</a>

</div><br>

<center>
	<div class="row">
    <div class="col-lg-10">

	
	<table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">รหัสนักศึกษา</th>
      <th scope="col">ชื่อ</th>
	  <th scope="col">นามสกุล</th>
	  <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @forelse($addstudent as $addstudent)
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $addstudent->number }}</td>
      <td>{{ $addstudent->name }}</td>
	  <td>{{ $addstudent->lastname }}</td>
	  
	  <td>
		
      <a href="{{ url('/') }}/addstudent/{{ $addstudent->id }}">
      <button type="submit"class="btn btn-info"class="text-white">
      <i class="far fa-eye"></i> &nbsp;ดู
      </button>
    </a>
		&nbsp; &nbsp; &nbsp; &nbsp; 
		
		
      <a href="{{ url('/') }}/addstudent/{{ $addstudent->id }}/edit">
      <button type="submit"class="btn btn-warning"class="text-white">
			<i class="fas fa-pen-alt"></i> &nbsp;แก้ไข</button></a>
		&nbsp; &nbsp; &nbsp; &nbsp;
			<form
					
                    action="{{ url('/') }}/addstudent/{{ $addstudent->id }}"
                    method="POST"
                    onsubmit="validate();"
                    style="display:inline" >

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit"class="btn btn-danger">
				<i class="far fa-trash-alt"></i>	
				ลบ</button>
            </form>
		</td>
    </tr>
    @empty
		<td colspan="10">
            <center>
                <h4><i class="fas fa-search"></i>&nbsp;&nbsp;ไม่พบข้อมูล</h4>
            </center>
		</td>
		@endforelse
  </tbody>
</table>


</div></div>
</center>
		<script>
            function validate(){
                //SUBMIT
                var wantToDelete= confirm('คุณแน่ใจที่จะลบรายการนี้?');
                if(wantToDelete){
                    this.submit();
                }
            }
        </script>
</div>
@endsection

