<?php
include("koneksi.php");

$id = array();
$arr = array();
$arr2 = array();
$trimmed1 = array();
$trimmed2 = array();
$q = mysql_query('SELECT nspn,lat,longi from universitas');
while($r=mysql_fetch_array($q))
{
$id[] = $r['nspn'];
$arr[] = $r['lat'];
$arr2[] = $r['longi'];
}

for ($i = 0; $i < count($id); $i++) {

    $trimmed1[$i] = $arr[$i];
	$trimmed2[$i] = $arr2[$i];

echo $trimmed1[$i];
echo ' , ';
echo $trimmed2[$i];
echo ' , ';
echo $id[$i];
echo '<br>';
$query = "update universitas set lat='$trimmed1[$i]',longi='$trimmed2[$i]' where nspn='$id[$i]'";
//echo $query;
//mysql_query($query);
echo '<br>';
    }
?>