<!doctype html>
<html lang="en">

<head>


    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Learning HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="{{url('/')}}/assets/images/favicon.png" rel="icon" type="image/png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/night-mode.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/framework.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.css">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/icons.css">




    <!-- Syntax Highlighter -->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/syntax-highlighter/styles/shCoreMidnight.css" media="all">
    <style>
        .gutter,
        .toolbar {
            display: none
        }

        .syntaxhighlighter {
            padding: 15px 20px;
        }

        .syntaxhighlighter {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
            padding: 0 !important;
            padding-top: 18px !important;
        }
    </style>
</head>

<body>

    <div id="wrapper">
       @include("inc.sidebar")
       <div class="page-content">

    @include('inc.header')
    <div class="container">
    @yield('content')
    </div>
    @include("inc.footer")
    <script>
        @yield("script")

         </script>
         <script>
                        $('#modal-center').on('shown.bs.modal', function ()
                                {
                                    $('#word').focus();
                                })
               $("#searchform").submit(function(e)
                {
                    e.preventDefault();
                    var word = $("#word").val();
                    joined = word.replace(' ','+');
                    window.location.href = "/?search_for="+joined;
                });

         </script>
</body>

</html>
