<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fcbarca extends CI_Controller {
  public function __construct(){
		parent::__construct();
   $this->load->model('barca');
 }

	public function index()
	{
    $data["listaFcbarca"]=
    $this->barca->obtenerTodos();
		$this->load->view('header');
    $this->load->view('fcbarca/index',$data);
    $this->load->view('footer');
	}

  public function nuevo()
  {
    $this->load->view('header');
    $this->load->view('fcbarca/nuevo');
    $this->load->view('footer');
  }

  public function guardarFcbarca(){
		$datosNuevosFcbarca=array(
			"nombre_bar"=>$this->input->post('nombre_bar'),
    	"ciudad_bar"=>$this->input->post('ciudad_bar'),
      "direccion_bar"=>$this->input->post('direccion_bar')
		);
		print_r($datosNuevosFcbarca);
		if($this->barca->insertar($datosNuevosFcbarca)){
			redirect('fcbarca/index');
		}else {
			echo "<h1>Error</h1>";
		}
}
public function borrar($id_bar){
	if ($this->barca->eliminarPorId($id_bar)) {
		echo "Eliminado exitosamente";
		redirect('fcbarca/index');
	} else {
		echo "Error al Eliminar :(";
	}
}


}
