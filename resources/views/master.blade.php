<html>
    <head>
        <title>4Squad - @yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Oxygen" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <!-- Required meta tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    </head>
    <body ng-app="4squad">

    <nav id="navbar" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-xs-4">
                    <button class="btn squad-button large-font"><i class="fa fa-plus fa-2x"></i></button>
                </div>
                <div class="col-xs-4">
                    <img src="img/podup-logo.png" height="50px" class="logo" />
                </div>
                <div class="col-xs-4">
                    <button class="btn squad-button large-font"><i class="fa fa-search fa-2x"></i></button>
                </div>
            </div>
        </div>
    </nav>

        <div class="content">
            @yield('content')

        </div>
        <!-- footer -->
        <footer id="footer" class="text-center">
            <div class="row bottom-buttons">
                <div class="col-xs-4">
                    <a href="/events" ><button type="button" class="btn squad-button large-font btn-secondary"><i id="eventLink" class="fa fa-calendar-o fa-2x"></i></button></a>
                </div>
                <div class="col-xs-4">
                    <a href="/chats" ><button type="button"  class="btn squad-button large-font btn-secondary"><i id="chatsLink" class="fa fa-comments fa-2x"></i></button></a>
                </div>
                <div class="col-xs-4">
                    <a href="/profile" ><button type="button"  class="btn squad-button large-font btn-secondary"><i id="profileLink" class="fa fa-user fa-2x"></i></button></a>
                </div>
            </div>
        </footer>

        <script src="js/jquery-3.1.1.min.js"></script>

        <script>

        var path = location.pathname;
        if (path == '/events'){
            $('#eventLink').addClass('active-tab');
            $('#chatsLink').removeClass('active-tab');
            $('#profileLink').removeClass('active-tab');
            console.log('a');
        } else if (path == '/chats') {
            $('#eventLink').removeClass('active-tab');
            $('#chatsLink').addClass('active-tab');
            $('#profileLink').removeClass('active-tab');
            console.log('b');
        } else if (path == '/profile') {
            $('#eventLink').removeClass('active-tab');
            $('#chatsLink').removeClass('active-tab');
            $('#profileLink').addClass('active-tab')
            console.log('c');
        }
        console.log(path);
        console.log('hi');
        </script>
        
    </body>
</html>