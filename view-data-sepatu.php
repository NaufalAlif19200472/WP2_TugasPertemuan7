<html> 
    <head>

        <title>Tampil Data Toko Sepatu</title> 
    </head> 
    <body>
    <center> 
        <table> 
            <tr> <th colspan="3"> Tampilan Toko Sepatu </th> </tr> 
            <tr> <td colspan="3"> <hr> </td> </tr> 
            <tr> <td>Nama Pembeli</th> <th>:</th> <td> <?= $nama; ?> </td> </tr> 
            <tr> <td>NO HP</th> <td>:</td> <td> <?= $no; ?> </td> </tr> 
			<tr> <td>MERK</th> <td>:</td> <td> <?= $merk; ?> </td> </tr> 
            <tr> <td>UKURAN</th> <td>:</td> <td> <?= $ukuran; ?> </td> </tr> 
            <tr> <td colspan="3" align="center"> 
                    <a href="<?= base_url('sepatu'); ?>">Kembali</a> </td>


            </tr> 
        </table> 
    </center> 
</body> 
</html>