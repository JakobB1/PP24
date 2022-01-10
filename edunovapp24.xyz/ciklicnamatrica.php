<div class="tabla">
<div class="input-text"> INPUT </div>
    <div class="input">
    
        <form action="" method="POST">
            <div class="txt1">Broj redaka</div>
        <input type="number" class="unos" name="a" value="<?php echo $rows; ?>">
            <div class="txt1">Broj stupaca</div>
        <input type="number" class="unos" name="b" value="<?php echo $columns; ?>">
        <br>
        <input type="submit" class="klik" value="KREIRAJ TABLICU">
        </form>
    </div>

    <div class="output-text"> OUTPUT </div>     
</div>


<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $rows=$_POST['a'];
            $columns=$_POST['b'];

            $maxRow=$rows-1;
            $maxCol=$columns-1;
            $ispis=1;
            $matrica=[];
            $minCol=0;
            $minRow=0;
            while ($ispis <= $rows*$columns) 
            {
                for($j=$maxCol; $j >= $minCol; $j--)
                {
                    $matrica[$maxRow][$j] = $ispis++;
                }
                    $maxRow--;
                    if ($ispis > $rows*$columns) break;

                for ($i=$maxRow; $i >= $minRow ;$i--) 
                { 
                    $matrica[$i][$minCol] = $ispis++;
                }
                    $minCol++;
                    if ($ispis > $rows*$columns) break;

                for ($j=$minCol; $j <= $maxCol; $j++) 
                { 
                    $matrica[$minRow][$j] = $ispis++;
                }
                    $minRow++;
                    if ($ispis > $rows*$columns) break;
                for ($i=$minRow; $i <= $maxRow; $i++) 
                { 
                    $matrica[$i][$maxCol] = $ispis++;
                }
                    $maxCol--;    
            
            }

?>

<table class="tab">
<?php 
        for($i=0;$i<$rows;)
        {
          echo '<tr>';
            for ($j=0; $j < $columns;) 
            { 
              echo '<td>'. $matrica[$i][$j] .'</td>';
              $j++;
            }
            echo '</tr>';
            $i++;
        } 
?>
</table>
           
