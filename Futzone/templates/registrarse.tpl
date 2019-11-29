{include file="header.tpl"}

    <div class="container">
        <h1>Registrarse</h1>
        <form method="post" action="insertarUsuario">
            <div class="form-group">
                <label>Usuario</label>
                <input type="input" class="form-control" name="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="emailId" id="emailId" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Listo</button>
        </form>
    </div>


{include file="footer.tpl"}