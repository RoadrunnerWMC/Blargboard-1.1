<?php

require('config/salt.php');
require('config/kurikey.php');

if (!$salt) die('Nothing to do.');

$saltfile = '<?php define(\'SALT\', '.phpescape($salt).'); ?>';
file_put_contents('config/salt.php', $saltfile);

$kurifile = '<?php define(\'KURIKEY\', '.phpescape($kurikey).'); ?>';
file_put_contents('config/kurikey.php', $kurifile);

function phpescape($var)
{
	$var = addslashes($var);
	$var = str_replace('\\\'', '\'', $var);
	return '"'.$var.'"';
}

?>