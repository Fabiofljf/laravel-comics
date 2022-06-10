@extends('layouts.app')

@section('content')
<main id="project_core">
    <section id="jumbotron"></section>
    <!-- /#jumbotron -->

    <section id="central_text" class="Bg_secondary text-light">
        <div class="container">
            <div class="row">
                <div class="col p-4">
                    <h1>Ehy! Mi dispiace la pagina è in manutenzione. Puoi vedere il menu, le cards sia in gurppo che singolarmente!</h1>
                    <h2>Per vedere le cards clicca qui! ->
                        <a class="nav-link" href="{{route('comics')}}">Comics</a>
                        o segui il menu in Comics...
                    </h2>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- /#project_core -->
@endsection