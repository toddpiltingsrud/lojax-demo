<?php
#checkaddress.php
include_once('../nocache.php');
require_once('../lib/BootstrapModal.php');
# trick to execute 1st time, but not 2nd so you don't have an inf loop
if (!isset($TPL)) {

    $TPL = new BootstrapModal();

    ob_start();
    include "checkaddress.php";
    $form = ob_get_contents();
    ob_end_clean();

    $TPL->Header = "Check Address";
    $TPL->Body = $form;
    require "../layouts/BootstrapModal.php";
    exit;
}
?>
<div jx-panel="form">
    <table class="table">
        <tbody><tr><th>Name</th><td>Todd Piltingsrud</td></tr><tr><th>Address</th><td>123 Any Street</td></tr><tr><th>City</th><td>Minneapolis</td></tr><tr><th>State</th><td>MN</td></tr><tr><th>Zip</th><td>12345</td></tr>    </tbody>
    </table>
</div>