angular.module('app', ['im-dataTable', 'im-imgUpload', 'im-progress', 'im-autocomplete', 'im-datepicker'])

.config([function () {

}])

.run([function (){

}])

.controller('mainController', ['$scope', function($scope){

	$scope.singleTest = {
		type: 'autocomplete'
	};

}])


;