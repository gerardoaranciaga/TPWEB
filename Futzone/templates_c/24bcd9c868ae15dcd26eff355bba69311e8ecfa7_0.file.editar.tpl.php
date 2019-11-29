<?php
/* Smarty version 3.1.33, created on 2019-11-01 02:33:00
  from 'C:\xampp\htdocs\Web1\Futzone\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dbb8b4cbf8165_38163040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24bcd9c868ae15dcd26eff355bba69311e8ecfa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\editar.tpl',
      1 => 1572571968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dbb8b4cbf8165_38163040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="text-center">Editar</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha</th>
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
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    <form method="post" action="editarNoticia">
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
        <div class="form-group">
            <label>Id</label>
            <input type="input" class="form-control" name="Id" id="Id" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id_noticia'];?>
">
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
        <button type="submit" class="btn bg-dark btn-dark">Listo</button>
    </form>

    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
