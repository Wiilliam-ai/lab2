<?php include("./templates/header.php"); ?>
<div class="container mt-3">
    <form>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input name="nombre" required type="text" id="nombre" class="form-control" placeholder="Tu nombre">
        </div>
        <div class="form-group">
            <label for="correo">Correo electrónico</label>
            <input name="correo" required type="email" id="correo" class="form-control" placeholder="Tu correo electrónico">
        </div>
        <div class="form-group"><label for="mensaje">Mensaje</label>
            <textarea required placeholder="Escribe tu mensaje" class="form-control" name="mensaje" id="mensaje" cols="30" rows="5"></textarea>
        </div>
        <div class="form-group">
            <button class="btn-success btn" type="submit">
                Enviar
            </button>
        </div>
    </form>
</div>
<?php include("./templates/footer.php"); ?>