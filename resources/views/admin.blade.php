<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css" />
    <title> {{ env('APP_NAME') }} - ADMIN </title>
</head>

<body>
    <div id="app">
        <admin-page></admin-page>
    </div>
    <!-- <script src="/js/tinymce/tinymce.min.js"></script> -->
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/admin.js"></script>
</body>

</html>