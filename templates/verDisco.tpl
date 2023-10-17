{include file="header.tpl"}

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/vinylimg.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{$disco->nombre}</h5>
    <p class="card-text">{$disco->artista}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{$disco->sello_discografico}</li>
    <li class="list-group-item">{$disco->anio_lanzamiento}</li>
    <li class="list-group-item">{$disco->genero}</li>
  </ul>
  <div class="card-body">
    <a href="home" class="card-link">Home</a>
 
  </div>
</div>

{include file="footer.tpl"}