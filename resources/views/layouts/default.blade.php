<!DOCTYPE html>
<html>
<head>
    <title>100 films</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="{!! URL::asset('css/styles.css') !!}"  type="text/css">

    <script src="/js/isotope.min.js"></script>
    <script src="/js/js.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            @yield('content')
            </div>
        </div>
    </div>
</body>
</html>