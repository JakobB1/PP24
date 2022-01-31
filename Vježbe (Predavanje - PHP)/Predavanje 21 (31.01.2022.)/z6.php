<?php
require_once 'KlasaFunkcije.php';
// koristeći html elemente table, thead, tbody, tr, th, td ispišite sve vrijednosti iz 
// predefiniranog niza $_SERVER organizirano u dvije kolone koristeći foreach petlju

KlasaFunkcije::logiranje($_SERVER);

?>
<table>
    <thead>
        <tr>
            <th>Ključ</th>
            <th>Vrijednost</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($_SERVER as $k=>$v): ?>
            <tr>
                <td><?php echo $k;?></td>
                <td><?php echo $v;?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
