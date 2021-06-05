<html>
   <head>
      <title>Rental Mobil Amanah</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>Rental Mobil Amanah Terpercaya</h1></center>
      <h3>Tabel Pelanggan</h3>
      <table>
         <thead>
            <tr>
               <th>ID Pelnggan</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No HP</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_pelanggan'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
               <td><?php echo $row['no_hp'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Mobil</h3>
      <table>
         <thead>
            <tr>
               <th>ID Mobil</th>
               <th>No Plat</th>
               <th>Jenis</th>
               <th>Merek</th>
               <th>Tahun</th>
               <th>Warna</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM mobil';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
               <td><?php echo $row[4] ?></td>
               <td><?php echo $row[5] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

      <h3>Tabel Sewa</h3>
      <table>
         <thead>
            <tr>
               <th>ID Sewa</th>
               <th>Petugas</th>
               <th>Pelanggan</th>
               <th>Mobil</th>
               <th>Tanggal Pinjam</th>
               <th>Tanggal Kembali</th>
               <th>Total Bayar</th>
            </tr>
         </thead>
         <?php
            $sql = "SELECT * FROM sewa
            INNER JOIN petugas ON sewa.id_petugas = petugas.id_petugas
            INNER JOIN pelanggan ON sewa.id_pelanggan = pelanggan.id_pelanggan
            INNER JOIN mobil ON sewa.id_mobil = mobil.id_mobil";
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_sewa'] ?></td>
               <td><?php echo $row['nama_petugas'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['merk'] ?></td>
               <td><?php echo $row['tgl_pinjam'] ?></td>
               <td><?php echo $row['tgl_kembali'] ?></td>
               <td><?php echo $row['total_bayar'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
    
   </body>
</html>