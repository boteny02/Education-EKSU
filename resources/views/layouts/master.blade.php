 <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Faculty Of Education Library</title>

		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
		<script src="{{ asset('/js/main.js') }}"></script>

    <!-- favicon -->
    <link rel="icon" type="image/jpg" href="assets/img/favicon.jpg" />
    <link href="{{ asset('/css/pack.css') }}" rel="stylesheet" />
</head>
<body>
   
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main-panel">
            @include('layouts.nav')
            <div class="content">
                <div class="container-fluid">                    
                @yield('content')         
                </div>
            </div>
        </div>        
   </div>
<script src="{{ asset('/js/pack.js') }}" type="text/javascript"></script>

</body>
</html>