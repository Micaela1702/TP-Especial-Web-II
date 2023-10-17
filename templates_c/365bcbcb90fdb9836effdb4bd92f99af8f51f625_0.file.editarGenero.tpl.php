<?php
/* Smarty version 4.2.1, created on 2023-10-17 21:23:34
  from 'D:\xampp\htdocs\TPE2\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652edf36be5768_58733430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '365bcbcb90fdb9836effdb4bd92f99af8f51f625' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE2\\templates\\editarGenero.tpl',
      1 => 1697570590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652edf36be5768_58733430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="editar-generos/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
" method="POST">
    <a href="generos" class="btn btn-primary">Volver a los generos </a> 
        <div class="formulario"><p>Nombre: </p><input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
" type="text" name="nombre" id="nombre" required></div>
        <div class="formulario"><p>Descripcion: </p><input value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->descripcion;?>
" type="text" name="descripcion" id="descripcion" required></div>
       
       
        <div class="formulario"><button type="submit" class="btn btn-primary"> Editar </button></div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
