<?php

include 'conexion.php';

$selectData = $db->query("SELECT * FROM users WHERE status=1");

?>

<style>
    table {
        margin: 100px auto;
        width: 50%;
    }
    table td, table th {
        padding: 10px;
        border: 1px solid black;
    }
</style>

<table>
    <tr>
        <th colspan="4">Usuarios</th>
    </tr>
<?php
while( $user = $selectData->fetch_array() ) {
?>
<tr>
    <th>Nombre</th>
    <td><?=$user["name"]?></td>
    <th>Correo</th>
    <td><?=$user["email"]?></td>
</tr>
<?php
}
?>
</table>