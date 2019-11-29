{include file="header.tpl"}
    <hr class="margenhr bg-success">
    <h3 class="text-center"><strong>Ingresar</strong></h3>
    <hr class="margenhr bg-success">
    <div class="container">
        <h3 class="text-center text-danger">{$Message}</h3>
        <h1 class="text-center">Ingresar como usuario</h1>
        <form method="post" action="verificarLogin">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <br>
        <h1  class="text-center">Ingresar como administrador</h1>
        <form method="post" action="verificarLoginAdmin">
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar como administrador</button>
        </form>
        <br>
        <form  class="text-center" method="post" action="agregarUsuario">
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
    
{include file="footer.tpl"}