@extends('layouts.dash')

@section('content')
<center>

<div class="p-3 mb-2 bg-dark text-white"><h3> <i class="fas fa-users"></i> รายชื่อนักศึกษา</h3></div>
</center>

<div class="container-fluid">
<div class="row" style ="color:white; background:green;"> 


</div><br>
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">ข้อมูลสมาชิกแต่ละปี </h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    
                  </div>  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> รหัส58
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> รหัส59 
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> รหัส60
                    </span>
                    
                  </div>
                </div>
             <hr>
           
@if( Auth::user()->status == "admin" )
	<div class="col-lg-5">

		
			<a href="{{ url('/') }}/myPDF"class="text-white"><button type="button" class="btn btn-warning ">
      <i class="fas fa-book"></i> รายงาน
      </button>
    </a>
		
	</div><br>

  
  @endif
  <form action="{{ url('/') }}/layouts/list" method="GET">
		<input name="q" placeholder="Search" value="">
		<button type="submit" class="btn btn-outline-success">
		<i class="fas fa-search" ></i>ค้นหา</button>
	</form><br>
<center>
	
<table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">รหัสนักศึกษา</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล </th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @forelse($member as $member)
      <th scope="row">{{ $loop->iteration }}</th>
      <td><a href="{{  url('/member/'.$member->id) }}"><i>{{ $member->student_id }}</i></td>
      <td>{{ $member->name }}</td>
      <td>{{ $member->lastname }}</td>
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

</center>
		
</div>
@endsection