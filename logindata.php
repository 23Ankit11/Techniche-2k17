<html>  
  
<head>  
    <title>Techniche 17</title>  
</head>  
  
<body>  
<a href="exportlogindata.php"> Download</a>
    <table border="1">  
        <tr>  
            <th>id</th>  
            <th width="120">Name</th>  
            <th>email</th> 
            <th>phone</th> 
            <th>institute</th> 
            <th>isActive</th>   
        </tr>  
        <?php  
$conn = new mysqli('localhost', 'technoappusers', 'Technoapp@123');   
mysqli_select_db($conn, 'mydata');   
  
$sql = mysqli_query($conn,"SELECT `id`,`name`,`email`,`phone`,`institute`,`isActive` FROM `participants`");  
  
  
while($data = mysqli_fetch_row($sql)){  
echo '  
<tr>  
<td>'.$data[0].'</td>  
<td>'.$data[1].'</td>  
<td>'.$data[2].'</td>
<td>'.$data[3].'</td>
<td>'.$data[4].'</td>
<td>'.$data[5].'</td>  
</tr>  
';  
}  
?>  
    </table>  </body>  
  
</html>  