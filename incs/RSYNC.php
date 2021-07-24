<?php declare(strict_types=1);

$FOLDER = '/var/www/this-is-a-test-to-see-if-it-works.tk/public_html/codingforum/JD-Responsive-2-column-webpage/';

echo $tmp = <<< ____EOT
<h5>
	rsync -avz $FOLDER &nbsp;&nbsp; -e ssh root@178.18.246.168:$FOLDER 
</h5>
____EOT;

# echo getcwd();