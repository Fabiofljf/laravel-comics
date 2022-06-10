@extends('layouts.app')

@section('content')
<main id="project_core">
    <section id="core" class="comicsBg">
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
</main>
<!-- /#project_core -->
@endsection