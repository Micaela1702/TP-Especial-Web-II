{include file="header.tpl"}

<table class="table">
  <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Artista</th>
        <th scope="col">Sello discografico</th>
        <th scope="col">Año de lanzamiento</th>
        <th scope="col">Genero</th>
        {if !isset($smarty.session.USER_ID)}
          {else}
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
          {/if}
    </tr>
  </thead>
  <tbody>
    {foreach from=$discos item=$disco}
        <tr>
        <th scope="row"><a href="ver-disco/{$disco->id_disco}" class="mylists" >{$disco->nombre}</a></th>
        <td>{$disco->artista}</td>
        <td>{$disco->sello_discografico}</td>
        <td>{$disco->anio_lanzamiento}</td>
        <td>{$disco->genero}</td>
        {if !isset($smarty.session.USER_ID)} 
          {else}
          <td><a class="btn btn-outline-danger" href="borrar-disco/{$disco->id_disco}">Borrar</a> </td>
          <td><a class="btn btn-outline-success" href="editar-disco-form/{$disco->id_disco}">Editar</a></td>
        {/if}
        
        </tr>
    {/foreach}
  </tbody>
</table>

{include file="footer.tpl"}

