<?php
/* Smarty version 3.1.33, created on 2019-11-29 15:27:23
  from 'C:\xampp\htdocs\Web1\Futzone\templates\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de12acbc05f32_77405414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56572ccd5edfcaefc69b4899e8461c9797735243' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\comentarios.tpl',
      1 => 1575037496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/comentariosadmin.tpl' => 1,
    'file:vue/comentarioslogueado.tpl' => 2,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de12acbc05f32_77405414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1 class="text-center">Noticia</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['titulo'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['descripcion'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['fechaCreacion'];?>
</td>
            </tr>
        </tbody>
    </table>
    <div class="container-fluid">
        <?php if ($_smarty_tpl->tpl_vars['admin']->value == true) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:vue/comentariosadmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <form id="comentarios-form" class="form-group text-center" action="insert" method="POST">
                <input type="hidden" name="id_noticia" placeholder="jugador" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['id_noticia'];?>
">
                <input type="hidden" name="id_usuario" placeholder="usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
                <input type="text" class="form-control col-6" name="comentario" placeholder="Comentario">
                <input type="number" class="form-control col-2" name="puntaje" min="0" max="5">
                <input type="submit" class="btn bg-dark btn-dark" value="Agregar Comentario">
            </form>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['login']->value == true) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:vue/comentarioslogueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <br>
                <h4 class="text-center">Agregar comentario</h4>
                <br>
                <form id="comentarios-form" class="form-group text-center" action="insert" method="POST">
                    <input type="hidden" name="id_noticia" placeholder="jugador" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value[0]['id_noticia'];?>
">
                    <input type="hidden" name="id_usuario" placeholder="usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
                    <input type="text" class="form-control col-6" name="comentario" placeholder="Comentario">
                    <input type="number" class="form-control col-2" name="puntaje" min="0" max="5">
                    <input type="submit" class="btn bg-dark btn-dark" value="Agregar Comentario">
                </form>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:vue/comentarioslogueado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php }?>
        <?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>
    </div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
