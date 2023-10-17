<?php
/* Smarty version 4.2.1, created on 2023-10-17 19:35:38
  from 'D:\xampp\htdocs\TPE2\templates\insertarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ec5ea987e14_58160928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b986bafb5bcc881c3c4c4e53c15c39f97097be0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE2\\templates\\insertarGenero.tpl',
      1 => 1697564077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652ec5ea987e14_58160928 (Smarty_Internal_Template $_smarty_tpl) {
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
