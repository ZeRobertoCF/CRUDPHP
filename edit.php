<?php

include "model/conexion.php";

//almacenamos id
$id=$_GET["id"];


//consulta
$sql=$conexion->query("select * from  colaboradores where id=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Colaborador</title>
</head> 
<body>

    <div class="contanier-form-edit">
    <form  method="POST">
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controller/editcpl.php";
        while($datos=$sql->fetch_object()){?>
            <div class="input-container">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="6" r="4" stroke="#090979" stroke-width="1.5"></circle> <path d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <input type="text" name="nombre" placeholder="Nombre" value="<?=$datos->nombre ?>">
                </div>
                <div class="input-container">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="9" cy="9" r="2" stroke="#090979" stroke-width="1.5"></circle> <path d="M13 15C13 16.1046 13 17 9 17C5 17 5 16.1046 5 15C5 13.8954 6.79086 13 9 13C11.2091 13 13 13.8954 13 15Z" stroke="#090979" stroke-width="1.5"></path> <path d="M22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C21.298 5.64118 21.5794 6.2255 21.748 7" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M19 12H15" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M19 9H14" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M19 15H16" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <input type="text" name="cargo" placeholder="Cargo"  value="<?= $datos->cargo ?>">
                </div>
                <div class="input-container">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 22L2 22" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M21 22V13M11.0044 5C11.0223 3.76022 11.1143 3.05733 11.5858 2.58579C12.1716 2 13.1144 2 15 2H17C18.8857 2 19.8285 2 20.4143 2.58579C21 3.17157 21 4.11438 21 6V9" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 22V16M3 22V13M3 9C3 7.11438 3 6.17157 3.58579 5.58579C4.17157 5 5.11438 5 7 5H11C12.8856 5 13.8284 5 14.4142 5.58579C15 6.17157 15 7.11438 15 9V12" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M9 22V19" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6 8H12" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6 11H7M12 11H9.5" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M6 14H12" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    
               <select id="puesto" name="puesto">
                    <option value="" disabled <?= ($datos->puesto == "") ? "selected" : "" ?>>Puesto</option>
                    <option value="Community Manager" <?= ($datos->puesto == "Community Manager") ? "selected" : "" ?>>Community Manager</option>
                    <option value="Diseño Web" <?= ($datos->puesto == "Diseño Web") ? "selected" : "" ?>>Diseño Web</option>
                    <option value="Diseño Gráfico" <?= ($datos->puesto == "Diseño Gráfico") ? "selected" : "" ?>>Diseño Gráfico</option>
                </select>
                </div>
                <div class="input-container">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 4V2.5" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17 4V2.5" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M9 14.5L10.5 13V17" stroke="#090979" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M13 16V14C13 13.4477 13.4477 13 14 13C14.5523 13 15 13.4477 15 14V16C15 16.5523 14.5523 17 14 17C13.4477 17 13 16.5523 13 16Z" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <input type="text" name="edad" placeholder="Edad" value="<?= $datos->edad ?>">
                </div>

                <div class="input-container">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 4V2.5" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17 4V2.5" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#090979" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                    <input type="date" name="fecha" placeholder="Fecha de Ingreso" value="<?= $datos->fecha_ingreso ?>">
                </div>
        <?php }
        ?>

                
                <button type="submit" name="btnregistrar" value="ok"> Editar Colaborador</button>
            </form>
        </div>
</body>
</html>