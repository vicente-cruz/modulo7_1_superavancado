<?php
/**
 * Aula 12 Cache Intro - Conceitos, uso: Sites gigantes. Ex: Globo.com
 * Aula 13 Cache básico - Usando conceito de cache.
 *  cria classe Cache. Salva variaveis um json (a cache) com atributo:valores
 * Aula 14 Cache intermediario - usando ob_start(), ob_get_contents(), ob_end_clean()
 *  cria arquivo pagina.php (html) e index.php para processar e salvar no ".cache"
 * Aula 15 Cache avancado - Cache com tempo
 *  cria diretorio "paginas" e "caches"
 *  cria funcao is_valido()
 */

// Aula 15
function is_valido($cache) {
    //ERRO!! No Windows não existe tempo de modificacao do inode do arquivo $cache
//    $ultima_modificacao = filectime($cache);
    $ultima_modificacao = filemtime($cache);
    $c = time() - $ultima_modificacao;
    
    echo $ultima_modificacao." - ".time();
    
    echo "<br/>TIME: ".$c."<br/>";
    
    if ($c > 10) {
        return FALSE;
    } else {
        return TRUE;
    }
}

// Aula 13
$p = "pagina";
if (isset($_GET['p']) && !empty($_GET['p']) && file_exists("paginas/".$_GET['p'].".php")) {
    $p = $_GET['p'];
}

if (file_exists("caches/".$p.".cache") && is_valido("caches/".$p.".cache")) {
    require "caches/".$p.".cache";
} else {
    ob_start();
    // Aula 13
    require "paginas/".$p.".php";
    $html = ob_get_contents();
    ob_end_clean();

    file_put_contents("caches/".$p.".cache",$html);
    echo $html;
}
?>