<?php
// Carregar XML a partir de um arquivo
//$xml = simplexml_load_file("ondas.xml");
// Carregar XML a partir de uma URL
//$xml = simplexml_load_string("http://servicos.cptec.inpe.br/XML/cidade/241/dia/0/ondas.xml");

//print_r($xml);
//echo "Cidade: ".$xml->nome."<br/>";
//echo "Manha: ".$xml->manha->vento."<br/>";
//echo "Tarde: ".$xml->tarde->vento."<br/>";
//echo "Noite: ".$xml->noite->vento."<br/>";

// Funcao proprietaria criada para salvar XML
function array_to_xml($data, &$xml_data)
{
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            if (is_numeric($key)) {
                // Tags XML não podem ser numéricas. Ex: <12> <- NÃO
                $key = "item".$key;
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value,$subnode);
        } else {
            if (is_numeric($key)) {
                // Tags XML não podem ser numéricas. Ex: <12> <- NÃO
                $key = "item".$key;
            }
            $xml_data->addChild($key, htmlspecialchars($value));
        }
    }
}

$usuario = array(
    "nome" => "Vicente",
    "sobrenome" => "Silva Cruz",
    "idade" => 35,
    "caracteristicas" => array(
        "amigo", "fiel", "legal"
    )
);

$xml_data = new SimpleXMLElement("<data/>");

array_to_xml($usuario, $xml_data);

$result = $xml_data->asXML();
echo $result;
?>