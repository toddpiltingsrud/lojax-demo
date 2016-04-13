<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>lojax.emptyHashAction = request;</h3>

    <p>
        Configure what happens when a browser nav button is clicked
        which changes window.location.hash to an empty string.
        This can be a url, a config object for creating a new request,
        or a function which returns a url or config object.
    </p>

    <div class="syntaxhighlighter  js" id="highlighter_901144"><div class="toolbar"><span><a class="toolbar_item command_help help" href="#">?</a></span></div><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="js plain">$(</code><code class="js keyword">function</code> <code class="js plain">() {</code></div><div class="line number2 index1 alt1"><code class="js spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="js plain">lojax.emptyHashAction = </code><code class="js string">'home.php'</code><code class="js plain">;</code></div><div class="line number3 index2 alt2"><code class="js plain">});</code></div></div></td></tr></tbody></table></div>

</div>