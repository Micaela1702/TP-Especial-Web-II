<?php
/* Smarty version 4.2.1, created on 2023-10-17 17:53:30
  from 'D:\xampp\htdocs\TPE2\templates\generoList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652eadfacf2489_62660601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2cdbf07611f5cfbd8401a853eb8f1b3649e66e1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE2\\templates\\generoList.tpl',
      1 => 1697557827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:insertarGenero.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652eadfacf2489_62660601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>

<table class="table">
  <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>

        <?php if (!(isset($_SESSION['USER_ID']))) {?>
          <?php } else { ?>
        <th scope="col">Borrar</th>
        <th scope="col">Editar</th>
          <?php }?>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <tr>
        <th scope="row"><a href="discos-estilo/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" class="mylists" ><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</a></th>
        <td><?php echo $_smarty_tpl->tpl_vars['genero']->value->descripcion;?>
</td>
        
    
        <?php if (!(isset($_SESSION['USER_ID']))) {?> 
          <?php } else { ?>
          <td><a class="btn btn-outline-danger" href="eliminar-generos/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
">Borrar</a> </td>
          <td><a class="btn btn-outline-success" href="editar-genero-form/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
">Editar</a></td>
        <?php }?>
        
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

<?php if (!(isset($_SESSION['USER_ID']))) {?>
  <?php } else { ?>
  <?php $_smarty_tpl->_subTemplateRender("file:insertarGenero.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
