{include file="header.tpl"}
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
                {foreach from=$ligas item=liga}
                    <tr>
                        <td>{$liga['nombre']}</td>
                        <td>{$liga['pais']}</td>
                    </tr>
                {/foreach}
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
                {foreach from=$noticias item=noticia}
                    <tr>
                        <td>{$noticia['titulo']}</td>
                        <td>{$noticia['descripcion']}</td>
                        <td>{$noticia['fechaCreacion']}</td>
                        {if $logueado }
                            <td><a class="btn btn-outline-secondary" href="mostrarEditarNoticia/{$noticia['id_noticia']}" role="button">Editar</a>
                            <a class="btn btn-outline-secondary" href="borrarNoticia/{$noticia['id_noticia']}" role="button">Borrar</a>
                            <a class="btn btn-outline-secondary" href="api/verdetalles/{$noticia['id_noticia']}" role="button">Ver Mas</a></td>
                        {else}
                            <td><a class="btn btn-outline-secondary" href="api/verdetalles/{$noticia['id_noticia']}" role="button">Ver Mas</a></td>
                        {/if}
                    </tr>
                {/foreach}
            </tbody>
        </table>
        {if $logueado }
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
        {/if}
    </div>


{include file="footer.tpl"}