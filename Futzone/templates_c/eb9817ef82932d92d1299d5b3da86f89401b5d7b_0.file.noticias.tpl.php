<?php
/* Smarty version 3.1.33, created on 2019-11-29 14:41:43
  from 'C:\xampp\htdocs\Web1\Futzone\templates\noticias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de12017981881_18560981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb9817ef82932d92d1299d5b3da86f89401b5d7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\noticias.tpl',
      1 => 1575034898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de12017981881_18560981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <hr class="margenhr bg-success">
    <div class="container">
        <h1 class="text-center">Todas las Ligas</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Liga</th>
                    <th scope="col">Pais</th>
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
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <h1 class="text-center">Todas las noticias</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Modificaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['descripcion'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['fechaCreacion'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
                            <td><a class="btn btn-outline-secondary" href="mostrarEditarNoticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" role="button">Editar</a>
                            <a class="btn btn-outline-secondary" href="borrarNoticia/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" role="button">Borrar</a>
                            <a class="btn btn-outline-secondary" href="api/verdetalles/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" role="button">Ver Mas</a></td>
                        <?php } else { ?>
                            <td><a class="btn btn-outline-secondary" href="api/verdetalles/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
" role="button">Ver Mas</a></td>
                        <?php }?>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
            <h1 class="text-center">Agregar noticia</h1>
            <form method="post" action="agregarNoticia">
                <div class="form-group">
                    <label>Titulo</label>
                    <input type="input" class="form-control" name="tituloId" id="tituloId" aria-describedby="usuarioId" placeholder="Titulo">
                </div>
                <div class="form-group">
                    <label>Descripcion</label>
                    <input type="input" class="form-control" name="descripcionId" id="descripcionId" placeholder="Descripcion">
                </div>
                <div class="form-group">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fechaId" id="fechaId" placeholder="Fecha">
                </div>
                <div>
                    <label>Liga</label>
                    <select class="form-control" name="ligaId" id="ligaId">
                        <option value="1">Prim Div Uruguay</option>
                        <option value="2">Serie A</option>
                        <option value="3">Liga BBVA</option>
                        <option value="4">Ligue 1</option>
                        <option value="5">Bundesliga</option>
                        <option value="6">Eredivisie</option>
                        <option value="7">Superliga Argentina</option>
                        <option value="8">Premier League</option>
                        <option value="9">MLS</option>
                        <option value="10">Campeonato Brasileño</option>
                    </select>
                </div>
                <br>
                <button type="button" class="btn bg-dark btn-dark">Listo</button>
            </form>
        <?php }?>
    </div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
