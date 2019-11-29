{include file="header.tpl"}
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
                {foreach from=$noticias item=noticia}   
                <tr>
                    <td>{$noticia['titulo']}</td>
                    <td>{$noticia['descripcion']}</td>
                    <td>{$noticia['fechaCreacion']}</td>
                </tr>
            {/foreach}
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
            <input type="input" class="form-control" name="Id" id="Id" value="{$noticia['id_noticia']}">
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

    
{include file="footer.tpl"}