<!DOCTYPE html>
<html lang="en" ng-app="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lista de afazeres</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body ng-controller="ListaControlador">
    <div class="flex-center position-ref full-height">
        <div class="content" >
            <h1>
                Lista de Afazeres
                <small> {{ remaining() }} </small>
            </h1>

            <ul>
                <li ng-repeat="fazer in fazeres">
                    <input type="checkbox" ng-model="fazer.Feito">
                    {{ fazer.Atividade }}

                    <form ng-submit="mudarStatus(fazer.id)">
                        <input type="hidden" name="_method" value="put" />
                        <button type="submit"> Mudar </button>
                    </form>
                </li>
            </ul>

            <form ng-submit="addFazer()" >
                <input type="text" placeholder="Inserir atividade" ng-model="novaAtividade">
                <button type="submit"> Adicionar </button>
            </form>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
