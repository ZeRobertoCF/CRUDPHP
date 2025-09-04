<?php
if (!empty($_POST["btnregistrar"])) {
    // validación de campos del form
    if (!empty($_POST["nombre"]) 
        && !empty($_POST["cargo"]) 
        && !empty($_POST["puesto"]) 
        && !empty($_POST["edad"]) 
        && !empty($_POST["fecha"])) {
        
        $nombre=$_POST["nombre"];
        $cargo=$_POST["cargo"];
        $puesto=$_POST["puesto"];
        $edad=$_POST["edad"];
        $fecha=$_POST["fecha"];

        // INSERTAR
        $sql=$conexion->query("INSERT INTO colaboradores(nombre,cargo,puesto,edad,fecha_ingreso) 
                               VALUES('$nombre','$cargo','$puesto','$edad','$fecha')");
        
        if ($sql==1) {
            echo '<div id="msg" style="padding:10px; margin:10px 0; background:#d4edda; color:#155724; border:1px solid #c3e6cb; border-radius:5px; text-align:center;">
                     Colaborador registrado
                  </div>';
        } else {
            echo '<div id="msg" style="padding:10px; margin:10px 0; background:#f8d7da; color:#721c24; border:1px solid #f5c6cb; border-radius:5px; text-align:center;">
                     Colaborador no registrado
                  </div>';
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
}, 1000); // ahora 2 segundos
</script>
