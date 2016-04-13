<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lojax-demo</title>
    <script src="scripts/jquery-2.2.0.min.js"></script>
    <script src="scripts/lojax.js"></script>
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/bootstrap-theme.min.css" rel="stylesheet">
    <link href="styles/Site.css" rel="stylesheet">
    <link href="styles/shCore.css" rel="stylesheet">
    <link href="styles/shCoreDefault.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" style="display:inline-block;margin-left: 10px;" onclick="$('.nav-container').toggleClass('collapse')">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">lojax</a>
        </div>
    </div>

    <?php include('menu.php')?>

    <div class="container body-content" jx-panel="body-content">
        <div class="row fill" id="main">

            <div class="col-md-12 fill">
                <div class="panel-background">
                    <div class="pre-scrollable fill" jx-panel="right"></div>
                </div>
            </div>

        </div>

    </div>

    <footer class="footer">
        <?php include('progress.html') ?>
    </footer>

    <div id="background"></div>

    <script>
        $(function () {
            lojax.emptyHashAction = 'home.php';

            var requestCount = 0;

            $(document).on("beforeRequest", function () {
                requestCount++;
                $('.footer').addClass('show');
                $('.progress').fadeIn();
            });

            $(document).on("afterRequest", function () {
                requestCount--;
                if (requestCount <= 0) {
                    requestCount == 0;
                    $('.progress').fadeOut();
                    $('.footer').removeClass('show');
                }
            });
        });
    </script>

    <script src="scripts/bootstrap.min.js"></script>
</body>
</html>
