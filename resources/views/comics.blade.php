@extends('layouts.app')

@section('content')
<main id="project_core">
    <section id="core" class="comicsBg">
        <div class="container">
            <div class="row flex-column">
                @foreach($cards as $type => $data)
                <div class="col p_2 d-flex">
                    <a href="{{route('comics.show', 'index')}}">
                        <div class="card d-flex flex-row">
                            <div class="col">
                                <img src="{{$data['thumb']}}" alt="">
                                <p class="text-light">{{$data['series']}}</p>
                            </div>
                            <div class="col-8 d-flex flex-column">
                                <p class="text-light">{{$data['description']}}</p>
                                <br>
                                <small>Price:{{$data['price']}}</small>
                                <small>Sale date:{{$data['sale_date']}}</small>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /#core -->
</main>
<!-- /#project_core -->
@endsection