        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <a class="navbar-brand" href="/">
                @if(isset($stt)&&($stt==1))
                <b>{{$title}}</b>
                @else
                @php
                echo "Bài 1";
                @endphp
                @endif
            </b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a  href="/"
                        class=" nav-link">Trang chủ <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  href="/about"
                         class=" nav-link">Giới thiệu về trường học
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Đăng ký</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="search" method="POST">
                    <input class="form-control mr-sm-2 rounded-0" type="search" placeholder="Search" aria-label="Search">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <button class="btn btn-outline-success rounded-0 my-2 my-sm-0" type="submit" >Tìm kiếm</button>
                </form>
            </div>
        </nav>