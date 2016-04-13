<?php
#FormTable.php
include_once('../nocache.php');
require_once('../lib/BootstrapModal.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {

    $TPL = new BootstrapModal();

    ob_start();
    include "formtable.php";
    $form = ob_get_contents();
    ob_end_clean();

    $TPL->Header = "Form";
    $TPL->Body = $form;
    require "../layouts/BootstrapModal.php";
    exit;
}
?>
<div jx-panel="form">
    <table class="table">
        <?php 
            $ar=$_GET;
            while (list($key,$val) = each($ar))
            {
                echo "<tr>";
                echo "<th>$key</th><td>$val</td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>
