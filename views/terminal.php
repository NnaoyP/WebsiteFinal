<div id="screen" ng-controller="Terminal">

	<h1>SUPER TERMINAL v2.0.12</h1>
	<div id="terminal">
		<span class="terminalLine" ng-repeat="line in terminal track by $index" ng-bind-html="line" ng-init="$last && finished()"></span>
	</div>
	<input type="text" id="cmd" ng-keyup="cmdKeyUP($event)" ng-model="cmd">

</div>