<html>
    <head>
        <title>4Squad - @yield('title')</title>


        <!-- Bootstrap 3 css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    <body ng-app="4squad">
        <div class="container">
            @yield('content')

        </div>
        <!-- footer -->
        <footer id="footer" class="text-center">
            <div class="row bottom-buttons">
                <div class="col-xs-4">
                    <a href="/events" ><button type="button" class="btn bottom-button large-font btn-secondary"><i class="fa fa-calendar-o fa-2x"></i></button></a>
                </div>
                <div class="col-xs-4">
                    <a href="/chats" ><button type="button" class="btn bottom-button large-font btn-secondary"><i class="fa fa-pie-chart fa-2x"></i></button></a>
                </div>
                <div class="col-xs-4">
                    <a href="/profile" ><button type="button" class="btn bottom-button large-font btn-secondary"><i class="fa fa-user fa-2x"></i></button></a>
                </div>
            </div>
        </footer>
    </body>
</html>