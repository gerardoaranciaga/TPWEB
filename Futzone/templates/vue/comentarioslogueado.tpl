  
{literal}
<section id="vue-comentarios">
    <h2 class="text-center">Comentarios</h2>
    <p>Promedio de puntajes: {{promedio}}</p>
    <ul class="list-group">
       <li class="list-group-item" v-for="comentario in comentarios">
            <span> {{comentario.comentario}} | {{comentario.puntaje}} </span>
       </li>
    </ul>
</section>
{/literal}