﻿<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>jx-trigger</h3>

    <p>                    
        Specify 'change', 'enter' or both to trigger a request when an input element changes and/or when the enter key is pressed.
        Here are a couple scenarios:
    </p>

    <hr />

    <h4>A single element</h4>

    <input type="text"
            name="search"
            class="form-control"
            placeholder="Search for..."
            jx-action="attributes/search.php"
            jx-method="ajax-post"
            jx-trigger="change enter" />

    <div jx-panel="search-results" class="well" style="width:280px;margin-top:20px;vertical-align:top;display:inline-block;">
    </div>

    <p>
        Ordinarily this scenario would require either a form to do a full post, or some JavaScript event handlers to make an AJAX call.
        But lojax can to do it declaratively.
    </p>

    <div id="highlighter_827585" class="syntaxhighlighter  html"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"text"</code></div><div class="line number2 index1 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">name</code><code class="html plain">=</code><code class="html string">"search"</code></div><div class="line number3 index2 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code></div><div class="line number4 index3 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">placeholder</code><code class="html plain">=</code><code class="html string">"Search for..."</code></div><div class="line number5 index4 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-action</code><code class="html plain">=</code><code class="html string">"attributes/search.php"</code></div><div class="line number6 index5 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-method</code><code class="html plain">=</code><code class="html string">"ajax-post"</code></div><div class="line number7 index6 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-trigger</code><code class="html plain">=</code><code class="html string">"change enter"</code> <code class="html plain">/&gt;</code></div></div></td></tr></tbody></table></div>

    <hr />

    <h4>A form</h4>

    <div style="white-space:nowrap;">
        <div class="border" style="margin-bottom:20px;display:inline-block;width:30%;">
            <form action="attributes/formtable.php" jx-method="ajax-post" jx-trigger="change enter">
                <div class="form-group">
                    <label for="number">Number</label>
                    <input type="number" name="number" value="5" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="letter">Letter</label>
                    <select name="letter" class="form-control" placeholder="Select...">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="boolean">Boolean </label>
                    <input type="checkbox" name="boolean" value="true" checked="checked" class="form-control" />
                </div>
            </form>
        </div>

        <div class="well" jx-panel="form" style="margin-left:20px;display:inline-block;width:70%;max-width:280px;vertical-align:top">Try changing the values on the form.</div>

    </div>

    <p>
        Here the jx-trigger attribute is attached to the form. So lojax assumes we want to post the entire form.
    </p>

    <p>Notice that the jx-action attribute is not required since the form already has one.
    We've also substitued the form's usual 'method' attribute with lojax's 'jx-method'. 
    This is mandatory for lojax to handle it.
        Plus, now we can use any of lojax's other methods (get, post, ajax-get, ajax-put, ajax-delete, jsonp).
    But jsonp requires some additional code to intercept the response.
    </p>

    <div id="highlighter_80791" class="syntaxhighlighter  html"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div><div class="line number13 index12 alt2">13</div><div class="line number14 index13 alt1">14</div><div class="line number15 index14 alt2">15</div><div class="line number16 index15 alt1">16</div><div class="line number17 index16 alt2">17</div><div class="line number18 index17 alt1">18</div><div class="line number19 index18 alt2">19</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="html plain">&lt;</code><code class="html keyword">form</code> <code class="html color1">action</code><code class="html plain">=</code><code class="html string">"attributes/formtable.php"</code> <code class="html color1">jx-method</code><code class="html plain">=</code><code class="html string">"ajax-post"</code> <code class="html color1">jx-trigger</code><code class="html plain">=</code><code class="html string">"change enter"</code><code class="html plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"number"</code><code class="html plain">&gt;Number&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"number"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"number"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"5"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html plain">/&gt;</code></div><div class="line number5 index4 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number6 index5 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number7 index6 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"letter"</code><code class="html plain">&gt;Letter&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number8 index7 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">select</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"letter"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">placeholder</code><code class="html plain">=</code><code class="html string">"Select..."</code><code class="html plain">&gt;</code></div><div class="line number9 index8 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">option</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"A"</code><code class="html plain">&gt;A&lt;/</code><code class="html keyword">option</code><code class="html plain">&gt;</code></div><div class="line number10 index9 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">option</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"B"</code><code class="html plain">&gt;B&lt;/</code><code class="html keyword">option</code><code class="html plain">&gt;</code></div><div class="line number11 index10 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">option</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"C"</code><code class="html plain">&gt;C&lt;/</code><code class="html keyword">option</code><code class="html plain">&gt;</code></div><div class="line number12 index11 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">select</code><code class="html plain">&gt;</code></div><div class="line number13 index12 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number14 index13 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number15 index14 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"boolean"</code><code class="html plain">&gt;Boolean &lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number16 index15 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"checkbox"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"boolean"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"true"</code> <code class="html color1">checked</code><code class="html plain">=</code><code class="html string">"checked"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html plain">/&gt;</code></div><div class="line number17 index16 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"hidden"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"boolean"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"false"</code> <code class="html plain">/&gt;</code></div><div class="line number18 index17 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number19 index18 alt2"><code class="html plain">&lt;/</code><code class="html keyword">form</code><code class="html plain">&gt;</code></div></div></td></tr></tbody></table></div>
    
</div>