/*
 * Angular - Directive "im-carousel"
 * im-autocomplete - v0.0.1 - 2016-10-17
 * https://github.com/ihormihal/IM-Framework
 * autocomplete.php
 * Ihor Mykhalchenko (http://mycode.in.ua/)
 */

angular.module('im-carousel', [])

.directive('imCarousel', function() {
	return {
		restrict: 'E',
		scope: {
			items: '=',
			action: '&'
		},
		template: '<div class="im-carousel">'+
			'<div class="nav nav-left" ng-class="{\'disabled\': !carousel.allowPrev}" ng-click="carousel.prev();"><i class="fa fa-angle-left"></i></div>'+
			'<div class="carousel-wrapper">'+
				'<div class="carousel-content">'+
					'<div class="item" ng-repeat="item in items" ng-click="select($index)">'+
						'<img ng-src="{{item.image}}" alt="">'+
						'<div class="item-title">{{item.title}}</div>'+
					'</div>'+
				'</div>'+
			'</div>'+
			'<div class="nav nav-right" ng-class="{\'disabled\': !carousel.allowNext}" ng-click="carousel.next();"><i class="fa fa-angle-right"></i></div>'+
		'</div>',
		controller: ['$scope', '$element', '$attrs', function($scope, $element, $attrs) {

			var carouselWrapper = $element[0].querySelector('.carousel-wrapper');
			var carouselContent = $element[0].querySelector('.carousel-content');

			$scope.config = {
				items: 4,
				itemWidth: 200
			};

			$scope.carousel = {
				from: 0,
				left: 0,
				allowPrev: false,
				allowNext: false,
				prev: function(){
					$scope.carousel.from--;
					$scope.carousel.move();
				},
				next: function(){
					$scope.carousel.from++;
					$scope.carousel.move();
				},
				move: function(){
					if($scope.carousel.from < 0){
						$scope.carousel.from = 0;
					}
					if($scope.carousel.from + $scope.config.items > $scope.items.length){
						$scope.carousel.from = $scope.items.length - $scope.config.items;
					}
					$scope.carousel.left = - ($scope.carousel.from * $scope.config.itemWidth);
					carouselContent.style.left = $scope.carousel.left +'px';

					checkNav();
				}
			};

			checkNav();

			function checkNav(){
				if($scope.carousel.from <= 0){
					$scope.carousel.allowPrev = false;
				}else{
					$scope.carousel.allowPrev = true;
				}
				if($scope.carousel.from + $scope.config.items >= $scope.items.length){
					$scope.carousel.allowNext = false;
				}else{
					$scope.carousel.allowNext = true;
				}
			};

			carouselWrapper.style.width = $scope.config.itemWidth * $scope.config.items +'px';
			carouselContent.style.width = $scope.config.itemWidth * $scope.items.length +'px';

			$scope.select = function(index){
				$scope.action({index:index});
			};

			//swipe
			var swipe = {
				moving: false,
				startClick: 0,
				startPosition: $scope.carousel.left
			};
			carouselContent.addEventListener('mousedown', function(event){
				swipe.moving = true;
				swipe.startClick = event.screenX;
				swipe.startPosition = $scope.carousel.left;
				carouselContent.classList.remove('static');
			});
			document.addEventListener('mouseup', function(event){
				swipe.moving = false;
				carouselContent.classList.add('static');
				//rounded position
				var offset = Math.round($scope.carousel.left/$scope.config.itemWidth);
				if(offset > 0){
					$scope.carousel.from = 0;
				}else{
					$scope.carousel.from = Math.abs(offset);
				}
				$scope.carousel.move();
			});
			document.addEventListener('mousemove', function(event){
				if(swipe.moving){
					$scope.carousel.left = swipe.startPosition + event.screenX - swipe.startClick;
					carouselContent.style.left = $scope.carousel.left +'px';
				}

			});

		}]
	}
});