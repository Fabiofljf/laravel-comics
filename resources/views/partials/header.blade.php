<div class="UpBarr">
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <ul class="text-uppercase d-flex mb-0 p-3 text-light">
                    <li>dc power™visa®</li>
                    <li class="ms-3">additional dc sites <span>&#8964;</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /.UpBarr -->

<div class="DownBarr">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="../img/dc-logo.png" alt="logo comics">
            </div>
            <!-- /.col logo -->
            <div class="col">
                <ul class="d-flex">
                    @foreach ($navbarr as $nav)
                        <li>
                            <a href="#">{{$nav['title']}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- /.col navBar -->
            <div class="col">
                serch
            </div>
            <!-- /.col search -->
        </div>
    </div>
</div>
<!-- /.navBarr -->