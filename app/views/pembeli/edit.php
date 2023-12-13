<h2>Edit Pembeli</h2>

<form action="<?php echo URL; ?>/pembeli/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['pembeli_id']; ?>">
    <table>
        <tr>
            <td>NAMA USER</td>
            <td><input type="text" name="nama_user" value="<?php echo $data['row']['pembeli_nama_user']; ?>" required></td>
        </tr>
        <tr>
        <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['pembeli_email']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['pembeli_alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="integer" name="no_hp" value="<?php echo $data['row']['pembeli_no_hp']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>