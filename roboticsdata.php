<html>  
  
<head>  
    <title>Techniche 17</title>  
</head>  
  
<body>  
<a href="exportroboticsdata.php"> Download</a>
    <table border="1">  
        <tr>
            <th>id</th>
            <th>participant_id</th>  	   
            <th>event</th>  
            <th width="120">teamname</th>  
            <th>collegename</th> 
            <th>teamleader</th> 
            <th>contact1</th> 
            <th>email1</th>  
            <th>postaladdress1</th> 
            <th>teammember2</th> 
            <th>contact2</th> 
            <th>email2</th>  
            <th>postaladdress2</th> 
            <th>teammember3</th> 
            <th>contact3</th> 
            <th>email3</th>  
            <th>postaladdress3</th> 
            <th>teammember4</th> 
            <th>contact4</th> 
            <th>email4</th>  
            <th>postaladdress4</th>   
        </tr>  
        <?php  
$conn = new mysqli('localhost', 'technoappusers', 'Technoapp@123');   
mysqli_select_db($conn, 'mydata');   
  
$sql = mysqli_query($conn,"SELECT `id`,`participant_id`,`event`,`teamname`,`collegename`, `teamleader`,`contact1`,`email1`,`address1`,`member2`,`contact2`,`email2`,`address2`,`member3`,`contact3`,`email3`,`address3`,`member4`,`contact4`,`email4`,`address4` FROM `competitions`")  or die("Selection Error " . mysqli_error($connection));  
  
  
while($data = mysqli_fetch_row($sql)){  
echo '  
<tr>  
<td>'.$data[0].'</td>  
<td>'.$data[1].'</td>  
<td>'.$data[2].'</td>
<td>'.$data[3].'</td>
<td>'.$data[4].'</td>
<td>'.$data[5].'</td> 
<td>'.$data[6].'</td>  
<td>'.$data[7].'</td>  
<td>'.$data[8].'</td>
<td>'.$data[9].'</td>
<td>'.$data[10].'</td>
<td>'.$data[11].'</td> 
<td>'.$data[12].'</td>  
<td>'.$data[13].'</td>  
<td>'.$data[14].'</td>
<td>'.$data[15].'</td>
<td>'.$data[16].'</td>
<td>'.$data[17].'</td> 
<td>'.$data[18].'</td>   
<td>'.$data[19].'</td>   
<td>'.$data[20].'</td>   
</tr>  
';  
}  
?>  
    </table>  </body>  
  
</html>  