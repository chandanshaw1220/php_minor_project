<?php
$CATEGORY_ename = $_POST['uname'];
$distance_ename = $_POST['distance'];
//$coursename=stripclashes($username);
//$coursename=mysql_real_escape_string($username);
$mysqli = mysqli_connect("localhost", "root", "", "travel") or die("Connection Failed");
$que = "select * from table_2 where CATEGORY='$CATEGORY_ename' and DISTANCE='$distance_ename'";
$do = $mysqli->query($que);
$row = $do->fetch_assoc();
?>
<style>
	table {
  border-collapse: collapse;
  width: 100%;
  position: absolute;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;
}
</style>
<table id="Confirms" border ="2" style="length:900px;width:350px;">
    <thead>
        <tr style= "background-color: #A4A4A4;">
            <td style="font-family:Ink Free;">PLACES:</td>
            <td style="font-family:Ink Free;">CATEGORY:</td>
            <td style="font-family:Ink Free;">DISTANCE:</td>
        </tr>
    </thead>
 <tbody>
	<?php
if ($row != NULL) {
	echo
		"<tr>
                 <td>{$row['PLACES']}</td>
                 <td>{$row['CATEGORY']}</td>
                 <td>{$row['DISTANCE']}</td>

                 </tr>\n";
} else {
	echo "Sorry data is unavailable";
}
?>
 </tbody>
</table>