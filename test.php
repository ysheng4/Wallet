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
	 //test
	$wq.="and (".$jianianq.") ";1111
	
}
