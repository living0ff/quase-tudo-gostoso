<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{BASE}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{BASE}}assets/css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    {% include 'partials/header.twig.php' %}

    {% block body %} {% endblock %}

    {% block scripts %} {% endblock %}

  </body>
</html>