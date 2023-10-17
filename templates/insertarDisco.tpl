<div class="col-md-4">
    <h2>{$titulo}</h2>
    <form class ="form-alta" action="añadir-discos" method="POST">
        <div class="formulario"><input placeholder="Nombre disco" type="text" name="nombre" id="nombre" required></div>
        <div class="formulario"><input placeholder="Artista" type="text" name="artista" id="artista" required></div>
        <div class="formulario"><input placeholder="Sello Discografico" type="text" name="sello" id="sello" required></div>
        <div class="formulario"><input placeholder="Año de Lanzamiento" type="text" name="añoLanzamiento" id="añoLanzamiento" required></div>

        <div class="formulario"><select name="genero" id="genero">
            {foreach from=$generos item=$genero}
                <option class="option" value="{$genero->id_genero}">{$genero->nombre}</option>
            {/foreach}
            </select>
        </div>
        <div class="formulario"><button type="submit" class="btn btn-primary"> Agregar </button></div>
    </form>
</div>
