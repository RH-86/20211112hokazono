<table border="1">
  <?php for($i = 1; $i <= 9; $i ++){?>
    <tr>
      <?php for($a = 1; $a <= 9; $a ++){
      $j = $i * $a; ?>
      <td>
        <?php echo $j; ?>
      </td>
    <?php } ?>
    </tr>
  <?php } ?>
</table>