<?php  
//php script to export mysql database in xls/csv format  
$conn = new mysqli('localhost', 'technoappusers', 'Technoapp@123');  
mysqli_select_db($conn, 'mydata');  
  
$setSql = "SELECT `id`,`participant_id`,`event`,`teamname`,`collegename`, `teamleader`,`contact1`,`email1`,`address1`,`member2`,`contact2`,`email2`,`address2`,`member3`,`contact3`,`email3`,`address3`,`member4`,`contact4`,`email4`,`address4` FROM `competitions`";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "id" . "\t" . "participant_id" . "\t" . "event" . "\t" . "teamname" . "\t" . "collegename" . "\t" . "teamleader" . "\t" . "contact1" . "\t" . "email1" . "\t" . "address1" . "\t" . "member2" . "\t" . "contact2" . "\t" . "email2" . "\t" . "address2" . "\t" . "member3" . "\t" . "contact3" . "\t" . "email3" . "\t" . "address3" . "\t" . "member4" . "\t" . "contact4" . "\t" . "email4" . "\t" . "address4" . "\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=robotics_data.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  

