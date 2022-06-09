<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        sono in app.php

        <header id="site_header">
            <div class="UpBarr">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="text-uppercase">
                                <li>dc power™visa®</li>
                                <li>additional dc sites <span>&#8964;</span></li>
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
                            logo
                        </div>
                        <div class="col">
                            navbarr
                        </div>
                        <div class="col">
                            serch
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navBarr -->
        </header>
        <!-- /#site_header -->

        <main id="site_main"></main>
        <!-- /#site_main -->

        <footer id="site_footer"></footer>
        <!-- /#site_footer -->

        <!-- script js -->
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
