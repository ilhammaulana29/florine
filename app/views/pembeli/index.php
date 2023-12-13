<h2>Pembeli</h2>

<a href="<?php echo URL; ?>/pembeli/input" class="btn">Input User</a>

<table>
      <tr>
            <th>ID</th>
            <th>NAMA USER</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['pembeli_nama_user']; ?></td>
                  <td><?php echo $row['pembeli_email']; ?></td>
                  <td><?php echo $row['pembeli_alamat']; ?></td>
                  <td><?php echo $row['pembeli_no_hp']; ?></td>
                  <td><a href="<?php echo URL; ?>/pembeli/edit/<?php echo $row['pembeli_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pembeli/delete/<?php echo $row['pembeli_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>
