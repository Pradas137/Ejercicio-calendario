<!DOCTYPE HTML>
<html>
  <head>
    <?php 
    $matriz=  array();
    foreach (range(0,8) as $row) {
    foreach (range(0,8) as $col) {
    $matriz[$row][$col] = "";
 }
}


print_r($matriz);

    ?>
    <title>SUDOKU Adrian</title>
  </head>
  <body>
    <table border="9">
      <?php foreach (range(0,8) as $row) { ?>
        <tr>
          <?php foreach (range(0,8) as $col) { ?>
            <td>
              <?php echo $row.$col; ?></td>
              <?php  } ?>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>