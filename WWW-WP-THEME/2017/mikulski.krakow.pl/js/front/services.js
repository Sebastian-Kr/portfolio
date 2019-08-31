var services = angular.module('servicesApp', ['ngRoute']).config(function ($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');

    $routeProvider
        .when('/', {
            controller: 'SearchController',
            templateUrl: 'engine.html'
        })
        .when('/:categoryID/:serviceSlug', {
            controller: 'SearchController',
            templateUrl: 'engine.html'
        });
});

services.controller('SearchController', function($scope, $http, $routeParams) {

    $scope.selectedTags = [];
    $scope.selectedCategory = null;
    $scope.selectedSubCategory = 3;

    $scope.defaultServicesLimit = 500;
    $scope.servicesLimit = null;

    $scope.subCategories = [
        {
            name: sCat2,
            id: 99,
            order: 2
        },
        {
            name: sCat3,
            id: 0,
            order: 3
        },
        {
            name: sCat4,
            id: 1,
            order: 4
        },
        {
            name: sCat5,
            id: 2,
            order: 5
        },
        {
            name: sCat1,
            id: 3,
            order: 1
        }
    ];

    $scope.goToNews = function (object, url) {
        window.location.href = '/'+url+'/'+object.idcompany;
    };
    
    
    $scope.callPopUpNews = function (id) {
         jQuery('#windowind_' + id).popup('show');
    };

    $scope.selectCategory = function(category) {

        if (category == 'all') {
            $scope.servicesLimit = $scope.defaultServicesLimit;
        }
        
        $scope.selectedCategory = category;
    };

    $scope.selectSubCategory = function(subCategory) {
        $scope.selectedSubCategory = subCategory.id;
        $scope.selectedSubCategoryName = subCategory.name;
    };

    $scope.addTag = function(ev) {
        $el = $(ev.currentTarget);
        tag = $el.data('tag');

        if (-1 !== $scope.selectedTags.indexOf(tag)) {
            return true;
        }

        $scope.selectedTags.push(tag);
    };

    $scope.removeTag = function(tag) {
        var index = $scope.selectedTags.indexOf(tag);
        $scope.selectedTags.splice(index, 1);
    };


    $scope.filterByTags = function(service) {
        if (0 === $scope.selectedTags.length) {
            return true;
        }

        var tagExists = true;
        $.map($scope.selectedTags, function(el) {

            if (-1 === service.tags.indexOf(el)) {
                tagExists = false;
                return false;
            }
        });

        return tagExists;
    };

    $scope.filterByCategory = function(service) {


        if ($scope.selectedCategory == null || $scope.selectedCategory == 'all') {
            return true;
        }

        var categoryExists = false;
        $.map(service.categories, function(el) {
            if (el.idcompany_categories == $scope.selectedCategory.idcompany_categories) {
                categoryExists = true;
                return false;
            }
        });

        return categoryExists;
    };

    $scope.filterBySubCategory = function(service) {
        // && service.category != 3

        if($scope.selectedSubCategory === 99 && service.category == 3) {
            return false;
        }

        if (99 === $scope.selectedSubCategory ) {
            return true;
        }

        if ($scope.selectedSubCategory == service.category) {
            return true;
        }

        return false;
    };

    $scope.findCategoryById = function(categoryId) {
        var category = null;
        $.map($scope.categories, function(el) {
            if (el.idcompany_categories == categoryId) {
                category = el;

                return false;
            }
        });

        return category;
    };

    $scope.loadMore = function () {
        $scope.servicesLimit = $scope.servicesLimit + 2;
    };

    $http.get('/'+sSpecialize1+'/'+sSpecialize2).success(function(data) {

        $scope.services = data;

        if ($routeParams.categoryID != undefined) {
            $scope.selectedCategory = $scope.findCategoryById($routeParams.categoryID);
            return true;
        }

        $scope.selectedCategory = 'all';
        $scope.servicesLimit = $scope.defaultServicesLimit;
    });
});

