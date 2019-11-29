{include file="header.tpl"}
    <hr class="margenhr bg-success">
    <h1 class="text-center">Administrador</h1>
    <br>
    <h1 class="text-center">Editar Borrar Ligas</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Liga</th>
                <th scope="col">Pais</th>
                <th scope="col">Modificaciones</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$ligas item=liga}
                <tr>
                    <td>{$liga['nombre']}</td>
                    <td>{$liga['pais']}</td>
                    <td>
                        <a class="btn btn-outline-secondary" href="mostrarEditarLiga/{$liga['id_liga']}" role="button">Editar</a>
                        <a class="btn btn-outline-secondary" href="eliminarLiga/{$liga['id_liga']}" role="button">Eliminar</a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
    <h1 class="text-center">Agregar Liga</h1>
    <form method="post" action="agregarLiga">
        <div class="form-group">
            <label>Nombre</label>
            <input type="input" class="form-control" name="ligaId" id="ligaId" placeholder="Supercopa">
        </div>
        <div class="form-group">
            <label>Pais</label>
            <input type="input" class="form-control" name="paisId" id="paisId" placeholder="Argentina">
        </div>
        <br>
        <button type="submit" class="btn bg-dark btn-dark">Listo</button>
    </form>
    <h1 class="text-center">Modificar Eliminar Usuarios</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">E-mail</th>
                <th scope="col">Admin</th>
                <th scope="col">Modificaciones</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$usuarios item=usuario}
                <tr>
                    <td>{$usuario['nombre']}</td>
                    <td>{$usuario['email']}</td>
                    <td>{if $usuario['admin'] != NULL}
                            Si
                        {else}
                            No
                        {/if}
                    </td>
                    <td>
                        {if $usuario['admin'] != NULL}
                            <a class="btn btn-outline-secondary" href="sacarAdmin/{$usuario['id_usuario']}" role="button">Sacar Admin</a>
                            <a class="btn btn-outline-secondary" href="eliminarUsuario/{$usuario['id_usuario']}" role="button">Eliminar Usuario</a>
                        {else}
                            <a class="btn btn-outline-secondary" href="hacerAdmin/{$usuario['id_usuario']}" role="button">Hacer Admin</a>
                            <a class="btn btn-outline-secondary" href="eliminarUsuario/{$usuario['id_usuario']}" role="button">Eliminar Usuario</a>
                        {/if}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
    
{include file="footer.tpl"}