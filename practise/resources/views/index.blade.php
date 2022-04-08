@extends('layouts.app')
@section('content')
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
                     <img class="card-img-top" src="{{asset('image/hpc-thanh-tri-2022.png')}}" alt="bootstrap simple blog">
                    <hr>
                    <h2 class="card-title">Năm 2021: Chào đón HPC – Cơ sở Thanh Trì</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dicta nisi ab consequatur fugit obcaecati harum expedita, doloremque dolorem quam aut quas ad amet assumenda. Provident sunt ipsum minima autem.</p>
                    <a href="<?php echo route('read-more')?>" class="btn btn-primary" >Read more</a>
                </div>
            </div>
            <!-- second post  -->
            <div class="card rounded-0 shadow-sm" >
                <div class="card-header">
                    <span>By</span>
                    <span class="text-success"> HPC</span>
                    <span>On</span>
                    <span class="text-success"> 09/02/2021</span>
                </div>
                <div class="card-body">
                    <img class="card-img-top" src="{{asset('image/gioithieu4.jpg')}}" alt="bootstrap simple blog">
                    <hr>
                    <h2 class="card-title">Năm 2021: Chào đón HPC – Cơ sở Thanh Trì</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est consequatur aliquam, non eius aut natus at consequuntur quasi sed corporis possimus adipisci dignissimos atque praesentium sint autem pariatur asperiores laudantium.</p>
                    <a href="<?php echo route('read-more')?>" class="btn btn-primary">Read more</a>
                </div>
            </div>
           <!-- third post  -->
            <div class="card rounded-0 shadow-sm" >
                <div class="card-header">
                    <span>By</span>
                    <span class="text-success"> HPC</span>
                    <span>On</span>
                    <span class="text-success"> 09/02/2021</span>
                </div>
                <div class="card-body">
                    <img class="card-img-top" src="{{asset('image/gioithieu2.jpg')}}" alt="bootstrap simple blog">
                    <hr>
                    <h2 class="card-title">Năm 2021: Chào đón HPC – Cơ sở Thanh Trì</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est consequatur aliquam, non eius aut natus at consequuntur quasi sed corporis possimus adipisci dignissimos atque praesentium sint autem pariatur asperiores laudantium.</p>
                    <a href="<?php echo route('read-more')?>" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <!-- forth post -->
            <div class="card rounded-0 shadow-sm" >
                <div class="card-header">
                    <span>By</span>
                    <span class="text-success"> HPC</span>
                    <span>On</span>
                    <span class="text-success"> 09/02/2021</span>
                </div>
                <div class="card-body">
                    <img class="card-img-top" src="{{asset('image/gioithieu4.jpg')}}" alt="bootstrap simple blog">
                    <hr>
                    <h2 class="card-title">Năm 2021: Chào đón HPC – Cơ sở Thanh Trì</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est consequatur aliquam, non eius aut natus at consequuntur quasi sed corporis possimus adipisci dignissimos atque praesentium sint autem pariatur asperiores laudantium.</p>
                    <a href="<?php echo route('read-more')?>" class="btn btn-primary">Read more</a>
                </div>
            </div>
             <!-- fifth post  -->
            <div class="card rounded-0 shadow-sm" >
                <div class="card-header">
                    <span>By</span>
                    <span class="text-success"> HPC</span>
                    <span>On</span>
                    <span class="text-success"> 09/02/2021</span>
                </div>
                <div class="card-body">
                    <img class="card-img-top" src="{{asset('image/gioithieu4.jpg')}}" alt="bootstrap simple blog">
                    <hr>
                    <h2 class="card-title">Năm 2021: Chào đón HPC – Cơ sở Thanh Trì</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est consequatur aliquam, non eius aut natus at consequuntur quasi sed corporis possimus adipisci dignissimos atque praesentium sint autem pariatur asperiores laudantium.</p>
                    <a href="<?php echo route('read-more')?>" class="btn btn-primary">Read more</a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
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
@endsection



