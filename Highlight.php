﻿<?php include "nocache.php"; ?>
<script src="/Scripts/shCore.js"></script>
<script src="/Scripts/shBrushXml.js"></script>
<script src="/Scripts/shBrushJScript.js"></script>

<script class="brush: html" type="syntaxhighlighter"><![CDATA[
@if (Request.IsAjaxRequest())
{
    <div jx-panel="main-container">
        @RenderBody()
    </div>
}
else
{
    <!DOCTYPE html>
    <html>
    <head>
        ...
    </head>
    <body>
        <header>
            ...
        </header>

        <div class="container-fluid" jx-panel="main-container">
            @RenderBody()
        </div>

        <footer>
            ...
        </footer>

    </body>
    </html>
}
]]></script>

<script type="text/javascript">
        SyntaxHighlighter.all();
</script>
