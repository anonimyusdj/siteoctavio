var app = angular.module("octavio", ["ngRoute", "angularSoundManager"]);

///////////////////factory///////////////////////
app.factory("admin", function($http) {
    var service = {};
    var urlBase = "app/server/php/"
    service.getConfig = function() {
        return $http.get(urlBase + "config.php", {
            params: {
                "table": "config",
                "opcion": "config"
            }
        })
    }
    return service;
});
////////////////////////////////////////////////

//////////////////ng-Route/////////////////////
app.config(function($routeProvider) {
    $routeProvider.when("/", {
            templateUrl: "app/public/view/home.html",
            controller: "homeController"
        })
        .when("/music", {
            templateUrl: "app/public/view/musica.html",
            controller: "musica"
        })
        .when("/octavio", {
            templateUrl: "app/public/view/login.html",
            controller: "login"
        })
        //.otherwise({redirectTo: "/" });
});
//////////////////////////////////////////////

///////////////directive/////////////////////
app.directive("menu", function() {
    return {
        restrict: 'E',
        templateUrl: "app/public/view/menu.html"
    }
});

app.directive("pie", function() {
    return {
        restrict: 'E',
        templateUrl: "app/public/view/footer.html"
    }
});

app.directive("cabeza", function() {
    return {
        restrict: 'E',
        templateUrl: 'app/public/view/head.html'
    }
});
////////////////////////////////////////////////

//////////////controller//////////////////////
app.controller("homeController", function($scope, admin, $http) {
    $scope.saludo = "Sitio de Musica de Octavio Vasquez";

    admin.getConfig().then(function(response) {
        //console.log(response.data.resultado[0]);
        $scope.color = response.data.resultado[0];
        // console.log($scope.color.background);
    });
});
app.controller("musica", function($scope, admin) {
    $scope.titulo = "aqui escucharas musica";
});
app.controller("login", function($scope, $http, admin) {

});
app.controller('musicaList', ['$scope', function($scope) {
    $scope.songs = [{
            id: 'one',
            title: 'Rain',
            url: 'http://www.schillmania.com/projects/soundmanager2/demo/_mp3/rain.mp3'
        },
        {
            id: 'two',
            title: 'Walking',
            url: 'http://www.schillmania.com/projects/soundmanager2/demo/_mp3/walking.mp3'
        },
        {
            id: 'three',
            title: 'Barrlping with Carl (featureblend.com)',
            url: 'http://www.freshly-ground.com/misc/music/carl-3-barlp.mp3'
        },
        {
            id: 'four',
            title: 'Angry cow sound?',
            url: 'http://www.freshly-ground.com/data/audio/binaural/Mak.mp3'
        },
        {
            id: 'five',
            title: 'Things that open, close and roll',
            url: 'http://www.freshly-ground.com/data/audio/binaural/Things%20that%20open,%20close%20and%20roll.mp3'
        }
    ];

}]);