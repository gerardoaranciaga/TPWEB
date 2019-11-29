<?php
/* Smarty version 3.1.33, created on 2019-10-16 16:00:01
  from 'C:\xampp\htdocs\Web1\Futzone\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da722614c5bb1_40499789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '421953ef6de008fc370435705bf1f918f8df46ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\contacto.tpl',
      1 => 1571234391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da722614c5bb1_40499789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <h3  class="d-xl-none text-center"><strong>Registrate para novedades</strong></h3>
                <hr class="margenhr bg-success">
                <h4 class="text-center"><b>¿Querés saber todo sobre tu equipo?</b></h4>
                <p class="text-center">Suscribite y enterate al instante.</p>
                <hr class="margenhr bg-success">
                <section class="container-fluid">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="inputnombre">Nombre</label>
                                <input type="text" class="form-control" id="inputnombre" placeholder="Juan">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputApellido">Apellido</label>
                                <input type="text" class="form-control" id="inputApellido" placeholder="Perez">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="ejemplo@gmail.com">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputCiudad">Ciudad</label>
                                <input type="text" class="form-control" id="inputCiudad" placeholder="Tandil">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="inputEdad">Edad</label>
                                <input type="number" class="form-control" id="inputEdad" placeholder="18">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputEquipo">Equipo</label>
                                <select id="inputEquipo" class="form-control">
                                    <option selected>River</option>
                                    <option>Boca</option>
                                    <option>Arsenal</option>
                                    <option>Colon</option>
                                    <option>Independiente</option>
                                    <option>Racing</option>
                                    <option>Aldosivi</option>
                                    <option>Quilmes</option>
                                    <option>Gimnasia</option>
                                    <option>Temperley</option>
                                    <option>Defensa y Justicia</option>
                                    <option>Newells</option>
                                    <option>Velez</option>
                                    <option>San Lorenzo</option>
                                    <option>Argentinos Jrs</option>
                                    <option>Belgrano</option>
                                    <option>Talleres</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="inputGenerar">Captcha</label>
                                <button type="button" class="bordesbotones" id="generarcaptcha">Generar</button>
                                <p id="textocaptcha"></p>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputCaptcha">Captcha</label>
                                <input type="text" class="form-control" id="captchaIng" placeholder="J7GTH567">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button id="formulario" type="submit">Enviar</button>
                        </div>
                    </form>
                </section>
            </div>
            <div class="col-xl-2">
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/futzone.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
