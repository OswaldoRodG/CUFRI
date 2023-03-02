<?php include("template/cabecera.php"); ?>


<div class="col-sm position-relative sombra" >
  <br>
  <form action="" method="POST" id="agregar">
  <br>
<h1>ALTA DE PACIENTES</h1>
  <div class="row">
    <div class = "col">
    <label for="apaterno" class="form-control-sm">Apellido Paterno:</label>
    <input type="text" class="form-control esqredo" name= "apaterno" id="apaterno" placeholder="ESCRIBE APELLIDO PATERNO" style="text-transform:uppercase;" onkeyup="javascript:this.value=texto(this.value.toUpperCase());" required>
    </div>

    <div class = "col">
    <label for="amaterno" class="form-control-sm">Apellido Materno:</label>
    <input type="text" class="form-control esqredo" name= "amaterno" id="amaterno" placeholder="ESCRIBE APELLIDO MATERNO" style="text-transform:uppercase;" onkeyup="javascript:this.value=texto(this.value.toUpperCase());">
    </div>

    <div class = "col">
    <label for="nombre" class="form-control-sm">Nombre:</label>
    <input type="text" class="form-control" name= "nombre" id="nombre" placeholder="ESCRIBE EL NOMBRE" style="text-transform:uppercase;" onkeyup="javascript:this.value=texto(this.value.toUpperCase());" required>
    </div>
  </div>


  <div class = "form-group">
  <label for="domicilio" class="form-control-sm">Domicilio:</label>
  <input type="text" class="form-control" name= "domicilio" id="domicilio" placeholder="ESCRIBE EL DOMICILIO" style="text-transform:uppercase;" onkeyup="javascript:this.value=numText(this.value.toUpperCase());" >
  </div>

  <div class="row">
    <div class = "col">
    <label for="localidad" class="form-control-sm">Localidad:</label>
    <input type="text" class="form-control" name= "localidad" id="localidad" placeholder="ESCRIBE LA LOCALIDAD" style="text-transform:uppercase;" onkeyup="javascript:this.value=texto(this.value.toUpperCase());" >
    </div>


    <div class = "col">
    <label for="municipio" class="form-control-sm">Municipio:</label>
    <input type="text" class="form-control" name= "municipio" id="municipio" placeholder="ESCRIBE EL MUNICIPIO" style="text-transform:uppercase;" onkeyup="javascript:this.value=texto(this.value.toUpperCase());" >
    </div>
  </div>

  <div class = "form-group">
  <label for="cel" class="form-control-sm">No. Celular:</label>
  <input type="tel" class="form-control" name= "cel" id="cel" placeholder="ESCRIBE NO. CELULAR" maxlength="10" pattern="[0-9]{10}" onkeyup="javascript:this.value=numeros(this.value.toUpperCase());">
  </div>


  <div class = "col">
  <label for="fechaNac" class="form-control-sm">Fecha de Nacimiento:</label>
  <input type="date" id="fechaNac" name="fechaNac" class="form-control">
  </div>


  <div class="row">
  <div class = "col">
  <label for="sexo" class="form-control-sm">Sexo:</label>
  <br>
  <select name="sexo" id="sexo" class="form-select form-select-sm">
      <option value=""> SELECCIONA </option>
      <option value="MASCULINO">MASCULINO </option>
      <option value="FEMENINO">FEMENINO </option>
  </select>
  </div>


  <div class = "form-group">
  <label for="curp" class="form-control-sm">CURP:</label>
  <input type="text" class="form-control" name= "curp" id="curp" maxlength="18" placeholder="ESCRIBE CURP" style="text-transform:uppercase;" onkeyup="javascript:this.value=numText(this.value.toUpperCase());" required>
  <br>
  <br>  
</div>


  <div class="col text-center">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <br>
  <br>
  </div>
  <br>
  <br>
  <br>
  <br>
  
 

  </form>
</div>

    
</div>

<?php include("template/pie.php"); ?>