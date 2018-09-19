<?php
  require_once "../php/requires.php";
  class Albums{
    private $pdo;

    public function __construct(){
      $this->pdo=Database::_conectar();
    }
    public function _saveAlbums($nombre,$inpiracion,$foto){
      try{
        $sql="INSERT INTO albums(nombre_album,inpiracion,foto) VALUES(?,?,?)";
        $this->pdo->prepare($sql)->execute(array(
          $nombre,$inpiracion,$foto
        ));
        echo '{"resultado":"Album Guardado con Exito"}';
      }catch(Exception $ex){
        echo '{"resultado":"'.$ex.'"}';
      }
    }
    public function _saveImg(){
      try {
        $file = $_FILES["file"]["name"];
        $ruta="app/public/multimedia/img/albums_img/";
        if(!is_dir($ruta))
        	mkdir($ruta, 0777);

        if($file && move_uploaded_file($_FILES["file"]["tmp_name"], $ruta.$file))
        {
        	echo $ruta.$file;
        }
      } catch (Exception $ex) {
        echo '{"resultado":"'.$ex.'"}';
      }

    }

  }
  ?>
