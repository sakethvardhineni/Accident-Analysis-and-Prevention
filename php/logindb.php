[shost="localhost";
Susername="root";
§password="lokkesh";
Sob_name="ssndb";
Stbl_name="login";
Sconn = mysql_connect("Shost", "username", "Spassword")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
Smyusername=$_POST[ 'usr'];
Smypassword=$_POST['pwd'];
Smyusername = stripslashes(Smyusername);
$mypassword = stripslashes (Smypassword);
Smyusername = mysql_real_escape_string($myusername);
Smypassword = mysql_real_escape_string($mypassword);
Ssql="update Stbl_name set passwd='$mypassword' WHERE name= 'Smyusername'";
Sresult=mysql_query($sql, $conn);
Scount=mysql_num_rows(Sresult);
?>
