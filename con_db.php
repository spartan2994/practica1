<?php
	$link = @mysql_connect("mysql.webcindario.com","bogoduba","GeNeSiS2");
	if ($link){
		@mysql_select_db("bogoduba",$link);
	}
?>