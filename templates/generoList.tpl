{include file="header.tpl"}
<div> {$error}</div>

<table class="table">
  <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>

        {if !isset($smarty.session.USER_ID)}
          {else}
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
          {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$generos item=$genero}
        <tr>
        <th scope="row"><a href="discos-estilo/{$genero->id_genero}" class="mylists" >{$genero->nombre}</a></th>
        <td>{$genero->descripcion}</td>
        
    
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <td><a class="btn btn-outline-danger" href="eliminar-generos/{$genero->id_genero}">Borrar</a> </td>
          <td><a class="btn btn-outline-success" href="editar-genero-form/{$genero->id_genero}">Editar</a></td>
        {/if}
        
        </tr>
    {/foreach}
  </tbody>
</table>

{if !isset ($smarty.session.USER_ID)}
  {else}
  {include file="insertarGenero.tpl"}
{/if}

{include file="footer.tpl"}

