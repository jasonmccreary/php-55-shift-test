<?php
datefmt_set_timezone_id('stuff');

unpack('stuff', 'data');
set_error_handler('unpack');
set_error_handler(null);
set_exception_handler('strtolower');
set_exception_handler(null);

ereg_replace('stuff', 'here', 'there');

ini_set('magic_quotes_gpc', 5);

$obj->setTimeZoneID();

mcrypt_cbc('cipher', 'key', 'data', MCRYPT_ENCRYPT);
mcrypt_cfb('cipher', 'key', 'data', MCRYPT_ENCRYPT);
mcrypt_ecb('cipher', 'key', 'data', MCRYPT_ENCRYPT);
mcrypt_ofb('cipher', 'key', 'data', MCRYPT_ENCRYPT);