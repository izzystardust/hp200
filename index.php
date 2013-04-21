<!DOCTYPE html>
<html>
    <head>
        <title>Battle to the Supreme Court</title>
       	<meta charset="UTF-8">
        <meta name="apple-mobile-web-app-capable" content="yes"> <!-- Full Screen --></meta>
       	
        <link href='css/style.css' rel='stylesheet' />
        <link href='css/overlay.css' rel='stylesheet' />
        <link href='css/home.css' rel='stylesheet' />
        <link href='css/boilerplate.css' rel='stylesheet' />
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
        
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer' rel='stylesheet' type='text/css'>

    </head>
    
    <body>
        
        <?php include './header.php'; ?>
        
        <div id="splash">
            <img src="img/foreverwild.jpg" />
            <p>During the mid 1900s, controversy arose over proposed damming of forest land in the Adirondacks. These dams would have provided clean energy, but at a cost.</p>
            <p>You've got to ask - what could be so wrong with a renewable energy that environmentalists oppose it?</p>
            <a class="button" href="exhibit.php">Find out inside</a>
        </div>
        <div id="columns">
            
            <div class="column" id="where">
                <h3>The Area</h3>
                <ul>
                    <li><a rel="#mooseriverplains">Moose River Plains</a>
                    <li><a rel="#watertown">Watertown</a></li>
                    <li><a rel="#forest">Forest Preserve</a><li>
                </ul>
            </div>
            
            <div class="column" id="who">
                <h3>The People</h3>
                <ul>
                    <li><a rel="#dewey">Governor Thomas Dewey</a></li>
                    <li><a rel="#apperson">John S. Apperson</a></li>
                    <li><a rel="#schaefer">Paul Schaefer</a></li>
                </ul>
            </div>
            
            <div class="column" id="laws">
                <h3>The Adirondack Museum</h3>
                <ul>
                    <li><a href="http://www.adkmuseum.org/">Museum Homepage</a></li>
                    <li><a href="#">Interactive Map</a></li>
                </ul>
            </div>
        </div>
        
        <?php include './footer.php'; ?>
        <?php include './details.php'; ?>
        
    </body>
    
</html>
