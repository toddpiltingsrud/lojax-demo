﻿<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>lojax.bind(selector, model);</h3>

    <p>
        Bind an element to a model.
    </p>

    <p>
        lojax binds models to input elements by matching the "name" attribute with the property path.
        Complex paths are supported.
    </p>

    <p>
        lojax monitors the change event to write changes back to the model.
    </p>

    <div id="highlighter_376072" class="syntaxhighlighter  javascript"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="javascript plain">lojax.bind(</code><code class="javascript string">'#the-div-below'</code><code class="javascript plain">, { </code></div><div class="line number2 index1 alt1"><code class="javascript spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="javascript string">"number"</code><code class="javascript plain">: </code><code class="javascript string">"5"</code><code class="javascript plain">, </code></div><div class="line number3 index2 alt2"><code class="javascript spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="javascript string">"daterange"</code><code class="javascript plain">: [</code><code class="javascript string">"2015-01-01"</code><code class="javascript plain">, </code><code class="javascript string">"2015-12-31"</code><code class="javascript plain">], </code></div><div class="line number4 index3 alt1"><code class="javascript spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="javascript string">"arrays"</code><code class="javascript plain">: { </code><code class="javascript string">"names"</code><code class="javascript plain">: [</code><code class="javascript string">"Todd"</code><code class="javascript plain">, </code><code class="javascript string">"Kit"</code><code class="javascript plain">] }, </code></div><div class="line number5 index4 alt2"><code class="javascript spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="javascript string">"select"</code><code class="javascript plain">: </code><code class="javascript string">"b"</code><code class="javascript plain">, </code></div><div class="line number6 index5 alt1"><code class="javascript spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="javascript string">"color"</code><code class="javascript plain">: </code><code class="javascript string">"red"</code></div><div class="line number7 index6 alt2"><code class="javascript plain">});</code></div></div></td></tr></tbody></table></div>
    
    <div id="the-div-below" class="border" style="width: 330px;display: inline-block;vertical-align: top">
        <div class="form-group">
            <label for="number">Number</label>
            <input class="form-control" type="number" name="number" value="5" />
        </div>
        <div class="form-group">
            <label for="daterange[0]">Date Range</label>
            <input class="form-control" type="date" name="daterange[0]" value="2015-01-01" />
            <input class="form-control" type="date" name="daterange[1]" value="2015-12-31" />
        </div>
        <div class="form-group">
            <label for="select">Select</label>
            <select name="select" class="form-control">
                <option value="a">A</option>
                <option value="b" selected="selected">B</option>
                <option value="c">C</option>
            </select>
        </div>
        <div class="form-group four">
            <label for="arrays.names">
                <input class="form-control" type="checkbox" name="arrays.names" value="Todd" checked="checked" />
                <span>Todd</span>
            </label>
            <label for="arrays.names">
                <input class="form-control" type="checkbox" name="arrays.names" value="Kit" checked="checked" />
                Kit
            </label>
            <label for="arrays.names">
                <input class="form-control" type="checkbox" name="arrays.names" value="Anders" />
                Anders
            </label>
            <label for="arrays.names">
                <input class="form-control" type="checkbox" name="arrays.names" value="Kaleb" />
                Kaleb
            </label>
        </div>
        <div class="form-group four">
            <label>
                <input class="form-control" type="radio" name="color" value="red" checked="checked" />
                Red
            </label>
            <label>
                <input class="form-control" type="radio" name="color" value="green" />
                Green
            </label>
            <label>
                <input class="form-control" type="radio" name="color" value="blue" />
                Blue
            </label>
            <label>
                <input class="form-control" type="radio" name="color" value="cyan" />
                Cyan
            </label>
        </div>
    </div>

    <div id="json" class="border" style="width: 50%;display: inline-block;vertical-align: top;margin-left: 20px;font-family: monospace">
    </div>
    
    <script>
        lojax.bind('#the-div-below', {
            "number": 5,
            "daterange": ["2015-01-01", "2015-12-31"],
            "arrays": { "names": ["Todd", "Kit"] },
            "select": "b",
            "color": "red"
        });

        $(document).on('change', '#the-div-below', function () {
            var model = $(this).data('model');
            $('#json').html(JSON.stringify(model).split(',').join(', '));
        });

//        lojax.off(function () {
  //          $(document).off('change', '#the-div-below');
    //    });
    </script>

</div>