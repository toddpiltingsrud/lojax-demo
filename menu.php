<div class="nav-container">
    <div class="relative-container">
        <ul class="nav navbar-nav">
            <li>
                <a href="home.php" jx-method="ajax-get" class="home-btn">
                    <span class="glyphicon glyphicon-home"></span>Home
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="active"">
                    <span class="glyphicon" style="padding-top: 1px;font-weight: bold">@</span>Attributes
                </a>
                <?php include('attributes/index.php')?>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span class="glyphicon glyphicon-cog"></span>API
                </a>
                <?php include('api/index.php')?>
            </li>
            <li>
                <a href="javascript:void(0);">
                    <span class="glyphicon glyphicon-plus" style="padding-top: 4px;padding-left: 2px;"></span>More
                </a>
                <?php include('more/index.php')?>
            </li>
        </ul>
    </div>
</div>

<script>
    $(function () {
        $('ul.nav > li > a').click(function () {
            $('ul.nav a').removeClass('active');
            $(this).addClass('active');
        });
        $('ul.nav > li > ul a,.home-btn').click(function () {
            $('.nav-container').addClass('collapse');
        });
        $('ul.nav').change(function () {
            $('.nav-container').addClass('collapse');
        });

        setTimeout(function () {
            $('.nav-container').addClass('collapse');
        }, 500);

        if (!lojax.priv.hasHash()) {
            lojax.exec({
                action: 'home.php',
                method: 'ajax-get'
            });
        }
    });
</script>
