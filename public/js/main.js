function ListaControlador($scope, $http) {

    // $scope.fazeres = [
    //     { body: 'Jogar bola', completa: true},
    //     { body: 'Jogar basquete', completa: true},
    //     { body: 'Comprar bolo', completa: false}
    // ];

    $http.get('/fazeres').success(function(fazeres){
        $scope.fazeres = fazeres;
    });

    $scope.remaining = function()
    {
        var count = 0;
        angular.forEach($scope.fazeres, function (fazer) {
            count+=fazer.Feito ? 0 : 1;
        } );

        return count;
    }

    $scope.mudarStatus = function($id)
    {
        console.log($id);
        $http.put('/fazeres/' + $id).success(function($id)
        {
            return $id;
        });
    }

    $scope.addFazer = function () {
      var fazer = {
          Atividade: $scope.novaAtividade,
          Feito:false
      };

        $scope.fazeres.push(fazer);
        $http.post('/fazeres', fazer);
    };
}