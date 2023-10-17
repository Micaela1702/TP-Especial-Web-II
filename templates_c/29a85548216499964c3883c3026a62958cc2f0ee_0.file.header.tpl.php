<?php
/* Smarty version 4.2.1, created on 2023-10-15 03:25:55
  from 'D:\xampp\htdocs\original\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_652b3fa3529d73_03568922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29a85548216499964c3883c3026a62958cc2f0ee' => 
    array (
      0 => 'D:\\xampp\\htdocs\\original\\templates\\header.tpl',
      1 => 1696968800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652b3fa3529d73_03568922 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <base href =<?php echo BASE_URL;?>
>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="<?php echo BASE_URL;?>
css/styles.css" rel="stylesheet">
        <title>LSV</title>
        
    </head>
            <body>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home">LSV</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active" aria-current="page" href="home">Home</a>
                            <a class="nav-link" href="generos">Generos</a>
                           
                            
                            <?php if (!(isset($_SESSION['USER_ID']))) {?>
                                <a class="nav-link" href="login" >Login</a>
                              <?php } else { ?>
                                <a class="nav-link" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>                 
                              <?php }?>
            
                        </div>
                    </div>
                </div>
            </nav>
            
            <?php }
}
