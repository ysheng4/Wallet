$peixunxiangmu=rtrim($peixunxiangmu,',');
$peixunxiangmuarr=explode(',',$peixunxiangmu);
$jianianq='';
if($peixunxiangmu!="0" and $peixunxiangmu!=""){
	foreach($peixunxiangmuarr as $k=>$v){
		if(!empty($v)){
			if($jianianq==''){
				$jianianq .="'pxxm'='$v'";
			}else{
				$jianianq .="or 'pxxm'='$v'";
				
			}
		}
		
	}
	 
	$wq.="and (".$jianianq.") ";111122111
	
}
