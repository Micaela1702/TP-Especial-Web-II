<?php
/* Smarty version 4.2.1, created on 2023-10-15 02:54:51
  from 'D:\XAMPP\htdocs\TPE-WEB2\templates\discoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b385bc1f504_55676012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b76816ac25124c11d6c07acdcda00d3d24f5eec7' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TPE-WEB2\\templates\\discoList.tpl',
      1 => 1697331261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652b385bc1f504_55676012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table class="table">
  <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Artista</th>
        <th scope="col">Sello discografico</th>
        <th scope="col">Año de lanzamiento</th>
        <th scope="col">Genero</th>
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
          <?php } else { ?>
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
          <?php }?>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discos']->value, 'disco');
$_smarty_tpl->tpl_vars['disco']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['disco']->value) {
$_smarty_tpl->tpl_vars['disco']->do_else = false;
?>
        <tr>
        <th scope="row"><a href="info-disco/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id_disco;?>
" class="mylists" ><?php echo $_smarty_tpl->tpl_vars['disco']->value->nombre;?>
</a></th>
        <td><?php echo $_smarty_tpl->tpl_vars['disco']->value->artista;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['disco']->value->sello_discografico;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['disco']->value->anio_lanzamiento;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['disco']->value->genero;?>
</td>
        <?php if (!(isset($_SESSION['USER_ID']))) {?> 
          <?php } else { ?>
          <td><a class="btn btn-outline-danger" href="borrar-disco/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id_disco;?>
">Borrar</a> </td>
          <td><a class="btn btn-outline-success" href="editar-disco-form/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id_disco;?>
">Editar</a></td>
        <?php }?>
        
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
