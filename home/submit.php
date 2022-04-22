<?php include('../layouts/header.php');?>
<?php //admin lite
echo "<link  rel='stylesheet' type='' href='../dist/css/adminlte.min.css'/>";?>
<section class="container content">
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">

        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">seguro</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <h1 class="card card-info text-center"> Fomulario de Solicitud

    <br>de Seguro</h1>
  <hr>
  <br><br>
  <h3 class="text-center bg-info">Elegir datos en base a tu Ubicacion</h3>
  <hr>
  <div class="row">

    <div class="col-sm-4">
      <!-- select -->
      <div class="form-group">
        <label>Continnete</label>
        <select class="form-control">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <!-- select -->
      <div class="form-group">
        <label>Pais</label>
        <select class="form-control">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <!-- select -->
      <div class="form-group">
        <label>Ciudad</label>
        <select class="form-control">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div>
    </div>


    <div class="col-sm-4">
      <!-- select -->
      <div class="form-group">
        <label>Categoria</label>
        <select class="form-control">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <!-- select -->
      <div class="form-group">
        <label>Empresa</label>
        <select class="form-control">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div>
    </div>
    <div class="col-sm-4">
      <!-- select -->
      <div class="form-group">
        <label>Ciudad</label>
        <select class="form-control">
          <option>option 1</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div>
    </div>

    <div class="card-body">
      <h3 class="text-center bg-info">Datos personales</h3>
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Apellidos</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Telefono</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>


      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </div>

      <div class="form-group">
        <label for="exampleInputFile">Anjuntar expediente</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div>                  <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
    </div>
  </div>
  <div class="card card-secondary">
    <div class="card-header">
      <h3 class="card-title">Precios</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-sm-6">
            <!-- checkbox -->
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                <label for="customCheckbox1" class="custom-control-label">Seguro Turismo 2500Fcfca</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked="">
                <label for="customCheckbox2" class="custom-control-label">Seguro Turismo2 2500Fcfca</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled="">
                <label for="customCheckbox3" class="custom-control-label">Seguro Turismo 2500Fcfca</label>
              </div>


            </div>
          </div>
          <div class="col-sm-6">
            <!-- radio -->
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- select -->

          </div>

        </div>

        <div class="form-group">
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <div class="row">
    <div class="col-12 mt-3 text-center">
      <p class="lead">
        <a href="contact-us.html">Contact us</a>,
        if you found not the right anwser or you have a other question?<br>
      </p>
    </div>
  </div>
  <?php include('../layouts/footer.php');?>
</section>
