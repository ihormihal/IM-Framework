/*
 * Angular - Directive "im-datepicker"
 * im-datepicker - v0.0.1 - 2016-10-23
 * https://github.com/ihormihal/IM-Framework
 * datepicker.php
 * Ihor Mykhalchenko (http://mycode.in.ua/)
 */


angular.module('im-datepicker', [])

.directive('imDatepicker', function() {
	return {
		restrict: 'E',
		scope: {
		},
		templateUrl: 'app/modules/templates/datepicker.html',
		controller: [
			'$scope', '$element', '$attrs', '$http',
			function($scope, $element, $attrs, $http) {

				$scope.current = new Date();

				$scope.datepicker = {
					day: 19,
					month: 11,
					year: 2016
				};

				var config = {
					weeks: 6, //visible weeks
					month: [
						31, //January
						28, //February
						31,	//Marth
						30,	//April
						31,	//May
						30, //June
						31, //July
						31, //August
						30, //September
						31, //October
						30, //November
						31  //December
					],
					monthNames: [
						'January',
						'February',
						'Marth',
						'April',
						'May',
						'June',
						'July',
						'August',
						'September',
						'October',
						'November',
						'December'
					]
				};

				$scope.months = config.monthNames;


				function daysInMonth(year, month){
					if(month < 0) month = 11;
					if(month > 11) month = 0;
					if(year%4 == 0 && month == 1){
						return 29;
					}else{
						return config.month[month];
					}
				}

				$scope.pickDate = function(date){
					$scope.datepicker.year = date.year;
					$scope.datepicker.month = date.month;
					$scope.datepicker.day = date.day;
				};
				

				$scope.$watch('datepicker', function(val){

					if(val.month < 0){
						$scope.datepicker.year--;
						$scope.datepicker.month = 11;
					}

					if(val.month > 11){
						$scope.datepicker.year++;
						$scope.datepicker.month = 0;
					}

					if(val.day < 1){
						$scope.datepicker.month--;
						var days = daysInMonth($scope.datepicker.year, $scope.datepicker.month);
						$scope.datepicker.day = days;
					}

					if(val.day > daysInMonth(val.year, val.month)){
						$scope.datepicker.month++;
						$scope.datepicker.day = 1;
					}


					var d = new Date(val.year, val.month, val.day);

					//console.log(val.day);

					
					//calc offset
					var dayIndexOfWeek = d.getDay() == 0 ? 6 : d.getDay() - 1;
					var offset = dayIndexOfWeek + 1 - d.getDate()%7;
					if(offset < 0) offset = 7 + offset;
					if(offset >= 7) offset = 7 - offset;


					$scope.page = [];
					var week = [];
					var daysInCurrent = daysInMonth(d.getFullYear(), d.getMonth());
					var daysInPrev = daysInMonth(d.getFullYear(), d.getMonth() - 1);

					for(var i = 1; i <= config.weeks*7; i++){
						var day = {
							day: i - offset,
							month: d.getMonth(),
							year: d.getFullYear(),
							visible: true
						};

					
						if(day.day > daysInCurrent){
							//fill next month week
							day.visible = false;
							day.day = day.day - daysInCurrent;
							if(day.month == 11){
								day.month = 0;
								day.year++;
							}else{
								day.month++;
							}
						}else if(day.day < 1){
							//fill prev month week
							day.visible = false;
							day.day = daysInPrev + day.day;
							if(day.month == 0){
								day.month = 11;
								day.year--;
							}else{
								day.month--;
							}
						}

						//set selected label
						if(day.day == d.getDate() && day.month == d.getMonth()){
							day.selected = true;
						}

						//set current label
						if(
							day.day == $scope.current.getDate() && 
							d.getMonth() == $scope.current.getMonth() &&
							d.getFullYear() == $scope.current.getFullYear()
						){
							day.current = true;
						}

						week.push(day);
						if(i%7 == 0){
							$scope.page.push(week);
							week = [];
						}
					}


				}, true);


				
			}
		]
	}
});