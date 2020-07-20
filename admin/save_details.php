<html>
	<body>
		Saving Details . . . . 
	</body>
<?php
	$servername = "sql290.main-hosting.eu";
	$username = "u117204720_clients";
	$password = "|Yt]Z?iH*Eh9";
	$dbname = "u117204720_clients";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$keys = ["address", "contact_map_placeID", "feature_heading1", "feature_heading2", "feature_heading3", "feature_heading4", "feature_heading5", "feature_heading6", "feature_text1", "feature_text2", "feature_text3", "feature_text4", "feature_text5", "feature_text6", "features_heading", "index_heading1", "index_heading2", "index_subheading1", "index_subheading2", "phone1", "phone2", "phone3", "summary_heading", "summary_pheading1", "summary_pheading2", "summary_pheading3", "summary_psubheading1", "summary_psubheading2", "summary_psubheading3", "summary_ptext1", "summary_ptext2", "summary_ptext3", "summary_subheading", "title", "footer_heading"];
	foreach( $keys as $key ) {
		$data="";
		if ($_POST["".$key]!=""){
			$data = mysqli_real_escape_string($conn, $_POST["".$key]);	
		}
		$sql = "UPDATE `vrajlogistics` SET `text`='$data' WHERE `name`='$key';";
		$conn->query($sql);
	}
	echo "<script>window.location.replace('index.php');</script>";
?>
</html>