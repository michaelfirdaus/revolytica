<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marugame Udon &mdash;Revolytica</title>

    
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('css/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    <!-- Custom CSS Control -->
    <link rel="stylesheet" href="{{ asset('css/custom/customindex.css') }}">


</head>
<body>
    <h2 class="header-text">Kuesioner Restoran Marugame Udon</h2>

    <div class="header-logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <br>

    <div class="branch-location">
        <h3>Lokasi</h3>
        <p style="font-size: 20px;">Kuningan City</p>
    </div>
    
    <div class="wrapper-btn-start">
        <a href="/questionnaire"><button type="button" class="btn btn-info">Mulai Survei</button></a>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/tooltip.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>
    
    <!-- JS Libraies -->
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('js/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index.js') }}"></script>
    
    <!-- Template JS File -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="{{ asset('js/custom/customjs.js') }}"></script>
    
</body>

<footer>
    <img src="{{ asset('img/poweredrevolytica.png') }}" class="revolyticalogofooter">
    <h6>Copyright &copy 2020 PT. Revolytica Teknologi Indonesia 
</footer>

</html>