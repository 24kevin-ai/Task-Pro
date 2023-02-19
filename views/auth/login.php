<div class="contenedor">
    <h1>Task-Pro</h1>
    <p>Crea y Administra tus Proyectos</p>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">
            Iniciar Sesión
        </p>
        <form action="/" class="formulario" method="POST">
            <div class="campo">
                <label for="email">Correo electronico</label>
                <input type="email" id="email" placeholder="Correo electronico" name="email">
            </div>
            <div class="campo">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Contraseña" name="password">
            </div>
            <input type="submit" class="boton" value="Iniciar Sesion">

            <div class="acciones">
            <a href="/crear">¿Aun no tienes una cuenta? obten una</a>
            <a href="/olvide">¿olvidaste tu contraseña</a>
            </div>
        </form>
    </div>
</div>