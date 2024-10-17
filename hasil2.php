<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <?php 
        $product=$_POST['product'];
        $deskripsi=$_POST['deskrpsi'];
        $harga=$_POST['harga'];
        $no_akun=$_POST['no_akun'];
        $bank=$_POST['bank'];
        $pemilik_akun=$_POST['pemilik_akun'];
        $jumlah=$_POST['jumlah'];
        $tlp=$_POST['tlp'];
        $email1=$_POST['email1'];
        $total=$_POST($harga*$jumlah);
        ?>
        <tr>
            <td>
                <input type="text" name="product" id="" value="<?php echo $product?>">
            </td>
        </tr>
        <tr>
            <td>
                <textarea name="deskripsi" value="<?php echo $deskripsi?>" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="number" name="harga" id=""value="<?php echo $total?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="no_akun" id=""value=<?php echo $no_akun?>>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="bank" value="" value="<?php echo $bank?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="pemilik_akun" value="<?php echo $pemilik_akun?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="total" value="<?php echo $total?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="nomor" id=""value="kirim ke nomor">
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="email" id=""value="kirim ke email">
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="tlp" id="<?php echo $tlp?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="email" name="email1" id="<?php echo $email1?>">
            </td>
        </tr>
    </table>
</body>
</html>