<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:42:03
  from 'D:\XAMPP\htdocs\TPE2\templates\insertarDisco.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1bcb265279_01290073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62ee903b7c529421b383cde5c9c6bd9bbbf65d5c' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TPE2\\templates\\insertarDisco.tpl',
      1 => 1697585856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652f1bcb265279_01290073 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="añadir-discos" method="POST">
        <div class="formulario"><input placeholder="Nombre disco" type="text" name="nombre" id="nombre" required></div>
        <div class="formulario"><input placeholder="Artista" type="text" name="artista" id="artista" required></div>
        <div class="formulario"><input placeholder="Sello Discografico" type="text" name="sello" id="sello" required></div>
        <div class="formulario"><input placeholder="Año de Lanzamiento" type="text" name="añoLanzamiento" id="añoLanzamiento" required></div>

        <div class="formulario"><select name="genero" id="genero">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
                <option class="option" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_genero;?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="formulario"><button type="submit" class="btn btn-primary"> Agregar </button></div>
    </form>
</div>
<?php }
}
