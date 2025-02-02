<?php
function db_connect($db){
	$dblink = new mysqli("localhost", "snicosia", "Ch8.B8RXBtD6vWKQ", $db);
	return $dblink;
}

function redirect (  $uri   )
{ ?>
	<script type="text/javascript">
	document.location.href="<?php echo $uri; ?>";
	</script>
<?php die;
}
?>