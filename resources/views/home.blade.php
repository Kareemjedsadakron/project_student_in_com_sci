@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">หน้าล็อคอิน</div>
                <a href="/laravel_project//resources/views/pro/index.html">เข้าสู่เว็บไซต์หลัก</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    <a href="views/pro/index.html"></a>
                    ยินดีต้อนรับ ! ! 
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
่