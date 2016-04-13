<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>jx-action</h3>

    <p>You can use the jx-action attribute instead of href:</p>

    <div id="highlighter_171325" class="syntaxhighlighter  html"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="html plain">&lt;</code><code class="html keyword">a</code> <code class="html color1">href</code><code class="html plain">=</code><code class="html string">"#/Home/Attribute/Action"</code> <code class="html color1">data-method</code><code class="html plain">=</code><code class="html string">"ajax-get"</code><code class="html plain">&gt;jx-action&lt;/</code><code class="html keyword">a</code><code class="html plain">&gt;</code></div></div></td></tr></tbody></table></div>

    <p>That means any clickable element can trigger a request.</p>

    <div class="clickable btn btn-primary" jx-method="ajax-get" jx-action="attributes/action2.php">this is a div<br />click me</div>

    <div jx-panel="jx-action2"></div>

</div>
