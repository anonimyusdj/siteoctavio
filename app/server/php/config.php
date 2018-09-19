<?php
  header("Access-Control-Allow-Origin: *");
  //header("Content-Type: application/json; charset=UTF-8");
  require_once "requires.php";

  if(isset($_REQUEST['opcion']) && !empty($_REQUEST['opcion']) && isset($_REQUEST['table']) && !empty($_REQUEST['table'])){
        $table=$_REQUEST['table'];
        $opc=$_REQUEST['opcion'];
        switch ($table) {
          case 'config':
              _config($opc);
            break;

          default:
            echo "Opcion no válida";
            break;
        }
  }else{
        echo '{"resultado":"Not Actions"}';
      }
function _config($opcion){
    $conf=new CONFIG();
    switch ($opcion) {
        case 'config':
            $conf->_get();
          break;
        case 'background':
          if(isset($_REQUEST['bg']) && !empty($_REQUEST['bg'])){
            $conf->_updateBackground($_REQUEST['bg']);
          }
          break;
        default:
            // code...
          break;
    }
  }

  function _albums(){
    
  }

?>
