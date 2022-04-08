@extends('layouts.app')
@section('content')
     <!-- main content start  -->
     <div class="container mt-5">
        <div class="row main-section">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card rounded-0 shadow-sm" >
                    <div class="card-header">
                        <span class="text-success"> Đăng nhập</span>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- main content ends -->
@endsection

