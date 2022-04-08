@extends('layouts.app')
@section('content')
     <!-- main content start  -->
     <div class="container mt-5">
        <div class="row main-section">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card rounded-0 shadow-sm" >
                    <div class="card-header">
                        <span class="text-success"> Đăng ký</span>
                    </div>
                    <div class="card-body">
                        <form action="/" method="POST">
                            <div class="row mb-3">
                                <label for="inputName" class="col-sm-2 col-form-label">Họ và tên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" name="fullname">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputRePassword" class="col-sm-2 col-form-label">Xác nhận mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputRePassword" name="re-password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputAddress" class="col-sm-2 col-form-label">Địa chỉ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputAddress" name="address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhone" class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPhone" name="phone">
                                </div>
                            </div>                    
        
                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content ends -->
@endsection
