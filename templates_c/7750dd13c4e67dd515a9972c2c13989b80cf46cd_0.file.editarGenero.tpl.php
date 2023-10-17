<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:16:32
  from 'D:\XAMPP\htdocs\TPE2\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f15d0a3bc84_37900864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7750dd13c4e67dd515a9972c2c13989b80cf46cd' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TPE2\\templates\\editarGenero.tpl',
      1 => 1697584380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f15d0a3bc84_37900864 (Smarty_Internal_Template $_smarty_tpl) {
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
