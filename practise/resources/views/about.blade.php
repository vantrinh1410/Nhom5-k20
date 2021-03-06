@extends('layouts.app')
@section('content')
    <!-- main content start  -->
    <div class="container mt-5">
        <div class="row main-section">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <div class="card rounded-0 shadow-sm" >
                    <div class="card-header">
                        <span>By</span>
                        <span class="text-success"> HPC</span>
                        <span>On</span>
                        <span class="text-success"> 09/02/2021</span>
                    </div>
                    <div class="card-body">
                        <img class="card-img-top" src="image/gioithieu1.jpg" alt="bootstrap simple blog">
                        <hr>
                        <h2 class="card-title">Năm 2021: Chào đón HPC – Cơ sở Thanh Trì.</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dicta nisi ab consequatur fugit obcaecati harum expedita, doloremque dolorem quam aut quas ad amet assumenda. Provident sunt ipsum minima autem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col col-sm-10 col-md-10">
                                <div class="form-group">
                                    <input type="text" name="comment" class="form-control rounded-0" value="Enter comment...">
                                </div>
                            </div>
                            <div class="col col-sm-2 col-md-2">
                                <button class="btn btn-warning rounded-0">Submit</button>
                            </div>
                        </div>
                        <div class="comment-section">
                            <span class="text-success bg-faded">Nice Aritcle...</span>
                            <span class="text-success">Wow...Nice!</span>
                            <span class="text-success">Nice one...Great thanks...</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
                <div class="card rounded-0 shadow-sm">
                    <div class="card-header">
                        Category
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">Social</a></li>
                        <li class="list-group-item"><a href="#">Sports</a></li>
                        <li class="list-group-item"><a href="#">Technology</a></li>
                        <li class="list-group-item"><a href="#">Trend's</a></li>
                        <li class="list-group-item"><a href="#">Samsung</a></li>
                    </ul>
                    <div class="card-footer">
                        <span class="text-info"> Ads will be goes here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content ends -->
@endsection