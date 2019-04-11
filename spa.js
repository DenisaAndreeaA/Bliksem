var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider) {
  $routeProvider

  .when('/', {
    templateUrl : 'events.html',
    controller  : 'EventsController'
  })

  .when('/event', {
    templateUrl : 'event.html',
    controller  : 'EventController'
  })

  .when('/nextweek', {
    templateUrl : 'nextweek.html',
    controller  : 'NextWeekController'
  })

  .when('/thisweekend', {
    templateUrl : 'thisweekend.html',
    controller  : 'ThisWeekendController'
  })
  .when('/thismonth', {
    templateUrl : 'thismonth.html',
    controller  : 'ThisMonthController'
  })
  .when('/concertsfestivals', {
    templateUrl : 'concertsfestivals.html',
    controller  : 'FestivalController'
  })

  .otherwise({redirectTo: '/'});
});
