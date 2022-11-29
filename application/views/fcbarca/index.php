
<legend class="text-center">
<i class="glyphicon glyphicon-list-alt">
<b>FUTBOL CLUB BARCELONA</b>
</i>
</legend>
<br>
<center>
  <a href="<?php echo site_url('fcbarca/nuevo') ?>"
<button type="button" name="button" class="btn btn-success ">
<i class="glyphicon glyphicon-plus"></i>
Agregar nuevo Jugador
</a>
</center>
</br>

<?php if($listaFcbarca): ?>
<table class="table table striped table-bordared table-hover">
  <thead>
    <tr>
      <th class="text-center"> ID</th>
      <th class="text-center"> NOMBRE</th>
      <th class="text-center"> CIUDAD</th>
      <th class="text-center"> DIRECION</th>
      <th class="text-center"> ACCION</th>
  </thead>
  <tbody>
<?php foreach ($listaFcbarca->result() as $fcbarcaTemporal): ?>
<tr>
  <th class="text-center">
  <?php echo $fcbarcaTemporal->id_bar; ?></th>
  <th class="text-center">
  <?php echo $fcbarcaTemporal->nombre_bar; ?></th>
  <th class="text-center">
  <?php echo $fcbarcaTemporal->ciudad_bar; ?></th>
  <th class="text-center">
  <?php echo $fcbarcaTemporal->direccion_bar; ?></th>
  <th class="text-center">
    <a href="#" class="btn btn-warning">
      <i class="glyphicon glyphicon-pencil">Editar</i>
    </a>
    <a href="<?php echo site_url('fcbarca/borrar');?>/<?php echo $fcbarcaTemporal->id_bar; ?>" class="btn btn-danger">
      <i class="glyphicon glyphicon-trash">Eliminar</i>
    </a>

  </th>
</tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php else: ?>
  <h3><b> No Existen Jugador</b></h3>
<?php endif; ?>
