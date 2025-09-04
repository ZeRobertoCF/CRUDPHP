<?php
include "model/conexion.php";

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) 
        && !empty($_POST["cargo"]) 
        && !empty($_POST["puesto"]) 
        && !empty($_POST["edad"]) 
        && !empty($_POST["fecha"])) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $cargo = $_POST["cargo"];
        $puesto = $_POST["puesto"];
        $edad = $_POST["edad"];
        $fecha = $_POST["fecha"];

        $sql = $conexion->query("UPDATE colaboradores 
            SET nombre='$nombre', cargo='$cargo', puesto='$puesto', edad='$edad', fecha_ingreso='$fecha' 
            WHERE id=$id");

        if ($sql) {
            header("location:index.php");
            exit();
        } else {
            echo "Error al modificar colaborador: " . $conexion->error;
        }
    } else {
        echo '<div id="msg" style="padding:10px; margin:10px 0; background:#fff3cd; color:#856404; border:1px solid #ffeeba; border-radius:5px; text-align:center;">
                 Algunos de los campos están vacíos
              </div>';
    }
}
?>

<script>
setTimeout(() => {
    const m = document.getElementById("msg");
    if(m){
        m.style.transition = "opacity 0.7s";
        m.style.opacity = "0";
        setTimeout(()=> m.remove(), 700);
    }
}, 2000); // ahora 2 segundos
</script>
