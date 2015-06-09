<!doctype html>
<html ng-app="scotchApp">
  <head>
    <meta charset="utf-8">
    <title>My HTML File</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-rc.2/angular-route.min.js"></script>
    <script src="js/controller_routing.js"></script>
  </head>
  <body ng-controller="mainController">
    <header>
      <nav>
          <ul>
            <li><a href="#/">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
      </nav>
    </header>
    <div>
        <h1>Routing</h1>
        Seiten werden geladen ohne ein Pagerefresh! Es wurde {{ message }} gelade!
        <hr>
        <div ng-view></div>
        <hr>
        <p>FOOTER</p>
    </div>
  </body>
</html>