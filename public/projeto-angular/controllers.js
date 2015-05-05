/**
 * Created by Ilson on 03/05/2015.
 */
'use strict'

angular.module('MyApp.controllers', ['ngRoute','MyApp.services'])
    .controller('CategoriasController', ['$scope', 'CategoriasSrv', '$location', '$routeParams', function($scope, CategoriasSrv, $location, $routeParams){
        $scope.nome = "Ilson Nóbrega";
        $scope.load = function () {
            $scope.registros = CategoriasSrv.query();
        },
        $scope.get = function () {
            $scope.item = CategoriasSrv.get({id: $routeParams.id});
            console.log($scope.item);
        },
        $scope.add = function (item) {
            $scope.result = CategoriasSrv.save(
                {},
                item,
                function(data, status, headers, config) {
                    $location.path('/categorias/');
                },
                function(data, status, headers, config) {
                    alert('Erro ao inserir registro: ' + data.messages[0]);
                }
            );
        },
        $scope.editar = function (item) {
            $scope.result = CategoriasSrv.update(
                {id: $routeParams.id},
                item,
                function(data, status, headers, config) {
                    $location.path('/categorias/');
                },
                function(data, status, headers, config) {
                    alert('Erro ao editar registro: ' + data.messages[0]);
                }
            )
        },
        $scope.delete = function (id) {
            if(confirm('Deseja realmente excluir esse registro?')){
                CategoriasSrv.remove({
                    id: id
                },{},
                    function(data, status, headers, config) {
                        $location.path('/categorias/');
                    },
                    function(data, status, headers, config) {
                        alert('Erro ao editar registro: ' + data.messages[0]);
                    }
                )
            }
        }
    }])
    .controller('ProdutosController', ['$scope', 'ProdutosSrv', 'CategoriasSrv', '$location', '$routeParams', function($scope, ProdutosSrv, CategoriasSrv, $location, $routeParams){
        $scope.load = function () {
            $scope.registros = ProdutosSrv.query();
        },
        $scope.getCategorias = function () {
            $scope.categorias = CategoriasSrv.query();
        },
        $scope.getCategorias();
        $scope.get = function () {
            $scope.item = ProdutosSrv.get({id: $routeParams.id});
            console.log($scope.item);
        },
        $scope.add = function (item) {
            $scope.result = ProdutosSrv.save(
                {},
                item,
                function(data, status, headers, config) {
                    $location.path('/produtos/');
                },
                function(data, status, headers, config) {
                    alert('Erro ao inserir registro: ' + data.messages[0]);
                }
            );
        },
        $scope.editar = function (item) {
            $scope.result = ProdutosSrv.update(
                {id: $routeParams.id},
                item,
                function(data, status, headers, config) {
                    $location.path('/produtos/');
                },
                function(data, status, headers, config) {
                    alert('Erro ao editar registro: ' + data.messages[0]);
                }
            )
        },
        $scope.delete = function (id) {
            if(confirm('Deseja realmente excluir esse registro?')){
                ProdutosSrv.remove({
                        id: id
                    },{},
                    function(data, status, headers, config) {
                        $location.path('/produtos/');
                    },
                    function(data, status, headers, config) {
                        alert('Erro ao editar registro: ' + data.messages[0]);
                    }
                )
            }
        }
    }]);
