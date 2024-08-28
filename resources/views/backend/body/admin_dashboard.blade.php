<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}backend/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('') }}backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('') }}backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('') }}backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}backend/assets/css/style.css" rel="stylesheet">
</head>

<body>
    @include('backend.body.header')

    @include('backend.body.sidebar')

    <main id="main" class="main">

    @yield('admin')

    </main><!-- End #main -->

    @include('backend.body.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('') }}backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}backend/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="{{ asset('') }}backend/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('') }}backend/assets/vendor/quill/quill.js"></script>
    <script src="{{ asset('') }}backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('') }}backend/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('') }}backend/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}backend/assets/js/main.js"></script>

    <script src="{{ asset('') }}backend/assets/js/validate.min.js"></script>
    <script src="{{ asset('') }}backend/assets/js/code.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif

    </script>


</body>

</html>
