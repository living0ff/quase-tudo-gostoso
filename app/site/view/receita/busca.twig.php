{% extends 'partials/body.twig.php' %}
{% block title %} - Resultado da Busca {% endblock %}

{% block body %}
<div class="max-width espacamento">
    <h1>Resultado da Busca</h1>

    <hr>

    <p>Exibindo <span class="font-weight-bold">{{totalResultado}}</span> resultado(s).</p>

    {% for receita in receitas %}
    <div class="row">
        {% for item in receita %}
        <div class="col-md-3" style="margin:0;">
            <div class="card border-info mb-3" style="max-width: 20rem;">
                <div class="card-header" style="width:100%;">{{item.titulo}}</div>
                <div class="card-body">
                    <p class="card-text"></p>
                    <a href="{{BASE}}?url=ver&id={{item.id}}" class="btn btn-outline-info w-100">Visualizar</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
    {% endfor %}
</div>

{% endblock %}