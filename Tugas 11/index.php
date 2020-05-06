<style>
table
{
  border-collapse: collapse;
  width: 600px;
}
td
{
  padding: 10px 20px 10px 20px;
}
h1{
  text-align: center;
}
    select
    {
        padding: 10px 20px 10px 20px;
        margin: 10px;
        font-size: 18px;
        display: inline-block;
    }
    option 
    {
        padding: 5px 5px 5px 5px;
        font-size: 20px;
    }
    #ab
    {
        font-size: 20px;
        display: inline-block;
    }
.kotak{
  background-color: #CCCCFF;
}
</style>
<script src="jquery.js"></script>
<script>
    $(document).ready(function()
                     {
        $("#fetchval").on('change',function()
                         {
            var keyword = $(this).val();
            $.ajax(
            {
                url:'fetch.php',
                type:'POST',
                data:'request='+keyword,
                
                beforeSend:function()
                {
                    $("#table-container").html('Working...');
                    
                },
                success:function(data)
                {
                    $("#table-container").html(data);
                },
            });
        });
    }); 
</script>
<div class="kotak">
<h1>Data Mahasiswa dan Dosen</h1>
<div id="ab">Kategori:</div><select id="fetchval" name="fetchby" >
    <option value="1st">Dosen</option>
    <option value="2nd">Mahasiswa</option>
</select>
<br>
<br>
<div id="table-container">
<?php
  $conn = mysqli_connect('localhost','root','','simak');
  $query="select * from mahasiswa";
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
  $query="select * from dosen";
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
</div>
</div>