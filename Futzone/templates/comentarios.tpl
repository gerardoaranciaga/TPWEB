{include file="header.tpl"}

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
                <td>{$noticia[0]['titulo']}</td>
                <td>{$noticia[0]['descripcion']}</td>
                <td>{$noticia[0]['fechaCreacion']}</td>
            </tr>
        </tbody>
    </table>
    <div class="container-fluid">
        {if $admin eq true}
            {include file="vue/comentariosadmin.tpl"}
            <form id="comentarios-form" class="form-group text-center" action="insert" method="POST">
                <input type="hidden" name="id_noticia" placeholder="jugador" value="{$noticia[0]['id_noticia']}">
                <input type="hidden" name="id_usuario" placeholder="usuario" value="{$id_usuario}">
                <input type="text" class="form-control col-6" name="comentario" placeholder="Comentario">
                <input type="number" class="form-control col-2" name="puntaje" min="0" max="5">
                <input type="submit" class="btn bg-dark btn-dark" value="Agregar Comentario">
            </form>
        {else}
            {if $login eq true}
                {include file="vue/comentarioslogueado.tpl"}
                <br>
                <h4 class="text-center">Agregar comentario</h4>
                <br>
                <form id="comentarios-form" class="form-group text-center" action="insert" method="POST">
                    <input type="hidden" name="id_noticia" placeholder="jugador" value="{$noticia[0]['id_noticia']}">
                    <input type="hidden" name="id_usuario" placeholder="usuario" value="{$id_usuario}">
                    <input type="text" class="form-control col-6" name="comentario" placeholder="Comentario">
                    <input type="number" class="form-control col-2" name="puntaje" min="0" max="5">
                    <input type="submit" class="btn bg-dark btn-dark" value="Agregar Comentario">
                </form>
            {else}
                {include file="vue/comentarioslogueado.tpl"}
            {/if}
        {/if}
        <script src="js/comentarios.js"></script>
    </div>



{include file="footer.tpl"}