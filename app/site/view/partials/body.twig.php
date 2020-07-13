<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{BASE}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{BASE}}assets/css/style.css">
    <link rel="icon" href="{{BASE}}assets/img/logo.ico" type="image/x-icon">

    <title>Quase Tudo Gostoso {%block title%}{% endblock %}</title>
  </head>
  <body>
    {% include 'partials/header.twig.php' %}


    {% block body %} {% endblock %}

    {% block scripts %} {% endblock %}

  </body>
</html>