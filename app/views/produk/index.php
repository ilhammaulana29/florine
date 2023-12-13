<h2>Produks</h2>

<a href="<?php echo URL; ?>/produks/input" class="btn">Input User</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>DESKRIPSI</th>
            <th>HARGA</th>
            <th>KATEGORI</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_produk']; ?></td>
                  <td><?php echo $row['deskripsi_produk']; ?></td>
                  <td><?php echo $row['harga_produk']; ?></td>
                  <td><?php echo $row['kategori_produk']; ?></td>
                  <td><a href="<?php echo URL; ?>/produks/edit/<?php echo $row['id_produk']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/produks/delete/<?php echo $row['id_produk']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>