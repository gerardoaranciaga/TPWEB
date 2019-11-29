  
{literal}
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
{/literal}