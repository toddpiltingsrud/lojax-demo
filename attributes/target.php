﻿<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>jx-target</h3>

    <p>
        This is a jQuery selector that can be used instead of 
        <a href="#/Attribute/panel" data-method="ajax-get">jx-panel</a>
        to specify a target for a request.
    </p>

    <button type="button" 
            class="btn btn-primary" 
            jx-method="ajax-get" 
            jx-action="attributes/target2.php" 
            jx-target="#theTarget">
        This button specifies the div below as its target
    </button>

    <div id="theTarget" class="border well" style="margin-top:20px;"></div>
    
</div>