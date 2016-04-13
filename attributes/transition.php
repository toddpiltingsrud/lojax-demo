<?php include "../nocache.php"; ?>
<div jx-panel="right">

    <h3>jx-transition</h3>

    <p>
        Specify the way lojax injects new content.
    </p>

    <p>Supported transitions:</p>

    <ul>
        <li>append-node - Appends the new node at the bottom of the target, leaving existing content alone.</li> 
        <li>prepend-node - Prepends the new node to the top of the target, leaving existing content alone.</li> 
        <li>empty-append-node - Clears existing content and appends the new node.</li> 
        <li>empty-append-children - Clears existing content and appends the new node's children.</li> 
        <li>fade-in - Just like empty-append-children, but with a fade-in.</li>
        <li>replace - Completely replace the old node with the new node.</li> 
    </ul>

    <p>Transitions can be specified on the source, the target or both. 
    If there's a transition specified on the target, it overrides the transition specified on the source.</p>

    <p>
        You can create your own custom transitions. A transition is just a function that takes two arguments: oldNode and newNode.
    </p>

    <p>
        Here's a function that applies a flip animation to the incoming content:
    </p>

    <div class="border" jx-src="attributes/flipverticaljs.html" style="height: 400px;overflow-y: scroll;overflow-x: hidden;">
    </div>

    <script>
        lojax.Transitions['flip-vertical'] =
            function (oldPanel, newPanel) {
                var $o = $(oldPanel),
                    $n = $(newPanel);
                var parent = $o.parent().addClass('flip-vertical').css('position', 'relative');
                $o.addClass('front');
                $n.addClass('back').css('width', $o.width()).appendTo(parent);
                setTimeout(function () {
                    parent.addClass('flip');
                }, 100);
                setTimeout(function () {
                    $o.remove();
                    parent.removeClass('flip').removeClass('flip-vertical');
                    $n.removeClass('back').css('width', '');
                }, 1000);
                return $n;
            };
    </script>

    <style type="text/css">
        .front,
        .back {
          -moz-backface-visibility: hidden;
          -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
        }
        .back {
          position: absolute;
          top: 10px;
        }
        .flip-vertical .back {
          -webkit-transform: rotateX(-180deg);
          -moz-transform: rotateX(-180deg);
          -o-transform: rotateX(-180deg);
          -ms-transform: rotateX(-180deg);
          transform: rotateX(-180deg);
        }
        .flip-vertical.flip .front {
          -webkit-transform: rotateX(180deg);
          -moz-transform: rotateX(180deg);
          -o-transform: rotateX(180deg);
          -ms-transform: rotateX(180deg);
          transform: rotateX(180deg);
          -moz-transition: 0.6s;
          -o-transition: 0.6s;
          -webkit-transition: 0.6s;
          transition: 0.6s;
        }
        .flip-vertical.flip .back {
          -webkit-transform: rotateX(0deg);
          -moz-transform: rotateX(0deg);
          -o-transform: rotateX(0deg);
          -ms-transform: rotateX(0deg);
          transform: rotateX(0deg);
          -moz-transition: 0.6s;
          -o-transition: 0.6s;
          -webkit-transition: 0.6s;
          transition: 0.6s;
        }
    </style>
    
</div>