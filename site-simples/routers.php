<?php
global $routers;
$routers = array();

$routers['/galeria/{produto}'] = '/galeria/:produto';
$routers['/{produto}'] = '/produtos/:produto';//senao der experimentar usar /produtos/{produto}


?>