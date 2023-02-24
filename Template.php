<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="Stylesheet" type="text/css" href="Style/Style_Sheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Ultra Sonic Sensor</a></li>
                    <li><a href="#">Camera</a></li>
                    <li><a href="#">Battery</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>輪機系天下第一系</p>
            </footer>
        </div>
    </body>
</html>
