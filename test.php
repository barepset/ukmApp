<?php
echo $_SERVER['REQUEST_URI'].'<br>';

preg_match("#(.*)/app/(.*)$#",$_SERVER['REQUEST_URI'],$match);
echo '<pre>'.print_r($match,true);
/*
    RewriteCond %{REQUEST_URI} bower_components/(.*)$
    RewriteRule (.?)/bower_components/(.?)$ $1/bower_components/$2
	
	*/