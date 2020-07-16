{% extends 'partials/body.twig.php' %}


{% block title %} - Editar Receita {% endblock %}

{% block body %}
<div class="max-width espacamento">
    <h1 style="color: black;">Editar Receita</h1>
    <hr>
    <form action="{{BASE}}?url=update&id={{receita.id}}" method="post" id="frmNovaReceita">
        <div class="row">
            <div class="col-md-12">
                <label for="txtTitulo">Título</label>
                <input type="hidden" id="txtId" name="txtId" value="{{receita.id}}">
                <input type="text" class="form-control" id="txtTitulo" name="txtTitulo" value="{{receita.titulo}}">
            </div>
            <div class="col-md-6">
                <label for="txtThumb">Thumb</label>
                <input type="file" class="form-control-file" id="txtThumb" name="arquivo" accept="image/*">
            </div>
            <div class="col-md-6">
                <label for="txtConteudo">Tags</label>
                <input type="text" class="form-control" id="txtTags" name="txtTags" value="{{receita.tags}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="txtConteudo">Conteúdo</label>
                <textarea class="form-control" id="txtConteudo" name="txtConteudo">{{receita.conteudo}}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="divalert">
                    <div class="alert alert-secondary">Preencha corretamente todas as informações!</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-right">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
        </div>

    </form>
    {% endblock %}

    {% block scripts %}
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#txtConteudo'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    {% endblock %}