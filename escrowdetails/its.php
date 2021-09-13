<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="description" content=" ">
    <meta name="keywords" content=" " />
    <title>ESCROW ADMIN</title>

    <!-- Bootstrap CDN -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Custom CSS file -->

    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin'>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Font+Name">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="./assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/shop.style.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link rel="stylesheet" href="style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/plugins/animate.css">
    <link rel="stylesheet" href="./assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="./assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="./assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="./assets/plugins/revolution-slider/rs-plugin/css/settings.css">
    <script src="index.js"async></script><!-- JS Global Compulsory -->

    <link rel='stylesheet' id='fontawesome-css'  href='wp-content/themes/woof/includes/fonts/fontawesome/fontawesome-all.min7661.css?ver=5.4.2' type='text/css' media='all' />
    <link rel='stylesheet' id='woof-style-css'  href='wp-content/themes/woof/includes/css/style7661.css?ver=5.4.2' type='text/css' media='all' />


    <script src="js/jshoverd.js"></script>
    <link href="css/aalpha.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/topheader.css" type="text/css">
    <link rel="stylesheet" href="css/slider.css" type="text/css">
    <link href="css/style-services.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">

    <script >
        $(document).ready(function() {
            $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });
        });
    </script>
</head>
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0"><i class="fa fa-envelope" aria-hidden="true"></i></p>
        <div class="font-rale font-size-14">
            <a href="./admin.php" class="px-3 border-right border-left text-dark">Admin</a>

        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a style=" background: url(assets/img/logo.png) repeat;    " class="navbar-brand" href="index.php"><h1 style="font-size: 17px; margin-top: -7px" > EXPRESS</h1>  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  "  >
                <li class="nav-item ">
                    <a class="nav-link e" href="./index.php">Home</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="track-status.php">Track Your Shipment</a>
                </li>
             

           
            </ul>



        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<body>

