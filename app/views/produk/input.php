<h2>Input Produk</h2>

<form action="<?php echo URL; ?>/produks/save" method="post">
    <table>
        <tr>
            <td>NAMA PRODUK</td>
            <td><input type="text" name="nama_produk" required></td>
        </tr>
        <tr>
            <td>DESKRIPSI</td>
            <td><input type="text" name="deskripsi_produk" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="number" name="harga_produk" required></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" name="kategori_produk" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>