<?php
/* Smarty version 3.1.33, created on 2019-11-29 12:22:43
  from 'C:\xampp\htdocs\Web1\Futzone\templates\vue\comentarioslogueado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de0ff83002c62_74476590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68e852ac9759f413ba491d50b6e442da77f61458' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web1\\Futzone\\templates\\vue\\comentarioslogueado.tpl',
      1 => 1575026554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de0ff83002c62_74476590 (Smarty_Internal_Template $_smarty_tpl) {
?>  

<section id="vue-comentarios">
    <h2 class="text-center">Comentarios</h2>
    <p>Promedio de puntajes: {{promedio}}</p>
    <ul class="list-group">
       <li class="list-group-item" v-for="comentario in comentarios">
            <span> {{comentario.comentario}} | {{comentario.puntaje}} </span>
       </li>
    </ul>
</section>
<?php }
}
