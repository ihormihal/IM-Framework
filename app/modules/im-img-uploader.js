/*
 * Angular - Directive "imDatatable"
 * im-datatable - v0.2.6 - 2016-04-26
 * https://github.com/ihormihal/IM-Framework
 * Ihor Mykhalchenko (http://mycode.in.ua/)
 */

angular.module('im-imgUpload', ['ngFileUpload'])

.directive('uploadImages', function() {
	return {
		restrict: 'E',
		scope: {
			name: '@',
			input: '@',
			title: '@',
			multiple: '@',
			locked: '@',
			updated: '=',
			output: '='
		},
		link: function($scope, $element, $attrs){
			$scope.contentUrl = $attrs.template;
			$attrs.$observe("template", function(template) {
				$scope.contentUrl = template;
			});
		},
		template: '<div ng-include="contentUrl"></div>',
		controller: [
			'$scope', '$element', '$attrs', '$parse', '$timeout', '$http', 'Upload',
			function($scope, $element, $attrs, $parse, $timeout, $http, Upload) {
				$scope.files = [];
				$scope.output = [];
				$scope.updated = false;

				var multiple = false;
				if($attrs.multiple == 'true'){
					multiple = true;
					if($scope.input){
						$scope.output = angular.fromJson($scope.input);
						angular.forEach($scope.output, function(src) {
							$scope.output = $scope.input;
							$scope.files.push({src: src, loaded: true, loading: false, error: false, progress: 0});
						});
					}
				}else{
					multiple = false;
					if($scope.input){
						$scope.output[0] = $scope.input;
						$scope.files[0] = {src: $scope.input, loaded: true, loading: false, error: false, progress: 0};
					}
				}


				$scope.uploadFiles = function(files, errFiles) {
					$scope.errFiles = errFiles;

					angular.forEach(files, function(file) {
						if(!file) return false;
						$scope.files.push(file);
						file.upload = Upload.upload({
							url: $attrs.url,
							data: {
								file: file
							}
						});

						file.loading = true;
						file.upload.then(function(response) {
							var res = response.data;
							if(res.status == 'success'){
								file.src = res.data.src;
								file.loaded = true;
							}else{
								file.error = res.data.message;
								file.loading = false;
							}

							$scope.updateValue();


						}, function(response) {
							if (response.status > 0){
								$scope.error = response.status + ': ' + response.message;
							}
							file.loading = false;

						}, function(e) {
							if(e.total > 0){
								file.progress = parseInt(e.loaded*100/e.total);
							}else{
								file.progress = 0;
							}

						});
					});
				};

				$scope.updateValue = function(){

					$scope.output = [];
					angular.forEach($scope.files, function(file) {

						if(file.src){
							$scope.output.push(file.src);
						}
					});
					if(multiple){
						$scope.input = angular.toJson($scope.output);
					}else{
						if($scope.output[0]){
							$scope.input = $scope.output[0];
						}else{
							$scope.input = '';
						}
					}
					$scope.updated = true;

				};

				$scope.deleteImg = function(index) {
					$http({
						url: $attrs.delete,
						method: 'POST',
						data: $scope.files[index].src
					})
					.then(function(response) {
						$scope.data = response.data;
						if(response.data.status == 'success'){
							toastr.success(response.data.message);
							$scope.files.splice(index, 1);
							$scope.updateValue();
						}else if(response.data.status == 'warning'){
							toastr.warning(response.data.message);
						}else if(response.data.status == 'error'){
							toastr.error(response.data.message);
						}
					}, function(error) {
						console.log(error);
					});
					//$scope.updateValue();
				};

			}
		]
	};
});