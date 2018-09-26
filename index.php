<!DOCTYPE html>
<html lang="es" ng-app="octavio" ng-controller="homeController">

<head>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{color.name}}</title>
    <script src="./app/server/js/angular.min.js"></script>
    <script src="./config/app.js"></script>
    <script src="./app/server/js/angular-filter.js"></script>
    <script src="./app/server/js/angular-route.min.js"></script>
    <script src="./app/server/js/ng-grid.min.js"></script>
    <script src="./styles/js/angular-animate.min.js"></script>
    <script src="./styles/js/jquery-3.2.1.min.js"></script>
    <script src="./styles/js/materialize.min.js"></script>
    <link rel="stylesheet" href="./styles/css/materialize.min.css">
    <script src="styles/js/css.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./styles/css/personal.css">
    <script src="./styles/js/angular-soundmanager2.min.js"></script>
    <script src="./styles/js/ng-image-input-with-preview.min.js"></script>
</head>

<body>
    <?php
        if($_POST){
            if($_REQUEST['user'])
        }
    ?>
    <ng-include src="'app/public/view/menu.html'"></ng-include>
    <div ng-view></div>
    <pie></pie>
</body>

</html>
