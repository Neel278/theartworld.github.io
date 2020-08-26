<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Font-Awesome -->
    <script
        src="https://kit.fontawesome.com/4d129299c7.js"
        crossorigin="anonymous"
    ></script>
    <!-- Bootstrap CSS -->
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"
    />
    <!-- Swiper JS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css"/>
    <!-- Own Stylesheet -->
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
