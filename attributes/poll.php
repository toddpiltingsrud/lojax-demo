<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>jx-poll</h3>

    <p>
        Use this attribute in conjunction with jx-src to specify a polling interval (in seconds) to repeat the request.
        lojax uses the setTimeout function to set up another call after the previous one succeeds.
        That way requests won't be executed before previous requests are completed.
    </p>
    <p>
        lojax checks the document to make sure the target still exists before triggering another request.
        So polling won't just continue indefinitely after the user navigates away from the page.
    </p>

    <div class="well" jx-src="CurrentTime.php" jx-poll="2"></div>

    <div class="syntaxhighlighter  html" id="highlighter_537571"><div class="toolbar"><span><a class="toolbar_item command_help help" href="#">?</a></span></div><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"well"</code> <code class="html color1">jx-src</code><code class="html plain">=</code><code class="html string">"/currenttime.php"</code> <code class="html color1">jx-poll</code><code class="html plain">=</code><code class="html string">"2"</code><code class="html plain">&gt;&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div></div></td></tr></tbody></table></div>

</div>