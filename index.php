<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title>InfoHub</title>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script data-require="angular-animate@1.2.11" data-semver="1.2.11" src="https://code.angularjs.org/1.2.11/angular-animate.min.js"></script>
  	<script src="https://angular-ui.github.io/ui-router/release/angular-ui-router.min.js">
	<script src="config/main.module.js"></script>
</head>
<body ng-controller="MainController as main">
	<h1>Main page</h1>
	<ng-view></ng-view>
</body>
</html>