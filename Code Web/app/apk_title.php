<?php

$query = $_GET["q"];

$titletext ='
{
  "status": "ok",
  "title": " Приложение помогающее получать доступ к замечательной системе безопасности гаражного общества.\n \n Приложение позволяет открывать шлагбаум для вьезда или прохода  на территорию гаражного общества ООО РОМАШКА. \n \n  С разрешения общества согластно договору с владельцапи собственности гаражного кооператива. \n \n   "
}
';

$myArray = json_decode($titletext);
header('Content-Type: application/json');
echo json_encode($myArray);
?>