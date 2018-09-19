<?php
  require_once "../php/requires.php";
   class CONFIG{
     private $pdo;
     public function __construct(){
       $this->pdo=Database::_conectar();
     }
     public function _get(){
        try{
          $sql="SELECT * FROM site";
          $stm=$this->pdo->prepare($sql);
          $stm->execute();
          $out="";
            while($rs=$stm->fetch(PDO::FETCH_ASSOC)){
              if($out !=""){
                  $out.=",";
              }
              $out.='{"name":"'.$rs['name'].'",';
              $out.='"background":"'.$rs['background'].'",';
              $out.='"lema":"'.$rs['lema'].'",';
              $out.='"logo":"'.$rs['logo'].'",';
              $out.='"description":"'.$rs['description'].'",';
              $out.='"autor":"'.$rs['autor'].'",';
              $out.='"correo":"'.$rs['correo'].'",';
              $out.='"telefono":"'.$rs['telefono'].'",';
              $out.='"perfil":"'.$rs['perfil'].'"}';
            }
           $out='{"resultado":['.$out.']}';
           //$out='['.$out.']';
           echo($out);
        }catch(Exception $ex){
          echo '{"resultado":"Error:"'.$ex.'}';
        }
     }
     public function _updateBackground($bg){
       try {
         $sql="UPDATE site SET background=?";
         $this->pdo->prepare($sql)->execute(array(
           $bg
         ));
         echo '{"resultado":"BackGround Actualizado"}';
       } catch (Exception $ex) {
         echo '{"resultado":"Error:"'.$ex.'}';
       }
     }
   }
?>
