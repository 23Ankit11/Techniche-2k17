<?php  
//php script to export mysql database in xls/csv format  
$conn = new mysqli('localhost', 'technoappusers', 'Technoapp@123');  
mysqli_select_db($conn, 'mydata');  
  
$setSql = "SELECT `id`,`name`,`email`, `phone`,`institute`,`isActive` FROM `participants`";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = "id" . "\t" . "name" . "\t" . "email" . "\t" . "phone" . "\t" . "institute" . "\t" . "isActive" . "\t";  
  
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
header("Content-Disposition: attachment; filename=login_data.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  