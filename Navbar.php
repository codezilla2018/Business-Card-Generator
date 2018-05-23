<html>

<head>

    <style>

        .navbar /* Design Of The Nav */
        {
            padding-top: 18px;
            padding-bottom: 8px;
            background: #002248;
            margin-bottom: 0;
            margin-left: -10;
            margin-right: -10;
            margin-top: 0;
            border-bottom: 3px solid yellow;
            border-top: 3px solid yellow;
            width: 1359px;
        }

        .nav {
            float: right;
            color: white;
            font-family: Times New Roman;
            font-size: 20px;
        }

        .BorderRight /* For " a " Clases */
        {
            border-right: 1px solid #969696;
        }

        .nav a:hover {
            border-bottom: 5px solid white;
        }

        .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover /* After A Link Click */
        {
            color: white;
        }

        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > li,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus,
        .navbar-default .navbar-nav > li > a,
        .navbar-default .navbar-nav > li > a:hover {
            background: #002248;
            color: white;
        }

        .dropdown-menu,
        .dropdown-menu > li > a {
            background: #8B008B;
            color: white;
        }

        .dropdown-menu > li > a {
            height: 40px;
            padding-top: 8px;
            font-family: Times New Roman;
            font-size: 18px;
        }

        @media (max-width: 767px) {

            .navbar-default .navbar-nav .open .dropdown-menu > li > a,
            .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover {
                color: white;
                background: #8B008B; /* BG For The Hover */
            }

            .navbar {
                width: auto;
            }

            .nav {
                float: left;
                width: 100%;
                height: auto;
            }

            .BorderRight /* For " a " Clases */
            {
                border-right: 1px solid transparent;
            }
        }

    </style>

</head>

<body>

<nav class="navbar navbar-default">

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="index.php">

                <img src='img/BCG.png' height='65' width='250' style='margin-left:40px;margin-top:0px;'>


            </a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

                <li><a href="index.php" class="BorderRight">Home</a></li>

                <li><a href="#" class="BorderRight">About</a></li>

                <li><a href="#" class="BorderRight">Contact Us</a></li>

                <form action="" method="post" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<script>

    //make menus drop automatically
    $('ul.nav li.dropdown').hover(function () {
        $('.dropdown-menu', this).fadeIn();
    }, function () {
        $('.dropdown-menu', this).fadeOut('fast');
    });//hover

</script>

</body>
</html>