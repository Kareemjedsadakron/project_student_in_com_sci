@extends('layouts.dash')

@section('content')
<center>
<div class="container-fluid">
<div class="row" style ="color:white; background:green;"> 
<h1>กิจกรรม : {{ $activities->id }} </h1>
</div><br><br><br><br>

<h4>
	<div class="row">
	<div class="col-11">

		<div>
			<strong>ผู้โฟส : </strong>
			<span>{{ $activities->student_id }}</span>
			&nbsp; &nbsp; &nbsp;

			<strong>หัวข้อ : </strong>
			<span>{{ $activities->title }} </span>
		</div>
	</div>
	</div><br>

	<div class="row">
	<div class="col-11">
		<div>
			<strong>รายละเอียด : </strong>
			<span>{{ $activities->data }}</span>
			&nbsp; &nbsp; &nbsp;

			<strong>วันที่ : </strong>
			<span>{{ $activities->date }}</span>
		</div>
	</div>
	</div><br>
	<br><br>

<div><br><br><br><br><br><br>


<label for="exampleTextarea">ความคิดเห็น</label>
                    <div id="disqus_thread"></div>
					<script>
						var disqus_config = function () {
						this.page.url = "https://star-seriesth.com/play/awRz0DpHDq/";
						this.page.identifier = "star-seriesth_awRz0DpHDq";
						};
					(function() {
					var d = document, s = d.createElement("script");
					s.src = "https://star-seriesth.disqus.com/embed.js";
					s.setAttribute("data-timestamp", +new Date());
					(d.head || d.body).appendChild(s);
					})();
					</script>
                    <script src='https://star-seriesth.com/base.js?v=awRz0DpHDq'></script>
					<noscript>ต้องเปิด JavaScript เพื่อดู <a href="https://disqus.com/?ref_noscript"> คอมเม้นต์</a></noscript>
					</div>
                </div>
            </div>
        </div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-flag"></i>แจ้งไฟล์เสีย</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div id="fix-respon">
                            <form id="form-fix" class="form-horizontal" action="javascript:void(0);" method="post" accept-charset="utf-8">
                                <div class="form-group">รหัสวิดีโอ:<input type="text" class="form-control" name="video_id" required value="awRz0DpHDq"></div>
                                <div class="form-group">ข้อความฝากถึงผู้ดูแล:<textarea class="form-control" name="video_msg" rows="3"></textarea></div>
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="6LfldlwUAAAAALzqh-n3bjqszcGPnm674dQcdVwW"></div>
                                </div>
                                <div class="form-group"><button type="submit" id="fix-btn" class="btn btn-success">ส่ง</button>
                                    <p class="text-danger" id="fix-msg"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button></div>
        </div>
    </div>
</div>

</div>
</center>
@endsection

