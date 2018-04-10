<?php
error_reporting(0);
function getData($code){
	if($code=='conc' || $code=='tjxag'|| $code=='tjcu'||$code=='cuxh'){
	//$url = "http://m.kxt.com/hQuotes/chart?code=".$code;
	$html = getHtml($url);
	if(!empty($html)){
		$data = array();
    	preg_match_all('/<div class="price-info">(.*?)<h1>(.*?)<\/h1>(.*?)<h2 class="gbcolor">(.*?)<\/h2>(.*?)<span>(.*?)<\/span>(.*?)<span>(.*?)<\/span>(.*?)<i>(.*?)<\/i>(.*?)<i>(.*?)<\/i>(.*?)<i>(.*?)<\/i>(.*?)<i>(.*?)<\/i>(.*?)<\/div>/s',$html,$data);
		$diff = strpos($data[6][0],"-")!==false?$data[6][0]:"+".$data[6][0];
		$diffRate = strpos($data[8][0],"-")!==false?$data[8][0]:"+".$data[8][0];
		return array("name"=>$data[2][0],"price"=>$data[4][0],"diff"=>$diff,"diffRate"=>$diffRate,"jk"=>$data[10][0],"zk"=>$data[12][0],"zg"=>$data[14][0],"zd"=>$data[16][0],"class"=>$data[4][0]);
	}}else{
			echo '参数非法';
		}
}

function getHtml($url,$data = null){
	$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    $UserAgent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.835.163 Safari/535.1";
	curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT,20);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}
?>