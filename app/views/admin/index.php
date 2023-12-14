<h2>Admin</h2>

<a href="<?php echo URL; ?>/admin/input" class="btn">Input Admin</a>

<table>
      <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>NO_TELP</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['no_telp']; ?></td>
                  <td><a href="<?php echo URL; ?>/admin/edit/<?php echo $row['id_admin']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/admin/delete/<?php echo $row['id_admin']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>