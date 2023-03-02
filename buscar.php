<?php include("template/cabecera.php"); ?>

<div class="col-md-6 offset-md-3 position-relative sombra" >

<br>
  
<form >
<div class = "form-group">
<label for="buscarcurp" class="form-control-sm">Buscar paciente por CURP:</label>
<br>
<input type="text" class="form-control form-control-sm" name="buscar" id="buscar" maxlength="50" style="text-transform:uppercase;" placeholder="Escribe" onkeyup="javascript:this.value=textoNum(this.value);" autofocus required>
</div>
<br>
<br>
<button type="submit" class="btn btn-primary">Buscar</button>
</form>
<br>
</div>


<?php include("template/pie.php"); ?>