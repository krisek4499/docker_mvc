<?php

require_once 'conect.php';
class send{
  function __construct(){}
    public function check_email($foo) {
    $emails=$foo;
    $instance=connect_DB::getInstance();
    $q = "SELECT email FROM form_base where email='$emails'";
    $stm = $instance->prepare($q);
    $stm->execute();
    $data = $stm->fetchAll(PDO::FETCH_OBJ);
    if($data!=null) $answer="tak";
    else $answer="Formularz wypelniony pomyslnie";
    return $answer;
  }
}
$emails=$_POST['email'];
$info=send::check_email($emails);
echo json_encode($info);
