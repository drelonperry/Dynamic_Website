<?php
	function db_connect($db)
	{
		$dbusername = "webuser";
		$dbpassword = "YUJNRKs4Yl]wUbb3";
		$host = "localhost";
		$dblink = new mysqli($host, $dbusername, $dbpassword, $db);
		return $dblink;
	}

	function redirect($uri)
	{
?>
		<script type="text/javascript">
			document.location.href="<?php echo $uri; ?>";
		</script>
<?php
		die;
	}
?>