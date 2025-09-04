<?php
include "model/conexion.php";

if(!empty($_GET["id"])){

    $id = intval($_GET["id"]); 

    $sql = $conexion->query("DELETE FROM colaboradores WHERE id=$id"); 
    if($sql){
        echo '<div id="msg"  style="text-align:center; color: green; font-weight: bold; margin: 10px 0; padding: 8px; border: 1px solid green; border-radius: 5px; background: #e6ffe6;">
             Colaborador eliminado
          </div>';
    }else{
        echo '<div id="msg" style="color: red; font-weight: bold; margin: 10px 0; padding: 8px; border: 1px solid red; border-radius: 5px; background: #ffe6e6;">
            Error al eliminar: ' . $conexion->error . '
          </div>';
    }
}
?>

<script>
setTimeout(() => {
    const msg = document.getElementById("msg");
    if(msg){
        msg.style.transition = "opacity 1s";
        msg.style.opacity = "0";
        setTimeout(() => msg.remove(), 1000); 
    }
}, 1000);
</script>