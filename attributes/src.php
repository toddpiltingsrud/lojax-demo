﻿<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>jx-src</h3>

    <p>
        Specify a URL to load content into an element after the page loads.
        lojax also queries for new jx-src attributes every time it injects something into the page.
    </p>

    <p>
        The full complement of attributes is available with jx-src.
        For example, you could set jx-transition to "append", jx-method to "ajax-post", and jx-form to "#someForm".
        This would post a form with an id of "someForm" via AJAX and append the result to the bottom of the container.
    </p>

    <div jx-src="attributes/src2.php" class="border">
        <img src="images/spinner.gif" style="display:block;margin:0 auto" />
    </div>
    
</div>