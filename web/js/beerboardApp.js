(function () {
    var app = angular.module('beerBoard', []);

    app.controller('BeerBoardController', function($scope, $http) {
        var data = this;
        data.info=[];
        $http.get("/test/get")
            .then(function(response) {
                data.info = response.data;
            });

        $scope.Math = window.Math;


        $scope.getMod = function(value, mod) {
            return value % mod ;
        };



        $scope.add = function(member) {

            member.total+=1;
            //Used to put the corresponding number on the images
            //lets say instead of put 100 for the truck it puts a number 1.
            // 100 % 100 =1 % 50 =1 % 30 =1 % 20 = 1 
            member.total_flag=(((member.total%100 )%50)%30)%20;

            $http.get("/test/add/"+member.id+"/"+member.total)
                .then(function(response) {
                    console.log(response.data);

                });
        };

    });

})();