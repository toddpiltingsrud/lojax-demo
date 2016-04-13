﻿<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>jx-form</h3>

    <p>
        jx-form is a jQuery selector used to specify a collection of input elements to include with a request.
        Any queryable combination of inputs can be sent along with a request.
        You can also point it at a top-level element containing form elements (form, div, anything).
        In that case lojax will include all the input elements inside it.
    </p>

    <p>Here's an example:</p>

    <div class="border">
        <form style="white-space:nowrap">
            <div style="width:50%;display:inline-block;vertical-align:top">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="Name" class="form-control" value="Todd Piltingsrud" />
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="Address" class="form-control" value="123 Any Street" />
                </div>
                <div class="form-group">
                    <label for="name">City</label>
                    <input type="text" name="City" class="form-control" value="Minneapolis" />
                </div>
                <div class="form-group">
                    <label for="name">State</label>
                    <input type="text" name="State" class="form-control" value="MN" />
                </div>
                <div class="form-group">
                    <label for="name">Zip</label>
                    <input type="text" name="Zip" class="form-control" value="12345" />
                </div>
            </div>
            <div style="width:50%;display:inline-block;vertical-align:top">
                <div class="form-group">
                    <label for="name">Package Weight</label>
                    <input type="number" name="Weight" class="form-control" value="5" />
                </div>
                <div class="form-group">
                    <label for="name">Shipping Speed</label>
                    <select name="ShippingSpeed" class="form-control">
                        <option>Ground</option>
                        <option>Second Day Air</option>
                        <option>Overnight</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Sunday Delivery</label>
                    <input type="checkbox" name="SundayDelivery" class="form-control" value="true" />
                    <input type="hidden" name="SundayDelivery" value="false" />
                </div>
                <div class="form-group">
                    <label for="name">Signature Required</label>
                    <input type="checkbox" name="SignatureRequired" class="form-control" />
                    <input type="hidden" name="SignatureRequired" value="false" />
                </div>
            </div>
        </form>

        <div style="text-align:right">
            <button type="button" 
                    class="btn btn-default" 
                    jx-action="attributes/checkaddress.php"
                    jx-method="ajax-post" 
                    jx-form="form > div:first-child">Check Address</button>
            <button type="button" 
                    class="btn btn-primary" 
                    jx-action="attributes/shippinglabel.php"
                    jx-method="ajax-post" 
                    jx-form="form">Shipping Label</button>
        </div>
    </div>

    <p>This form essentially has two submit buttons. 
    But the "Check Address" button only needs to submit the left half of the form.
    It also points to a different endpoint than the "Shipping Label" button.
    </p>
    <p>
    We've basically ignored the form and placed all the relevant information on the buttons,
    including the jx-form selectors that target the left half and the entire form, respectively.
    </p>

    <div id="highlighter_192849" class="syntaxhighlighter  html"><div class="toolbar"><span><a href="#" class="toolbar_item command_help help">?</a></span></div><table border="0" cellpadding="0" cellspacing="0"><tbody><tr><td class="gutter"><div class="line number1 index0 alt2">1</div><div class="line number2 index1 alt1">2</div><div class="line number3 index2 alt2">3</div><div class="line number4 index3 alt1">4</div><div class="line number5 index4 alt2">5</div><div class="line number6 index5 alt1">6</div><div class="line number7 index6 alt2">7</div><div class="line number8 index7 alt1">8</div><div class="line number9 index8 alt2">9</div><div class="line number10 index9 alt1">10</div><div class="line number11 index10 alt2">11</div><div class="line number12 index11 alt1">12</div><div class="line number13 index12 alt2">13</div><div class="line number14 index13 alt1">14</div><div class="line number15 index14 alt2">15</div><div class="line number16 index15 alt1">16</div><div class="line number17 index16 alt2">17</div><div class="line number18 index17 alt1">18</div><div class="line number19 index18 alt2">19</div><div class="line number20 index19 alt1">20</div><div class="line number21 index20 alt2">21</div><div class="line number22 index21 alt1">22</div><div class="line number23 index22 alt2">23</div><div class="line number24 index23 alt1">24</div><div class="line number25 index24 alt2">25</div><div class="line number26 index25 alt1">26</div><div class="line number27 index26 alt2">27</div><div class="line number28 index27 alt1">28</div><div class="line number29 index28 alt2">29</div><div class="line number30 index29 alt1">30</div><div class="line number31 index30 alt2">31</div><div class="line number32 index31 alt1">32</div><div class="line number33 index32 alt2">33</div><div class="line number34 index33 alt1">34</div><div class="line number35 index34 alt2">35</div><div class="line number36 index35 alt1">36</div><div class="line number37 index36 alt2">37</div><div class="line number38 index37 alt1">38</div><div class="line number39 index38 alt2">39</div><div class="line number40 index39 alt1">40</div><div class="line number41 index40 alt2">41</div><div class="line number42 index41 alt1">42</div><div class="line number43 index42 alt2">43</div><div class="line number44 index43 alt1">44</div><div class="line number45 index44 alt2">45</div><div class="line number46 index45 alt1">46</div><div class="line number47 index46 alt2">47</div><div class="line number48 index47 alt1">48</div><div class="line number49 index48 alt2">49</div><div class="line number50 index49 alt1">50</div><div class="line number51 index50 alt2">51</div><div class="line number52 index51 alt1">52</div><div class="line number53 index52 alt2">53</div><div class="line number54 index53 alt1">54</div><div class="line number55 index54 alt2">55</div><div class="line number56 index55 alt1">56</div><div class="line number57 index56 alt2">57</div><div class="line number58 index57 alt1">58</div><div class="line number59 index58 alt2">59</div><div class="line number60 index59 alt1">60</div><div class="line number61 index60 alt2">61</div><div class="line number62 index61 alt1">62</div><div class="line number63 index62 alt2">63</div></td><td class="code"><div class="container"><div class="line number1 index0 alt2"><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"border"</code><code class="html plain">&gt;</code></div><div class="line number2 index1 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">form</code> <code class="html color1">style</code><code class="html plain">=</code><code class="html string">"white-space:nowrap"</code><code class="html plain">&gt;</code></div><div class="line number3 index2 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">style</code><code class="html plain">=</code><code class="html string">"width:50%;display:inline-block;vertical-align:top"</code><code class="html plain">&gt;</code></div><div class="line number4 index3 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number5 index4 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;Name&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number6 index5 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"text"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"Name"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"Todd Piltingsrud"</code> <code class="html plain">/&gt;</code></div><div class="line number7 index6 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number8 index7 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number9 index8 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;Address&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number10 index9 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"text"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"Address"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"123 Any Street"</code> <code class="html plain">/&gt;</code></div><div class="line number11 index10 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number12 index11 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number13 index12 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;City&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number14 index13 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"text"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"City"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"Minneapolis"</code> <code class="html plain">/&gt;</code></div><div class="line number15 index14 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number16 index15 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number17 index16 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;State&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number18 index17 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"text"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"State"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"MN"</code> <code class="html plain">/&gt;</code></div><div class="line number19 index18 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number20 index19 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number21 index20 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;Zip&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number22 index21 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"text"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"Zip"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"12345"</code> <code class="html plain">/&gt;</code></div><div class="line number23 index22 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number24 index23 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number25 index24 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">style</code><code class="html plain">=</code><code class="html string">"width:50%;display:inline-block;vertical-align:top"</code><code class="html plain">&gt;</code></div><div class="line number26 index25 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number27 index26 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;Package Weight&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number28 index27 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"number"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"Weight"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"5"</code> <code class="html plain">/&gt;</code></div><div class="line number29 index28 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number30 index29 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number31 index30 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;Shipping Speed&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number32 index31 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">select</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"ShippingSpeed"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code><code class="html plain">&gt;</code></div><div class="line number33 index32 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">option</code><code class="html plain">&gt;Ground&lt;/</code><code class="html keyword">option</code><code class="html plain">&gt;</code></div><div class="line number34 index33 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">option</code><code class="html plain">&gt;Second Day Air&lt;/</code><code class="html keyword">option</code><code class="html plain">&gt;</code></div><div class="line number35 index34 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">option</code><code class="html plain">&gt;Overnight&lt;/</code><code class="html keyword">option</code><code class="html plain">&gt;</code></div><div class="line number36 index35 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">select</code><code class="html plain">&gt;</code></div><div class="line number37 index36 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number38 index37 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number39 index38 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;Sunday Delivery&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number40 index39 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"checkbox"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"SundayDelivery"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"true"</code> <code class="html plain">/&gt;</code></div><div class="line number41 index40 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"hidden"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"SundayDelivery"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"false"</code> <code class="html plain">/&gt;</code></div><div class="line number42 index41 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number43 index42 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-group"</code><code class="html plain">&gt;</code></div><div class="line number44 index43 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">label</code> <code class="html color1">for</code><code class="html plain">=</code><code class="html string">"name"</code><code class="html plain">&gt;Signature Required&lt;/</code><code class="html keyword">label</code><code class="html plain">&gt;</code></div><div class="line number45 index44 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"checkbox"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"SignatureRequired"</code> <code class="html color1">class</code><code class="html plain">=</code><code class="html string">"form-control"</code> <code class="html plain">/&gt;</code></div><div class="line number46 index45 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">input</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"hidden"</code> <code class="html color1">name</code><code class="html plain">=</code><code class="html string">"SignatureRequired"</code> <code class="html color1">value</code><code class="html plain">=</code><code class="html string">"false"</code> <code class="html plain">/&gt;</code></div><div class="line number47 index46 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number48 index47 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number49 index48 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">form</code><code class="html plain">&gt;</code></div><div class="line number50 index49 alt1">&nbsp;</div><div class="line number51 index50 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">div</code> <code class="html color1">style</code><code class="html plain">=</code><code class="html string">"text-align:right"</code><code class="html plain">&gt;</code></div><div class="line number52 index51 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">button</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"button"</code></div><div class="line number53 index52 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">class</code><code class="html plain">=</code><code class="html string">"btn btn-default"</code></div><div class="line number54 index53 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-action</code><code class="html plain">=</code><code class="html string">"/Home/CheckAddress"</code></div><div class="line number55 index54 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-method</code><code class="html plain">=</code><code class="html string">"ajax-post"</code></div><div class="line number56 index55 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">jx-form="form &gt; div:first-child"&gt;Check Address&lt;/</code><code class="html keyword">button</code><code class="html plain">&gt;</code></div><div class="line number57 index56 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;</code><code class="html keyword">button</code> <code class="html color1">type</code><code class="html plain">=</code><code class="html string">"button"</code></div><div class="line number58 index57 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">class</code><code class="html plain">=</code><code class="html string">"btn btn-primary"</code></div><div class="line number59 index58 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-action</code><code class="html plain">=</code><code class="html string">"/Home/ShippingLabel"</code></div><div class="line number60 index59 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-method</code><code class="html plain">=</code><code class="html string">"ajax-post"</code></div><div class="line number61 index60 alt2"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html color1">jx-form</code><code class="html plain">=</code><code class="html string">"form"</code><code class="html plain">&gt;Shipping Label&lt;/</code><code class="html keyword">button</code><code class="html plain">&gt;</code></div><div class="line number62 index61 alt1"><code class="html spaces">&nbsp;&nbsp;&nbsp;&nbsp;</code><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div><div class="line number63 index62 alt2"><code class="html plain">&lt;/</code><code class="html keyword">div</code><code class="html plain">&gt;</code></div></div></td></tr></tbody></table></div>    
</div>

