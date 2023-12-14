<h2>Edit Admin</h2>

<form action="<?php echo URL; ?>/admin/update" method="post">
    <input type="hidden" name="id_admin" value="<?php echo $data['row']['id_admin']; ?>">
    <table>
    <tr>
            <td>ID</td>
            <td><input type="text" name="nama"  value="<?php echo $data['row']['id_admin']; ?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama"  value="<?php echo $data['row']['nama']; ?>"></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" value="<?php echo $data['row']['email']; ?>" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" value="<?php echo $data['row']['alamat']; ?>" required></td>
        </tr>
        <tr>
            <td>NO_TELP</td>
            <td><input type="number" name="no_telp" value="<?php echo $data['row']['no_telp']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>