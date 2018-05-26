<?php
 session_start();
 include('dbcon.php');
 $con = conectar(); 
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php
}
$session_id=$_SESSION['id'];
$query= mysqli_query(conectar(),"select * from users where user_id = '$session_id'")or die(mysql_error());
	$row = mysqli_fetch_array($query);
	$user_username = $row['username'];
?>