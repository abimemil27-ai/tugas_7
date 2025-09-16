<table border="1">
    <tr>
        <th>NO</th>
        <th>NAMA</th>
    </tr>
    <?php
    $i = 1;
    while ($i <= 1000) {
        echo "
        <tr>
            <td>".$i."</td>
            <td>Abim ".$i."</td>
        </tr>";
        $i++;
    }
    ?>
</table>
