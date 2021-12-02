<?php include 'template/header.php' ?>


   <div class="container mt-5">
      <div class="row justify-content-center">
         <div class="col-md-7">
            <!-- Inicio Alerta -->
            <?php
               if(isset($_GET['mensaje']) and $_GET['mensaje' == 'falta']){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Error!</strong> Rellena los Campos.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php
               }
               ?>
            <div class="card">
               <div class="card-header">
                  lista de personas
               </div>
               <div class="p4">
                  <table class="table align-middle">
                     <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Edad</th>
                           <th scope="col">Signo</th>
                           <th scope="col">Opciones</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td scope="row"></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                     </tbody>
                  </table>
                  
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card">
               <div class="card-header">
                  Ingresar Datos:
               </div>
               <form action="registrar.php" class="p-4" method="POST">
                  <div class="mb-3">
                     <label class="form-label">Nombre:</label>
                     <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Edad:</label>
                     <input type="number" name="edad" class="form-control" placeholder="edad" autofocus>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Signo:</label>
                     <input type="text" name="signo" class="form-control" placeholder="signo" autofocus>
                  </div>
                  <div class="d-grid">
                     <input type="hidden" name="oculto" class="submit btn btn-primary">
                     <input type="submit" class="submit btn btn-primary" value="Registrar">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>


<?php include 'template/footer.php' ?>

      