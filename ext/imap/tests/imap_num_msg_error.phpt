--TEST--
imap_num_msg() incorrect parameter count
--CREDITS--
Paul Sohier
#phptestfest utrecht
--SKIPIF--
<?php
require_once(__DIR__.'/skipif.inc');
?>
--FILE--
<?php
echo "Checking with no parameters\n";
imap_num_msg();

echo  "Checking with incorrect parameter type\n";
imap_num_msg('');
imap_num_msg(false);
?>
--EXPECTF--
Checking with no parameters

Warning: imap_num_msg() expects exactly 1 parameter, 0 given in %s on line %d
Checking with incorrect parameter type

Warning: imap_num_msg(): Argument #1 must be of type resource, string given in %s on line %d

Warning: imap_num_msg(): Argument #1 must be of type resource, bool given in %s on line %d
