<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:44:01
  from 'D:\XAMPP\htdocs\TPE2\templates\insertarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1c41605dc5_17887755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a65925b89c4d0858c5e805f5cab59ca719ba7f1' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TPE2\\templates\\insertarGenero.tpl',
      1 => 1697585858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f1c41605dc5_17887755 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="añadir-generos" method="POST">
        <div class="formulario"><input placeholder="Nombre genero" type="text" name="nombre" id="nombre" required></div>
        <div class="formulario"><input placeholder="Descripcion" type="text" name="descripcion" id="descripcion" required></div>
        <div class="formulario"><button type="submit" class="btn btn-primary"> Agregar </button></div>
    </form>
</div><?php }
}
