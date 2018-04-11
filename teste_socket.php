<?php
stream_context_set_default([
    'http' => [
        'proxy' => '10.76.64.14:3128'
    ]
]);
//echo "<h2>TCP/IP Connection</h2><br/>";
//
//// Port for www service
//$port = getservbyname("www","tcp");
//
//// IP Address for target host
//$address = gethostbyname('www.correiodopovo.com.br');
//echo "Address: ".$address."<br/>";
//
//$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
//if ($socket === FALSE) {
//    echo "socket_create() failed: ".socket_strerror(socket_last_error())."<br/>";
//} else {
//    echo "socket_create: OK!<br/>";
//}
//
//echo "Attempting to connect to ".$address." on port ".$port."...";
//$result = socket_connect($socket, $address, $port);
//if ($result === FALSE) {
//    echo "socket_connection() failed: ".socket_strerror(socket_last_error($socket));
//} else {
//    echo "socket_connect: OK!<br/>";
//}

// Function to check response time
function pingDomain($domain){
    $starttime = microtime(true);
    $file      = fsockopen ($domain, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file) $status = -1;  // Site is down
    else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
    return $status;
}

echo pingDomain("216.58.222.4");
?>