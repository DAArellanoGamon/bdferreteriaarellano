<?php
    class cliente{
        private $model;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new modelocliente();
        }
        public function guardar($nombre,$apellido_p, $apellido_m, $telefono, $calle, $colonia, $cp, $genero){
            $id = $this->model->insertar($nombre,$apellido_p, $apellido_m, $telefono, $calle, $colonia, $cp, $genero);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre,$apellido_p, $apellido_m, $telefono, $calle, $colonia, $cp, $genero){
            return ($this->model->update($id,$nombre,$apellido_p, $apellido_m, $telefono, $calle, $colonia, $cp, $genero) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
    }

?>