<?php
/* Smarty version 4.2.1, created on 2023-10-15 03:26:20
  from 'D:\xampp\htdocs\original\templates\verDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b3fbca84953_19514776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a83701c8da017ff46b4b5d82a99ca1320b60b80f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\original\\templates\\verDisco.tpl',
      1 => 1697329946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b3fbca84953_19514776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/vinylimg.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['disco']->value->nombre;?>
</h5>
    <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['disco']->value->artista;?>
</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['disco']->value->sello_discografico;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['disco']->value->anio_lanzamiento;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['disco']->value->genero;?>
</li>
  </ul>
  <div class="card-body">
    <a href="home" class="card-link">Home</a>
 
  </div>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
