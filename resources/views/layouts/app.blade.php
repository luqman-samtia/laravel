<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('style.css')}}">


        <!-- Styles -->

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav style="
        margin: 10px;
        text-align: center;
        padding-left: 0px;
        color: red;
    ">
            <a style="padding-right: 10px"  href="{{url('/')}}">Home</a>
            <a style="padding-right: 10px"  href="{{url('/jobs')}}">Jobs</a>
            <a style="padding-right: 10px"  href="{{url('/contact')}}">Contact</a>
        </nav>

    </body>
</html>
