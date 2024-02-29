<?php
    $titulo = "Inicio";
    require_once "./includes/header.php";
?>

<h1 class="text-center text-success">
    Registro Exitoso
</h1>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            Nombre: <?php echo $_POST["nombre"] , " " , $_POST["apellido"];?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            Fecha de Nacimiento: <?php echo $_POST["fecha_nacimiento"];?>
        </h6>
        <br>
        <p class="card-text">
            Especialidad: <?php echo $_POST["especialidad"];?>
        </p>
        <br>
        <p class="card-Text">
            Email: <?php echo $_POST["email"];?>
        </p>
        <br>
        <p class="card-Text">
            Telefono: <?php echo $_POST["telefono"];?>
        </p>
    </div>
</div>

    <br>
    <br>
    <br>
    <br>

    <?php
    require_once "./includes/footer.php";
?>