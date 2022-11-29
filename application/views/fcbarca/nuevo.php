<legend class="text-center">
<i class="glyphicon glyphicon-plus-sign">
Agrega un Nuevo Jugador
</i>
</legend>

<hr>

<form class="" action="<?php echo site_url('fcbarca/guardarFcbarca'); ?>" method="post">

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_bar" value=""
      class="form-control"
      placeholder="Ingrese nombre"
      >
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CIUDAD</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="ciudad_bar" value=""
      class="form-control"
      placeholder="Ingrese ciudad"
      >
    </div>
  </div>
<br>
<div class="row">
  <div class="col-md-4 text-right">
    <label for="">DIRECCION</label>
  </div>
  <div class="col-md-7">
    <input type="text" name="direccion_bar" value=""
    class="form-control"
    placeholder="Ingrese direccion"
    >
  </div>
</div>

<br>
  <center>
    <div class="row">
      <div class="cold-md-4">
      </div>

      <div class="cold-md-7">
        <button type="submit" name="button"
         class="btn btn-primary">

        <i class="glyphicon glyphicon-ok"></i>
        Guardar
      </button>
      <a href="<?php echo site_url('fcbarca/index'); ?>" class="btn btn-danger">
        <i class="glyphicon glyphicon-remove"></i>
        Cancelar
    </a>
    </center>

      </div>
    </div>

</form>
