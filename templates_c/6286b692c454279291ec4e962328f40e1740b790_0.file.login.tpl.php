<?php
/* Smarty version 4.2.1, created on 2023-10-18 01:50:21
  from 'D:\XAMPP\htdocs\TPE2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652f1dbdea8521_57153794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6286b692c454279291ec4e962328f40e1740b790' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\TPE2\\templates\\login.tpl',
      1 => 1697585859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_652f1dbdea8521_57153794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">

    <div class="row mt-4">
        <div class="col-md-4">
            <h2>Log In</h2>
            <form class="form-alta" action="log" method="post">
                <div class="formulario"> <input placeholder="email" type="text" name="email" id="email" required></div>
                <div class="formulario"> <input placeholder="contraseña" type="password" name="contraseña" id="contraseña" required></div>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
                    <div class="alert alert-danger mt-3">
                        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                    </div>
                <?php }?>

                <div class="formulario"> <button type="submit" class="btn btn-primary mt-3">Log in</button></div>
            </form>
        </div>
    </div>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
