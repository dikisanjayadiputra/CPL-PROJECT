<?php
include "koneksi.php";

$val = $_GET["value"];

$val_K = mysql_real_escape_string($val);

$sql = "SELECT servis, kota_tujuan FROM tb_publicrate WHERE servis='$val_K'";
$result = mysql_query($sql);

if(mysql_num_rows($result)>0){

    echo "<select>";

    while ($rows=mysql_fetch_assoc($result)){
        echo "<option>".$rows["kota_tujuan"]."</option>";
    }
    echo "</select>";
} else{
    echo"<select>
            <option>Select One</option>
    </select>"
}

?>