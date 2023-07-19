var app = angular.module("myApp", ["ngRoute", "firebase"]);

app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            templateUrl: "./page/home.html",
            controller: "HomeController",
        })
        .when("/about", {
            templateUrl: "./page/about.html",
            controller: "AboutController",
        })
        .when("/product", {
            templateUrl: "./page/product.html",
            controller: "ProductController",
        })
        .when("/sitemap", {
            templateUrl: "./page/sitemap.html",
            controller: "SitemapController",
        })
        .when("/contact", {
            templateUrl: "./page/contact.html",
            controller: "ContactController",
        })
        .when("/gallery", {
            templateUrl: "./page/gallery.html",
            controller: "GalleryController",
        })
        .when("/login", {
            templateUrl: "./page/login.html",
            controller: "LoginController",
        })
        .when("/register", {
            templateUrl: "./page/register.html",
            controller: "RegisterController",
        })
});

/**
 * RestAPI
 */
app.service("RestApi", function () {
    this.load = function () {
        return firebase.database().ref('cars');
    };
});

/**
 * Controller for Pages
 */
app.controller("HomeController", function ($scope, RestApi) {
    init()
    // getLocation()

    function init() {
        RestApi.load().on("value", (snapshot) => {
            let response = snapshot.val()
            $scope.cars = []
            Object.values(response).forEach(car => {
                $scope.cars.push(car)
            })
            $scope.isLoading = false
            $scope.$apply()
        });
    }

    $scope.brand = ''
    $scope.doFilter = function (brand) {
        $scope.brand = brand
    }
    $scope.isLoading = true;
});
app.controller('CountController', function ($scope) {
    countVisitor()
    $scope.countVisitor = localStorage.visitor
    function countVisitor() {
        if (localStorage.visitor != null) {
            localStorage.visitor = Number(localStorage.visitor) + 1;
            console.log(localStorage.visitor)
        }
        else {
            localStorage.visitor = 1;
        }
    }

})
// ProductController
app.controller("ProductController", function ($scope, RestApi) {
    init()
    function init() {
        RestApi.load().on("value", (snapshot) => {
            let response = snapshot.val()
            $scope.cars = []
            Object.values(response).forEach(car => {
                console.log(car)
                $scope.cars.push(car)
            })
            console.log($scope.cars)
            $scope.$apply()
        });
    }
});

app.controller("GalleryController", function ($scope, RestApi) {
    init()

    function init() {
        RestApi.load().on("value", (snapshot) => {
            let response = snapshot.val()
            $scope.gallery = []
            Object.values(response).forEach(car => {
                Object.values(car.images).forEach(image => {
                    $scope.gallery.push(image)
                })
            })
            console.log($scope.gallery)
            $scope.$apply()
        });
    }

});
function nowDateTime() {
    var nowDate = new Date();
    var day = nowDate.getDate();
    var month = nowDate.getMonth() + 1;
    var year = nowDate.getFullYear();
    var hour = nowDate.getHours();
    var min = nowDate.getMinutes();
    var sec = nowDate.getSeconds();
    var dateTime = " Time: " + hour + ":" + min + ":" + sec + " -- To day is: " + day + " - " + month + " - " + year;
    document.getElementById("hvn").innerHTML = dateTime;
    navigator.geolocation.getCurrentPosition(function (position) {
        var lat = position.coords.latitude;
        var log = position.coords.longitude;

        // hiển thị vị trí
        var location = "     --  Your location: " + "Latitude: " + lat + " Longitude: " + log;
        document.getElementById("gps").innerHTML = location;
    });
}
setInterval(nowDateTime, 1000);

function countVisitors() {
    if (localStorage.getItem("count") !== null) {
        var count = parseInt(localStorage.getItem("count"));
    } else {
        var count = 0;
    }
    count++;
    localStorage.setItem("count", count);
    document.getElementById("count").textContent = count;
}
countVisitors();


