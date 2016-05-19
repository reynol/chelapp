(function () {
    var app = angular.module('beerBoard', []);

    app.controller('BeerBoardController', function($scope, $http) {
        console.log("hello");
        var data = this;
        data.info=[];
        $http.get("/test/get")
            .then(function(response) {
                data.info = response.data;
                console.log(data.info);

            });

        $scope.Math = window.Math;


        $scope.getMod = function(value, mod) {
            //console.log("mod: "+mod);
            //console.log("value: "+value);
            return value % mod ;
        };



        $scope.add = function(member) {

            console.log(">>>>" + member.id);
            console.log("<<<<" + member.total);

            member.total+=1;
            member.total_flag=(((member.total%100 )%50)%30)%20;

            console.log("RESULT " + member.total);
            console.log("ADO " + member.total_flag);

            $http.get("/test/add/"+member.id+"/"+member.total)
                .then(function(response) {
                    console.log(response.data);

                });
        };


     /*   $scope.add = function(member) {


            console.log("iuju" + member.id);


        };
*/
    });

})();