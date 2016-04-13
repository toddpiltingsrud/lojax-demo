<div jx-panel="right">

    <script>
        lojax.logging = true;
    </script>

    <h3>jx-model</h3>

    <p>
        Use this to bind elements to a JSON model. lojax handles the change event on the bound elements to write changes back to the model.  
        Use the ajax methods to transmit the JSON to a server.
        If you use jx-method="post" with jx-model, the model will be converted to a form and submitted.
        If you use jx-method="get" with jx-model, the model will be converted to a form, serialized and appended to the url.
    </p>

    <p>
        If jx-model is blank, lojax will use the input elements to create a model before binding.
    </p>

    <p>
        Multiple elements can be bound to the same model. (See <a href="#api/bind.php" data-method="ajax-get">lojax.bind</a>)
        In this case, lojax uses the change event to propagate changes between the elements.
    </p>

    <div class="two-column">
        <div jx-model class="border">
            <div class="form-group">
                <label for="number">Number</label>
                <input class="form-control" type="number" name="number" value="5" />
            </div>
            <div class="form-group">
                <label for="daterange[0]">Date Range</label>
                <input class="form-control" type="date" name="daterange[0]" value="2015-01-01" />
                <input class="form-control" type="date" name="daterange[1]" value="2015-12-31" />
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
            <div class="form-group">
                <label for="select">Select</label>
                <select name="select">
                    <option value="a">A</option>
                    <option value="b" selected="selected">B</option>
                    <option value="c">C</option>
                </select>
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
        <div class="border" style="margin-left:20px;">
            <table class="table" jx-model>
                <tr>
                    <th>Number</th>
                    <td name="number"></td>
                </tr>
                <tr>
                    <th>Date Range Start</th>
                    <td name="daterange[0]"></td>
                </tr>
                <tr>
                    <th>Date Range End</th>
                    <td name="daterange[1]"></td>
                </tr>
                <tr>
                    <th>Names</th>
                    <td name="arrays.names"></td>
                </tr>
                <tr>
                    <th>Select</th>
                    <td name="select"></td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td name="color"></td>
                </tr>
            </table>
        </div>

    </div>

    <script>
        lojax.in( function ( request ) {
            var model = $( this ).find( 'div[jx-model]' ).data( 'model' );
            lojax.bind( $( this ).find( "table[jx-model]" ), model );
        } );
    </script>
    
</div>

<meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
<meta http-equiv="pragma" content="no-cache" />