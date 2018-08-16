<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <!-- Datatbles -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <!-- Alertify -->
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertify/css/themes/bootstrap.min.css">
  <title>Data Table</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
            Tablas dinamicas con datatable y php
          </div>
          <div class="card-body">
            <span class="btn btn-primary" data-toggle="modal" data-target="#agreganuevosdatos">
              Agregar nuevo <span class="fas fa-plus-circle"></span>
            </span>
            <hr>
            <div id="tablaDatatable">
              <?php include_once("tabla.php");?>
            </div>
          </div>
          <div class="card-footer text-muted">
            By Andres
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- Modal -->
<div class="modal fade" id="agreganuevosdatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega nuevos juegos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" name="frmnuevo">
            <label for="">
              Nombre
            </label>
            <input type="text" class="form-control input-sm" id="nombre" name="nombre">
            <label for="">
              Año
            </label>
            <input type="text" class="form-control input-sm" id="anio" name="anio">
            <label for="">
              Empresa
            </label>
            <input type="text" class="form-control input-sm" id="empresa" name="empresa">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn-agragarnuevo">Agregar nuevo</button>
      </div>
    </div>
  </div>
</div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!--Datatables-->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="librerias/alertify/alertify.min.js"></script>
  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <!--<script>
    $(document).ready(function(){
      $('#tablaDatatable').load('tabla.php');
    });
</script>-->
    <script>
  $(document).ready(function () {
    $('#iddatatable').DataTable();
  });
</script>  
<script>
  $(document).ready(function(){
      $('#btn-agragarnuevo').click(function(){
        datos=$('#frmnuevo').serialize();
        $.ajax({
          type: "POST",
          data: datos,  
          url:  "procesos/agregar.php",
          succes:function(r){
            if(r==1){
              $('#tablaDatatable').load('tabla.php');
              alertify.success("Agregado con exito");              
            }else{
              alertify.error("Fallo al agregar");
            }
          }
        });
      });
  });
</script>
</body>

</html>