<?php

class Log
{

    public $fileName;
    public $handle;


//    date_default_timezone_set('America/Chicago');

    public function __construct($prefix = 'Log')
    {
        $this->logDate = date('Y-m-d');
        $this->fileName = __DIR__ . "/{$prefix}-{$this->logDate}.log";
        $this->handle = fopen($this->fileName, 'a');
    }

    public function __destruct()
    {
        fclose($this->handle);
    }

    public function logMessage($logLevel, $message)
    {
        /*$filename = 'log-' . date('m-d-Y') . '.log';
        $handle = fopen($filename, 'a');*/

        $logTime = date('m-d-y h:i:s');

        $message = $logTime. ' [' .$logLevel. ' ] '.$message;

        fwrite($this->handle, $message.PHP_EOL);

        /*fclose($handle);*/
    }


    public function info($logMessage)
    {
        $this->logMessage('INFO', $logMessage);
    }

    public function error($logMessage)
    {
        $this->logMessage('ERROR', $logMessage);
    }

}
