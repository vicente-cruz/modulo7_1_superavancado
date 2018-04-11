<?php
/**
 *  1 - 
 *  Acessar o site http://www.correiodoestado.com.br/climatempo/json/ e copiar o json
 *  Acessar o site http://www.jsoneditoronline.org e colar o json
 * 
 *  2 - Programar...
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Tá dando Timeout!!!
//stream_context_set_default([
//    'http' => [
//        'proxy' => '10.76.64.14:3128'
//    ]
//]);
$usuario = "vicentesc";
$senha = "V1crUz81@1307";
$aContext = [
    "ftp" => [
        "proxy" => "tcp://10.76.64.14:3128",
        "request_fulluri" => TRUE,
        "header" => [
            "Proxy-Authorization: Basic ".$usuario.":".$senha
        ]
    ],
    "http" => [
        "proxy" => "tcp://10.76.64.14:3128",
        "request_fulluri" => TRUE,
        "header" => [
            "Proxy-Authorization: Basic ".$usuario.":".$senha
        ]
    ]
];
$cxContext = stream_context_create($aContext);
$url_content = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/", FALSE, $cxContext);
//$url_content = file_get_contents("http://intranet.daer.rs.gov.br/");

//$ch = curl_init();
////$url = "http://www.correiodoestado.com.br/climatempo/json/";
//$url = "http://www.google.com.br";
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_PROXY, "10.76.64.14:3128");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $usuario.":".$senha);
//curl_setopt($ch, CURLOPT_HEADER, TRUE);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//$url_content = curl_exec($ch);

 echo $url_content;

//$json = json_decode($url_content);
//
//echo "Cidades retornadas: ".count($json->previsao)."<br/>";
//
//foreach ($json->previsao as $item) {
//    echo "Cidade: ".$item->cidade." - Baixa: ".$item->baixa."Alta: ".$item->alta." - ".$item->frase."<br/>";
//}
?>