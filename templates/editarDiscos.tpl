{include file="header.tpl"}
<div class="col-md-4">
    <h2>{$titulo}</h2>
    <form class ="form-alta" action="editar-discos/{$disco->id_disco}" method="POST">
    <a href="home" class="btn btn-primary">Volver al inicio</a> 
        <div class="formulario"><p>Nombre: </p><input value="{$disco->nombre}" type="text" name="nombre" id="nombre" required></div>
        <div class="formulario"><p>Artista: </p><input value="{$disco->artista}" type="text" name="artista" id="artista" required></div>
        <div class="formulario"><p>Sello discografico: </p><input value="{$disco->sello_discografico}" type="text" name="sello" id="sello" required></div>
        <div class="formulario"><p>Año de lanzamiento: </p><input value="{$disco->anio_lanzamiento}" type="number" name="añoLanzamiento" id="añoLanzamiento" required></div>
        <div class="formulario"><p>Genero: </p><select name="id_genero" id="id_genero">
            {foreach from=$generos item=$genero}
                <option class="option" value="{$genero->id_genero}">{$genero->nombre}</option>
            {/foreach}
            </select>
        </div>
        <div class="formulario"><button type="submit" class="btn btn-primary"> Editar </button></div>
    </form>
</div>
{include file="footer.tpl"}