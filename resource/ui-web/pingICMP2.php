<?php
putenv("nodeNUM=2");
echo shell_exec('/usr/local/bin/ui-pingICMP $nodeNUM');
die();
?>
