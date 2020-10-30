<html>
<head>
    <title>Tes ANJING</title>
</head>
<body>
    <center><h3>Belajar HARUS BISA</h3>
    <form>
        <tr>
        <table border="1">
            <td>Id Pelanggan</td>
            <?php
                include "koneksi.php";
            ?>
            <td><select name="id_pelanggan" id="id_pelanggan" class="form-control" onchange='changeValue(this.value)' required>
            <?php
            $query = mysql_query("select * from tb_customer order by id_pelanggan asc");
            $result = mysql_query("select * from tb_customer");
            $a = "var alamat = new Array();\n";
            $b = "var telp_perusahaan = new Array();\n";
            while($row = mysql_fetch_array($query)){
                echo '<option name="id_pelanggan" value="'.$row['id_pelanggan'].'">'.$row['id_pelanggan'].'</option>';
                $a .= "alamat['".$row['id_pelanggan']."'] = {alamat:'".addslashes($row['alamat'])."'};\n";
                $b .= "telp_perusahaan['".$row['id_pelanggan']."'] = {telp_perusahaan:'".addslashes($row['telp_perusahaan'])."'};\n";
            }
            ?>
            </select></td>
        </tr>
        <tr>
            <td>Nama Perusahaan</td>
            <td><input type="text" name="alamat" id="alamat" readonly></td>
        </tr>

        <tr>
            <td>Telpon Perusahaan</td>
            <td><input type="text" name="telp_perusahaan" id="telp_perusahaan" readonly></td>
        </tr>
        <script type="text/javascript">
            <?php
            echo $a;
            echo $b;
            ?>
            function changeValue(id){
                document.getElementById('alamat').value = alamat[id].alamat;
                document.getElementById('telp_perusahaan').value = telp_perusahaan[id].telp_perusahaan;
            };
    
        </script>
        </table>
    </form>
</body>
</html>