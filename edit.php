<?php
include "db.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $edad = $_POST['edad'];
    $especialidad = $_POST['especialidad'];

    $sql = "UPDATE `datos_pacientes` SET `nombre`='$nombre',`apellidos`='$apellidos',
    `sexo`='$sexo',`edad`='$edad',`especialidad`='$especialidad' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location:index.php?msg=Data updated successfully");
    }else{
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
<br>
<title>Hospital Pablo de Anda</title>
</head>

<body>

<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:  #000000"  >
    <p style="color: #ffffff">
        Hospital Pablo de Anda <br> Registro de Pacientes </p>
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Modificar datos del paciente</h3>
            <p class="text-muted">Complete el formulario para modificar los datos del paciente</p>
        </div>

        <?php
    
        $sql = "SELECT * FROM `datos_pacientes` WHERE id=$id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>


        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos']?>">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <br>
                    <label>Sexo:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="sexo" id="masculino" value="Masculino"
                    <?php echo ($row['sexo']=='Masculino')?"checked":"";?>>
                    <label for="masculino" class="form-input-label">Masculino</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="sexo" id="femenino" value="Femenino"
                    <?php echo ($row['sexo']=='Femenino')?"checked":"";?>>
                    <label for="femenino" class="form-input-label">Femenino</label>
                </div>

                <div class="row">
                    <div class="col-3">
                        <label class="form-label">Edad:</label>
                        <input type="text" class="form-control" name="edad" value="<?php echo $row['edad']?>">
                    </div>

                    <div class="col">
                        <label class="form-label">Especialidad:</label>
                        <input type="text" class="form-control" name="especialidad" value="<?php echo $row['especialidad']?>">
                    </div>
                
                <div>
                    <br>
                    <button type="submit" class="btn btn-success" name="submit">Actualizar</button>
                    <button a href="index.php" class="btn btn-danger">Cancelar</button>
                </div>
            </form>
        </div>
    </div>


            

  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>