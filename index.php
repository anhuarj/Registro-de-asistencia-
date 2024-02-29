<?php
    $titulo = "Inicio";
    require_once "./includes/header.php";
?>


    <!--
        - Nombre
        - Apellido
        - Fecha de nacimiento
        - Especialidad
        - Email
        - Telefono
-->

<h1 class="text-center">Registro de Asistencia</h1>

<form action="./exito.php" method="post">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
    </div>
    <div class="mb-3">
        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
    </div>
    <div class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <select name="form-select" id="especialidad" name="especialidad" required>
            <option value="1">Programación</option>
            <option value="2">Diseño</option>
            <option value="3">Redes</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" required>
    </div>
    <button type="submit" name="registrar" class="btn btn-primary btn-block">Registrar</button>
</form>

<br>
<br>
<br>
<br>

<?php
    require_once "./includes/footer.php";
?>