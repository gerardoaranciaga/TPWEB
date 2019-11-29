<?php
/* Smarty version 3.1.33, created on 2019-10-16 16:00:00
  from 'C:\xampp\htdocs\Web1\Futzone\templates\juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da72260701a31_13148611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b99b7acfd0ceaf79c3926241feeb249b10eeb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\juego.tpl',
      1 => 1571234379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da72260701a31_13148611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3 class="d-xl-none text-center"><strong>Jugar</strong></h3>
                <hr class="margenhr bg-success">
                <article>
                    <h4 class="text-center"><b>¿Quiénes serán los 3 punteros al final del campeonato?</b></h4>
                    <h4 class="text-center"><b>¿Y sus goleadores?</b></h4>
                    <p class="text-center">Participá y ganate la camiseta de tu equipo favorito.</p>
                    <hr class="margenhr bg-success">
                    <div class="container-fluid">
                    <table class="table table-hover text-warning table-dark table-sm order-table" id="tablabuscar">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Equipo</th>
                                <th scope="col">Goleador</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="mostrado">
                        </tbody>
                    </table>
                    <div class="form-row">
                        <div class="col-12">
                            <input class="form-control" type="text" id="inputbuscar" placeholder="Buscar equipo..">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3">
                            <label>Equipo</label>
                            <input type="text" class="form-control" id="equipo" placeholder="River">
                        </div>
                        <div class="col-3">
                            <label>Goleador</label>
                            <input type="text" class="form-control" id="goleador" placeholder="Scocco">
                        </div>
                        <div class="col-3">
                            <label>Fila</label>
                        </div>
                        <div class="col-3">
                            <button class="form-control" id="js-agregarazar">3 AL AZAR</button>
                            <button class="form-control" id="js-cargar">CARGAR</button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3">
                            <input type="text" class="form-control" id="nuevoequipo" placeholder="Nuevo equipo">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control" id="nuevogoleador" placeholder="Nuevo equipo">
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="numfila" placeholder="Numero fila">
                        </div>
                        <div class="col-3">
                            <button class="form-control" id="js-editar">EDITAR</button>
                        </div>
                    </div>
                    <br>
                    <div class="text-center resultado"></div>
                    <br>
                    <div class="text-center">
                        <button id="js-enviarjuego">Enviar</button>
                    </div>
                    <input type="text" id="borrar" placeholder="ID">
                    <button id="js-borrar">Borrar</button>
                </article>
            </div>
            <div class="col-xl-2">
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/juego.js"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
