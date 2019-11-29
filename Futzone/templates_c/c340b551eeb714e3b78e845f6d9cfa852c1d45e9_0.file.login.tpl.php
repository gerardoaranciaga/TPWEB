<?php
/* Smarty version 3.1.33, created on 2019-11-28 18:04:43
  from 'C:\xampp\htdocs\Web1\Futzone\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddffe2b37d6b2_51115686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c340b551eeb714e3b78e845f6d9cfa852c1d45e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\login.tpl',
      1 => 1574960667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddffe2b37d6b2_51115686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <hr class="margenhr bg-success">
    <h3 class="text-center"><strong>Ingresar</strong></h3>
    <hr class="margenhr bg-success">
    <div class="container">
        <h3 class="text-center text-danger"><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</h3>
        <h1 class="text-center">Ingresar como usuario</h1>
        <form method="post" action="verificarLogin">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <br>
        <h1  class="text-center">Ingresar como administrador</h1>
        <form method="post" action="verificarLoginAdmin">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar como administrador</button>
        </form>
        <br>
        <form  class="text-center" method="post" action="agregarUsuario">
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
