<?php
  
  $conn = mysqli_connect('localhost','root','','simak');
  $request=$_POST['request'];
  $query="select * from mahasiswa where kategori='$request'";
  $output=mysqli_query($conn,$query);
echo '<table border="1"';
    echo '<tr>
      <th>ID</th>
      <th>NIM/NIP</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>E-mail</th>
      <th>Fakultas</th>
      <th>Kategori</th>
    </tr>';
  while($fetch = mysqli_fetch_assoc($output))
  {
    
      echo '<tr>';
      echo '<td>'.$fetch['id_mhs'].'</td>';
      echo '<td>'.$fetch['nim'].'</td>';
      echo '<td>'.$fetch['nama'].'</td>';
      echo '<td>'.$fetch['jeniskelamin'].'</td>';
      echo '<td>'.$fetch['email'].'</td>';
      echo '<td>'.$fetch['fakultas'].'</td>';
      echo '<td>'.$fetch['kategori'].'</td>';
      echo '</tr>';
  };
  $query="select * from dosen where kategori='$request'";
  $output=mysqli_query($conn,$query);
  while($fetch = mysqli_fetch_assoc($output))
  {
    
      echo '<tr>';
      echo '<td>'.$fetch['id_dosen'].'</td>';
      echo '<td>'.$fetch['nip'].'</td>';
      echo '<td>'.$fetch['nama'].'</td>';
      echo '<td>'.$fetch['jeniskelamin'].'</td>';
      echo '<td>'.$fetch['email'].'</td>';
      echo '<td>'.$fetch['fakultas'].'</td>';
      echo '<td>'.$fetch['kategori'].'</td>';
      echo '</tr>';
  };
echo '</table>';
 ?>