<h2>Edit Produk</h2>

<form action="<?php echo URL; ?>/produks/update" method="post">
    <input type="hidden" name="id_produk" value="<?php echo $data['row']['id_produk']; ?>">
    <table>
        <tr>
            <td>NAMA PRODUK</td>
            <td><input type="text" name="nama_produk" value="<?php echo $data['row']['nama_produk']; ?>" required></td>
        </tr>
        <tr>
            <td>DESKRIPSI</td>
            <td><input type="text" name="deskripsi_produk" value="<?php echo $data['row']['deskripsi_produk']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="number" name="harga_produk" value="<?php echo $data['row']['harga_produk']; ?>" required></td>
        </tr>
        <tr>
            <td>KATEGORI</td>
            <td><input type="text" name="kategori_produk" value="<?php echo $data['row']['kategori_produk']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>