<?php
	print_r($y->ajax);
	if(count($y->ajax) == 0) return;
	echo('<script type="text/javascript" src="./js/miniajax.min.js"></script><script type="text/javascript">window.addEventListener(\'load\', function(){');
	foreach($y->ajax as $ajax){
		if($ajax['type'] == 'get'){
			echo("ajax.update(\"{$ajax['source']}\", \"{$ajax['id']}\");");
		}
	}
	echo('}, false);</script>');