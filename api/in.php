<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>lojax.in(callback);</h3>

    <p>
        Call this from a script located inside a jx-panel, jx-src or modal.
        When injected, lojax executes the callback with the context set to the containing node.
        lojax supplies the request object as a parameter to the callback.
    </p>

    <div id="highlighter_167582" class="syntaxhighlighter  html"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="html plain">lojax.in (function (request) {</code></div><div class="line number2 index1 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">$(this).append('&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"well"</code><code class="html plain">&gt;"this" is the containing panel.&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;');</code></div><div class="line number3 index2 alt2"><code class="html plain">});</code></div></div></td></tr></tbody></table></div>

    <script>
        lojax. in (function (request) {
            $(this).append('<div class="well">"this" is the containing panel.</div>');
        });
    </script>

</div>