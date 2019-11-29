<?php
/* Smarty version 3.1.33, created on 2019-11-29 15:07:29
  from 'C:\xampp\htdocs\Web1\Futzone\templates\vue\comentariosadmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de126213c6ee7_26707204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bdbac1d848a7cf1bea9b5bee0d42288a57f7c98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\vue\\comentariosadmin.tpl',
      1 => 1575036436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de126213c6ee7_26707204 (Smarty_Internal_Template $_smarty_tpl) {
?>  

<section id="vue-comentarios">
    <h2 class="text-center">Comentarios</h2>
    <p>Promedio de puntajes: {{promedio}}</p>
    <ul class="list-group">
    <li class="list-group-item" v-for="comentario in comentarios">
        <span>{{comentario.comentario}}  |  {{comentario.puntaje}} </span>
        <span><button v-on:click="del(comentario.id_comentario)"  :data-id="comentario.id_comentario" class="btn btn-light">Eliminar</button></span>
    </li>
    </ul>
    <br>
    <h4 class="text-center">Agregar comentario</h4>
    <br>
</section>
<?php }
}
