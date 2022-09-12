<?php
    $dni = "";
    $nombre = "";
    $apellido = "";
    $direccion = "";
    $telefono = "";
    $correo = "";
    $fecha = "";

    $errores = [];

    if ($_POST) {
        $dni = $_POST["txtDni"];
        $nombre = $_POST["txtNombre"];
        $apellido = $_POST["txtApellido"];
        $direccion = $_POST["txtDireccion"];
        $telefono = $_POST["txtTelefono"];
        $correo = $_POST["txtCorreo"];
        $fecha = $_POST["txtFecha"];

        if (!trim($dni)) { array_push($errores,"El dni es necesario"); }
        if ( strlen(trim($dni))<=7) { array_push($errores,"El dni requiere 8 digitos"); }
        if ( strlen(trim($dni))>8) { array_push($errores,"El dni son solo 8 digitos"); }
        if (!trim($nombre)) { array_push($errores,"El nombre es necesario"); }
        if (!trim($apellido)) { array_push($errores,"El apellido es necesario"); }
        if (!trim($direccion)) { array_push($errores,"La direccion es necesaria"); }
        if (!trim($telefono)) { array_push($errores,"El telefono es necesario"); }
        if (!trim($correo)) { array_push($errores,"El correo es necesario"); }
        if (!trim($fecha)) { array_push($errores,"La fecho es necesario"); }

        if (count($errores) == 0) {
            $dni = "";
            $nombre = "";
            $apellido = "";
            $direccion = "";
            $telefono = "";
            $correo = "";
            $fecha = "";
        }
    }

include("./templates/header.php"); ?>
<div class="container mt-2 mb-2">
    <p>Agreda a una persona</p>
    <hr>
</div>
<div class="container">
    <?php foreach($errores as $error): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo $error; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endforeach; ?>
    <?php if(count($errores)==0 && $_POST): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo "Formulario enviado con exito"; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <form action="./persona.php" method="POST" class="border rounded p-2 m-auto" style="max-width:500px;">
        <div class="form-group">
            <label for="dni">DNI</label>
            <input name="txtDni" type="number" class="form-control" 
                id="dni"
                value="<?php echo $dni;?>" 
                placeholder="Ingrese su dni" required >
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input name="txtNombre" type="text" class="form-control" 
                id="nombre"
                value="<?php echo $nombre;?>" 
                placeholder="Ingrese su nombre" required >
        </div>
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input name="txtApellido" type="text" class="form-control" 
                id="apellido"
                value="<?php echo $apellido;?>" 
                placeholder="Ingrese su apellido" required >
        </div>
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input name="txtDireccion" type="text" class="form-control" 
                id="direccion"
                value="<?php echo $direccion;?>" 
                placeholder="Ingrese direccion" required >
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input name="txtTelefono" type="tel" class="form-control" 
                id="telefono"
                value="<?php echo $telefono;?>" 
                placeholder="Ingrese telefono" required >
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input name="txtCorreo" type="email" class="form-control" 
                id="correo"
                value="<?php echo $correo;?>" 
                placeholder="Ingrese su correo" required >
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de nacimiento</label>
            <input name="txtFecha" type="date" 
                id="fecha"
                value="<?php echo $fecha;?>" 
                class="form-control" required >
        </div>
        <button type="submit" class="btn btn-primary">CREAR</button>
    </form>
</div>
<?php include("./templates/footer.php"); ?>