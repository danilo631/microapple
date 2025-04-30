<?php
function logAction($message) {
    // Define o caminho para o arquivo de log (certifique-se que a pasta "logs" exista e seja gravável)
    $logFile = __DIR__ . "/../logs/operations.log";
    $timestamp = date("Y-m-d H:i:s");
    $entry = "[$timestamp] $message" . PHP_EOL;
    
    // Grava a mensagem no arquivo, acrescentando ao final do arquivo
    file_put_contents($logFile, $entry, FILE_APPEND);
}
?>
