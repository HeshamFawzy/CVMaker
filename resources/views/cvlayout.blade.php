<!DOCTYPE html>
<html>

<head>
    <title>CVMaker</title>

    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="The Curriculum Vitae of Joe Bloggs." />
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="{{ asset('./css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="top">
    @yield('content')
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        var pageTracker = _gat._getTracker("UA-3753241-1");
        pageTracker._initData();
        pageTracker._trackPageview();
    </script>
</body>

</html>