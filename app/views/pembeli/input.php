<h2>Input Pembeli</h2>

<form action="<?php echo URL; ?>/pembeli/save" method="post">
    <table>
    <tr>
            <td>ID</td>
            <td><input type="id" name="id" required></td>
        </tr>
        <tr>
            <td>NAMA USER</td>
            <td><input type="text" name="nama_user" required></td>
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
            <td>NO HP</td>
            <td><input type="integer" name="no_hp" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>