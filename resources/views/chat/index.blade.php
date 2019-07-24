<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <chat-app></chat-app>
    </div>
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../js/app.js"></script>
</body>
<style>
*{
    padding: 0;
    margin: 0;
}</style>
</html>
