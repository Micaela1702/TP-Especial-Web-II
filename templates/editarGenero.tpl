{include file="header.tpl"}
<div class="col-md-4">
    <h2>{$titulo}</h2>
    <form class ="form-alta" action="editar-generos/{$genero->id_genero}" method="POST">
    <a href="generos" class="btn btn-primary">Volver a los generos </a> 
        <div class="formulario"><p>Nombre: </p><input value="{$genero->nombre}" type="text" name="nombre" id="nombre" required></div>
        <div class="formulario"><p>Descripcion: </p><input value="{$genero->descripcion}" type="text" name="descripcion" id="descripcion" required></div>
       
       
        <div class="formulario"><button type="submit" class="btn btn-primary"> Editar </button></div>
    </form>
</div>
{include file="footer.tpl"}