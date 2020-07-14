{% extends 'partials/body.twig.php' %}
{% block title %}

{{title}}

{% endblock %}


{% block body %}
<div class="max-width">

    <div class="row">

        <h1>{{title}}</h1>
        <br>
        <h2>{{message}}</h2>
    </div>

</div>
{% endblock %}