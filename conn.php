
<?php
@session_start();
//start the session

const serverName="sql311.epizy.com";
const password="hvZgW4p2guu7";
const database="epiz_33459705_cbttest_db";
const username="epiz_33459705";
const serverMethod="POST";
$conn=mysqli_connect(serverName,username,password,database);

function parse_inputs($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);

	return $data;
}

$all_images=array("images/change_user.png","images/chat_user2.png","images/contact.png","images/example.png","images/log_out.png","images/search.png","images/settings.gif","images/test.png","images/update_user.png");


?>
