@extends('layouts.dash')

@section('content')
<center>

<div class="p-3 mb-2 bg-dark text-white"><h3> <i class="fas fa-user-lock"></i> เพิ่มรายชื่อสมาชิก</h3></div>
</center>
<div class="container-fluid">
<div>
	<form
         action="{{ url('/') }}/member" method="GET">
		<input name="q" placeholder="Search" value="{{ $q }}">
		<button type="submit" class="btn btn-outline-success">
		<i class="fas fa-search" ></i> &nbsp;ค้นหา</button>
	</form>
</div><br>

<div>
<a href="{{ url('/') }}/member/create" class="text-white">
    <button type="button" class="btn btn-success ">
    <i class="fas fa-plus"></i> เพิ่มรายชื่อสมาชิก 
  </button>
</a>
	
</div> <br>

<center>
	<div class="row">
    <div class="col-lg-12">
<table class="table">
<thead>
<tr class="table-primary">
		<th>ลำดับ</th>
        <th>รหัสนักศึกษา</th>
		<th>ชื่อ</th>
		<th>นามสกุล</th>
		<th>action</th>
	</tr>
</thead>
<tbody>
	
	<tr>
	@forelse ($member as $member)
		<td>{{ $member->id }} </td>
		<td>{{ $member->student_id }} </td>
		<td>{{ $member->name }}</td>
		<td>{{ $member->lastname }}</td>
		<td>
		<a href="{{ url('/') }}/member/{{ $member->id }}" class="text-white">
        <button type="submit" class="btn btn-info">
        <i class="far fa-eye"></i>&nbsp; ดู
        </button>
      </a>
			
			<a  href="{{ url('/') }}/member/{{ $member->id }}/edit" class="text-white">
				<button type="submit"class="btn btn-warning">
				<i class="fas fa-pen-alt"></i>&nbsp;แก้ไข
				</button>
			</a>
			
            <form
                    action="{{ url('/') }}/member/{{ $member->id }}"
                    method="POST"
                    onsubmit="validate();"
                    style="display:inline" >

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">
				<i class="far fa-trash-alt"></i>  ลบ</button>
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
</table>
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


