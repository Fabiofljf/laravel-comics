<!-- Estendo il css dentro sass>app.scss -->
@extends('layouts.app')

@section('content')
<main id="project_core">
    <section id="jumbotron"></section>
    <!-- /#jumbotron -->
    <section id="core">
        <div class="container">
            <div class="row">
                @foreach($cards as $card)
                <div class="col-2 p_2">
                    <div class="card">
                        <img src="{{$card['thumb']}}" alt="">
                        <p class="text-light">{{$card['series']}}</p>
                    </div>
                </div>
                @endforeach
                <div class="col-12">
                    <div class="btn text-light">
                        <a href="#">load more</a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /#core -->
    <section id="banner" class="bg-row">
        <div class="row">
            <div class="col">
                <div class="card">
                    <a href="#">
                        <img src="../img/buy-comics-digital-comics.png" alt="digital comics">
                        <h5>digital comics</h5>
                    </a>
                </div>
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="card">
                    <a href="#">
                        <img src="../img/buy-comics-merchandise.png" alt="dc merchandise">
                        <h5>dc merchandise</h5>
                    </a>
                </div>
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="card">
                    <a href="#">
                        <img src="../img/buy-comics-subscriptions.png" alt="subscriptions">
                        <h5>subscriptions</h5>
                    </a>
                </div>
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="card">
                    <a href="#">
                        <img src="../img/buy-comics-shop-locator.png" alt="shop locator">
                        <h5>comics shop locator</h5>
                    </a>
                </div>
            </div>
            <!-- /.col -->
            <div class="col">
                <div class="card">
                    <a href="#">
                        <img src="../img/buy-dc-power-visa.svg" alt="dc power visa">
                        <h5>dc power visa</h5>
                    </a>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /#banner -->
</main>
<!-- /#project_core -->
@endsection