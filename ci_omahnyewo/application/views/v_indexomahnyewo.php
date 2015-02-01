
<body>
<div class="container" style="min-height: 360px;">
		<div class="row">
            <div class="col-xs-6 col-md-6">
<h2> Kategori Kontrakan </h2>
<hr>
<?php

if (!isset($kontrakan)){
	echo "Tidak Ada Berita";
}else{
	foreach($kontrakan as $row){
	?>
	<div class="thumbnail">
	<div class="thumbnail">
	<img src="http://cdn.omahnyewo.com/res/<?=$row['omh_image']?>">
	</div>
	<a href="<?=base_url()?>c_home_control/tulisan_page/<?=$row['omh_id']?>"><h3><?=$row['omh_nama']?></h3></a>
	<table class="table table-striped">
    <thead>
        <tr>
            <th>Harga</th>
            <th>Telepon / BBM</th>
			 <th>Alamat</th>
    </thead>
	<?php
	    echo '<tbody>';
        echo '<td>Rp. ' . $row['omh_harga'] . ' /Tahun</td>';
        echo '<td>' . $row['omh_telp'] . ' / ' . $row['omh_bbm'] . '</td>';
		echo '<td>' . $row['omh_lokasi'] . '</td>';
        echo '</tbody>';
	?>
	</table>
	<p><b>Pengiklan </b> : <?=$row['omh_user']?></p>
	<p><b>Deskripsi </b>: <?=substr($row['omh_desc'], 0,100)?></p>
	
	<a href="<?=base_url()?>c_home_control/edit_tulisan/<?=$row['omh_id']?>">  
                <span style=“color:gray”>Edit</span>  
            </a>

    <a href="<?=base_url()?>c_home_control/hapus_tulisan/<?=$row['omh_id']?>">  
                    <span style="color:gray">Delete</span>  
                </a>
				</div>
				<br>
	<?php
	}
}?>
</div>

<div class="col-xs-6 col-md-6">
<h2> Kategori Kost </h2>
<hr>
<?php

if (!isset($kost)){
	echo "Tidak Ada Berita";
}else{
	foreach($kost as $row){
	?>
	<div class="thumbnail">
	
	<div class="thumbnail">
	<img src="http://cdn.omahnyewo.com/res/<?=$row['omh_image']?>">
	</div>
	
	<a href="<?=base_url()?>c_home_control/tulisan_page/<?=$row['omh_id']?>"><h3><?=$row['omh_nama']?></h3></a>
	<table class="table table-striped">
    <thead>
        <tr>
            <th>Harga</th>
            <th>Telepon / BBM</th>
			 <th>Alamat</th>
    </thead>
	<?php
	    echo '<tbody>';
        echo '<td>Rp. ' . $row['omh_harga'] . ' /Bulan</td>';
        echo '<td>' . $row['omh_telp'] . ' / ' . $row['omh_bbm'] . '</td>';
		echo '<td>' . $row['omh_lokasi'] . '</td>';
        echo '</tbody>';
	?>
	</table>
	<p><b>Pengiklan </b> : <?=$row['omh_user']?></p>
	<p><b>Deskripsi </b>: <?=substr($row['omh_desc'], 0,100)?></p>
	
	<a href="<?=base_url()?>c_home_control/edit_tulisan/<?=$row['omh_id']?>">  
                <span style=“color:gray”>Edit</span>  
            </a>

    <a href="<?=base_url()?>c_home_control/hapus_tulisan/<?=$row['omh_id']?>">  
                    <span style="color:gray">Delete</span>  
                </a>
				</div>
				<br>
	<?php
	}
}?>
</div>

</div>

</div>
</body>
</html>