<h2>Input Admin</h2>

<form action="<?php echo URL; ?>/admin/save" method="post">
    <table>
    <tr>
            <td>ID</td>
            <td><input type="id" name="id" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="alamat" required></td>
        </tr>
        <tr>
            <td>NO_TELP</td>
            <td><input type="number" name="no_telp" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>