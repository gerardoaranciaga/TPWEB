<?php
/* Smarty version 3.1.33, created on 2019-10-31 18:43:09
  from 'C:\xampp\htdocs\Web1\Futzone\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb1d2de06507_28355224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9d4d8471ee019b0d0d93dbbc768599f2fb9f79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\registrarse.tpl',
      1 => 1572540396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb1d2de06507_28355224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container">
        <h1>Registrarse</h1>
        <form method="post" action="insertarUsuario">
            <div class="form-group">
                <label>Usuario</label>
                <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="emailId" id="emailId" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Listo</button>
        </form>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
