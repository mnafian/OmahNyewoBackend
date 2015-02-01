<?php
include("connectdb.php");
header('Content-Type: application/json');

$posLat=0;
$posLong=0;
$tipe="";
	if(isset($_GET['type']) && isset($_GET['lat']) && isset($_GET['long'])){
		$tipe = $_GET['type'];
		$posLat = $_GET['lat'];
		$posLong = $_GET['long'];
	}
$return_arr = array();

$query_list = 'SELECT omh_nama,omh_harga,omh_cat,omh_key,omh_lokasi,omh_desc,omh_posLat,omh_posLong,omh_user,omh_telp,omh_bbm,omh_image,omh_garasi,omh_kamar,omh_dapur,omh_internet,omh_telepon,omh_jemuran,omh_km_dalam,omh_km_luar,  
(3959 * ACOS( COS( RADIANS( "'.$posLat.'") ) * COS( RADIANS( `omh_posLat` ) ) * COS( RADIANS( `omh_posLong` ) - RADIANS( "'.$posLong.'" ) ) + SIN( RADIANS( "'.$posLat.'") ) * SIN( RADIANS( `omh_posLat` ) ) ) )
 AS distance FROM omahnyewo a, omh_fasilitas b WHERE a.omh_id=b.omh_id HAVING distance < 10 ORDER BY distance LIMIT 0 , 10';
 
 
$query_detail = 'SELECT omh_nama,omh_harga,omh_cat,omh_key,omh_lokasi,omh_desc,omh_posLat,omh_posLong,omh_user,omh_telp,omh_bbm,omh_image,omh_garasi,omh_kamar,omh_dapur,omh_internet,omh_telepon,omh_jemuran,omh_km_dalam,omh_km_luar, 
(3959 * ACOS( COS( RADIANS( "'.$posLat.'") ) * COS( RADIANS( `omh_posLat` ) ) * COS( RADIANS( `omh_posLong` ) - RADIANS( "'.$posLong.'" ) ) + SIN( RADIANS( "'.$posLat.'") ) * SIN( RADIANS( `omh_posLat` ) ) ) )
 AS distance FROM omahnyewo a, omh_fasilitas b WHERE a.omh_id=b.omh_id and omh_cat="'.$tipe.'" HAVING distance < 10 ORDER BY distance LIMIT 0 , 10';
$kueri;
if ($tipe==""){
	$kueri = $query_list;
}else{
	$kueri = $query_detail;
}
$fetch = mysql_query($kueri);

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    $row_array['nama'] = $row['omh_nama'];
	 $row_array['harga'] = $row['omh_harga'];
    $row_array['cat'] = $row['omh_cat'];     
	$row_array['key'] = $row['omh_key'];
    $row_array['lokasi'] = $row['omh_lokasi'];
    $row_array['deskripsi'] = $row['omh_desc'];
    $row_array['lat'] = $row['omh_posLat'];
    $row_array['long'] = $row['omh_posLong'];
	$row_array['user'] = $row['omh_user'];
	$row_array['telp'] = $row['omh_telp'];
	$row_array['bbm'] = $row['omh_bbm'];
    $row_array['gambar'] = $row['omh_image'];
	$row_array['garasi'] = $row['omh_garasi'];
	$row_array['kamar'] = $row['omh_kamar'];
	$row_array['dapur'] = $row['omh_dapur'];
	$row_array['internet'] = $row['omh_internet'];
	$row_array['telepon'] = $row['omh_telepon'];
	$row_array['jemuran'] = $row['omh_jemuran'];
	$row_array['km_dalam'] = $row['omh_km_dalam'];
	$row_array['km_luar'] = $row['omh_km_luar'];
	$row_array['distance'] = $row['distance'];
	
    array_push($return_arr,$row_array);
}

echo json_encode($return_arr);
	
?>