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

}else{

    if ($success==1){

        echo "Data berhasil di-update!";

    }else{

        if ($satutulisan['aktif']==1){

            $radio1="checked";

            $radio0="";

        }else{

            $radio0="checked";

            $radio1="";

        }

        ?>

        <h3>Edit Berita</h3>

        <form method="post action="<?=base_url()?>tulisan_c/edit_tulisan/<?=$satutulisan['id_tulisan']?>">

            <input name="judul" type="text" value="<?=$satutulisan['judul']?>" size="100″><br>

            <textarea rows="14″ cols="100″ name="isi"><?=$satutulisan['isi']?></textarea><br>

            <input type="radio" name="aktif" Value="1″ <?=$radio1?>>Aktif<br>

            <input type="radio" name="aktif" Value="0″ <?=$radio0?>>Non-Aktif<br>

            <input type="submit">

        </form>

        <?php

    }

}?>

</body>

</html>