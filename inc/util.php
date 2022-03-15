<?php
declare(strict_types=1);
if( !isset($log_file) ) {
  $log_file = 'daten/data_%s.log';
}
/**
 * _log function for writing results or error messages
 * The function starts a new file every day and the name contains the current date.
 * Each line will contain date, level and message text
 *
 * @param string $mess The message to write
 * @param int $level the level that is reported
 * @return void
 */

const none=0;
const fatal=1;
const err=2;
const warning=3;
const info=4;
const debug=5;
const trace=6;
const all=7;

const level=7;

const errorMessage = ['off', 'fatal', 'error', 'warning', 'info', 'debug', 'trace', ''];

function _log( string $mess, int $level = info ): void{
  if( $level>level )
    return;

  $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,1)[0];

  global $log_file_handle;
  global $log_file;
  if( !$log_file_handle ) {
    $log_file_handle = fopen( sprintf($log_file, date("Ymd")), 'a' );
  }
  fprintf( $log_file_handle, "%s#%d:%s;%s;%s\r"
  , $trace['file']
  , $trace['line']
  , (new \DateTime)-> format("Y-m-d H:i:s.u")
  , errorMessage[$level]
  , $mess );
}

_log('connect',4);
$db = new \PDO("mysql:dbname=m307", 'root', '',
  [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC]);