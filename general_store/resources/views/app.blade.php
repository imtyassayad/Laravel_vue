<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Plugins CSS -->
    <link href="/web/css/plugins.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/web/css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/web/images/favicon.ico">
    @routes
    @inertiaHead

</head>

<body>
    @inertia
    @vite([ 'resources/js/app.js',  ])
   <!--jquery js -->
    <script type="" src="{{ asset('web/js/jquery-min.js') }}"></script>
     <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <!--jquery js -->
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <!--jquery js -->
    <script src="{{ asset('web/js/plugins.js') }}"></script>
    <!--mCustomScrollbar js -->
    <script src="{{ asset('web/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!--Fontawesome js -->
    <script src="{{ asset('web/js/fontawesome.js') }}"></script>
    <!--Dcjqaccordion js -->
    <script src="{{ asset('web/js/jquery.dcjqaccordion.js') }}"></script>
    <!--Charts js -->
    <script src="{{ asset('web/js/apexcharts.min.js') }}"></script>
    <!--Custom Dashboard js -->
    <script src="{{ asset('web/js/custom-dashboard.js') }}"></script>
    <!--jquery js -->
    <script src="{{asset('web/js/custom.js')}}"></script>


    <script>
        $(document).ready(function() {

            let body = $('body');
            $('.nav-link').click(function() {
                body.removeClass('mobile_nav')
            })
            $('.footer').click(function() {
                body.removeClass('mobile_nav')
            })

        })

    </script>


</body>

</html>
