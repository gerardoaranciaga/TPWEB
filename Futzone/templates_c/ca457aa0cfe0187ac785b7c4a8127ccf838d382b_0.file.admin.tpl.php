<?php
/* Smarty version 3.1.33, created on 2019-11-29 12:47:02
  from 'C:\xampp\htdocs\Web1\Futzone\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de10536ccd094_58985773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca457aa0cfe0187ac785b7c4a8127ccf838d382b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\admin.tpl',
      1 => 1575027968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de10536ccd094_58985773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <hr class="margenhr bg-success">
    <h1 class="text-center">Administrador</h1>
    <br>
    <h1 class="text-center">Editar Borrar Ligas</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Liga</th>
                <th scope="col">Pais</th>
                <th scope="col">Modificaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ligas']->value, 'liga');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['liga']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['liga']->value['nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['liga']->value['pais'];?>
</td>
                    <td>
                        <a class="btn btn-outline-secondary" href="mostrarEditarLiga/<?php echo $_smarty_tpl->tpl_vars['liga']->value['id_liga'];?>
" role="button">Editar</a>
                        <a class="btn btn-outline-secondary" href="eliminarLiga/<?php echo $_smarty_tpl->tpl_vars['liga']->value['id_liga'];?>
" role="button">Eliminar</a>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <h1 class="text-center">Agregar Liga</h1>
    <form method="post" action="agregarLiga">
        <div class="form-group">
            <label>Nombre</label>
            <input type="input" class="form-control" name="ligaId" id="ligaId" placeholder="Supercopa">
        </div>
        <div class="form-group">
            <label>Pais</label>
            <input type="input" class="form-control" name="paisId" id="paisId" placeholder="Argentina">
        </div>
        <br>
        <button type="submit" class="btn bg-dark btn-dark">Listo</button>
    </form>
    <h1 class="text-center">Modificar Eliminar Usuarios</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">E-mail</th>
                <th scope="col">Admin</th>
                <th scope="col">Modificaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] != NULL) {?>
                            Si
                        <?php } else { ?>
                            No
                        <?php }?>
                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['usuario']->value['admin'] != NULL) {?>
                            <a class="btn btn-outline-secondary" href="sacarAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" role="button">Sacar Admin</a>
                            <a class="btn btn-outline-secondary" href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" role="button">Eliminar Usuario</a>
                        <?php } else { ?>
                            <a class="btn btn-outline-secondary" href="hacerAdmin/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" role="button">Hacer Admin</a>
                            <a class="btn btn-outline-secondary" href="eliminarUsuario/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
" role="button">Eliminar Usuario</a>
                        <?php }?>
                    </td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
