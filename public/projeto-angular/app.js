/**
 * Created by Ilson on 03/05/2015.
 */

'use strict'

angular.module('MyApp', ['ngRoute', 'MyApp.controllers'])
    .config(function($routeProvider){
    $routeProvider.when('/categorias', {
        templateUrl: 'projeto-angular/templates/categorias/categorias.html',
        controller: 'CategoriasController'
    });

    $routeProvider.when('/categorias/novo/', {
        templateUrl: 'projeto-angular/templates/categorias/categorias_novo.html',
        controller: 'CategoriasController'
    });

    $routeProvider.when('/categorias/editar/:id', {
        templateUrl: 'projeto-angular/templates/categorias/categorias_editar.html',
        controller: 'CategoriasController'
    });

    $routeProvider.when('/produtos/', {
        templateUrl: 'projeto-angular/templates/produtos/produtos.html',
        controller: 'ProdutosController'
    });

    $routeProvider.when('/produtos/novo/', {
        templateUrl: 'projeto-angular/templates/produtos/produtos_novo.html',
        controller: 'ProdutosController'
    });

    $routeProvider.when('/produtos/editar/:id', {
        templateUrl: 'projeto-angular/templates/produtos/produtos_editar.html',
        controller: 'ProdutosController'
    });
});

