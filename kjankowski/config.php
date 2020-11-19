<?php 
$dbServer = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'kjankowski';
$conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_errno()) {
    echo 'Nie udało połączyć się z bazą danych...';
}
?>