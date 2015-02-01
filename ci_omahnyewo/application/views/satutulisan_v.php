
<html>  
<head>  
    <title>Portal Artikel Berita</title>  
</head>  
<body>  
<h1>Portal Artikel Berita</h1>  
<hr>  
<?php   
if (!isset($satutulisan['isi'])){  
    echo "Halaman tidak ditemukan";  
}else{?>  
        <h3><a href="<?=base_url()?>tulisan_c/tulisan_page/<?=$satutulisan['id_tulisan']?>"><?=$satutulisan['judul']?></a></h3>  
        <p><?=$satutulisan['isi']?></p>  
        <?php  
}?>  
</body>  
</html> 