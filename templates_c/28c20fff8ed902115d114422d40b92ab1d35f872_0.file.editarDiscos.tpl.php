<?php
/* Smarty version 4.2.1, created on 2023-10-17 19:33:28
  from 'D:\xampp\htdocs\TPE2\templates\editarDiscos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652ec568b9cae0_75027819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28c20fff8ed902115d114422d40b92ab1d35f872' => 
    array (
      0 => 'D:\\xampp\\htdocs\\TPE2\\templates\\editarDiscos.tpl',
      1 => 1697564002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652ec568b9cae0_75027819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="col-md-4">
    <h2><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
    <form class ="form-alta" action="editar-discos/<?php echo $_smarty_tpl->tpl_vars['disco']->value->id_disco;?>
" method="POST">
    <a href="home" class="btn btn-primary">Volver al inicio</a> 
        <div class="formulario"><p>Nombre: </p><input value="<?php echo $_smarty_tpl->tpl_vars['disco']->value->nombre;?>
" type="text" name="nombre" id="nombre" required></div>
        <div class="formulario"><p>Artista: </p><input value="<?php echo $_smarty_tpl->tpl_vars['disco']->value->artista;?>
" type="text" name="artista" id="artista" required></div>
        <div class="formulario"><p>Sello discografico: </p><input value="<?php echo $_smarty_tpl->tpl_vars['disco']->value->sello_discografico;?>
" type="text" name="sello" id="sello" required></div>
        <div class="formulario"><p>Año de lanzamiento: </p><input value="<?php echo $_smarty_tpl->tpl_vars['disco']->value->anio_lanzamiento;?>
" type="number" name="añoLanzamiento" id="añoLanzamiento" required></div>
        <div class="formulario"><p>Genero: </p><select name="id_genero" id="id_genero">
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
        <div class="formulario"><button type="submit" class="btn btn-primary"> Editar </button></div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
