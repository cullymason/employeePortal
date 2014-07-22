<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EmployeePortal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <base href="/" />

    <link rel="stylesheet" href="assets/vendor.css">
    <link rel="stylesheet" href="assets/employee-portal.css">
  </head>
  <body>
    <script>
      window.EmployeePortalENV = {"environment":"development","baseURL":"/","locationType":"auto","EmberENV":{"FEATURES":{}},"APP":{"LOG_RESOLVER":true,"LOG_ACTIVE_GENERATION":true,"LOG_MODULE_RESOLVER":true,"LOG_VIEW_LOOKUPS":true},"LOG_MODULE_RESOLVER":true};
      window.EmberENV = window.EmployeePortalENV.EmberENV;
    </script>
    <script src="assets/vendor.js"></script>
    <script src="assets/employee-portal.js"></script>
    <script>
      window.EmployeePortal = require('employee-portal/app')['default'].create(EmployeePortalENV.APP);
    </script>
  </body>
</html>
