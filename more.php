<!DOCTYPE html>
<html>
    <head>
        <title>Battle to the Supreme Court</title>
       	<meta charset="UTF-8">
        <meta name="apple-mobile-web-app-capable" content="yes"> <!-- Full Screen --></meta>
       	
        <link href='css/style.css' rel='stylesheet' />
        <link href='css/overlay.css' rel='stylesheet' />
        <link href='css/home.css' rel='stylesheet' />
        <link rel="stylesheet" type="text/css" href="css/more.css" />
        <link href='css/boilerplate.css' rel='stylesheet' />
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
        
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer' rel='stylesheet' type='text/css'>

    </head>
    
    <body>
        
        <?php include './header.php'; ?>

        <div id="columns">
            <h2>Learn More</h2>
            <div class="column" id="where">
                <h3>People</h3>
                <ul>
                    <li><a rel="#apperson">John S. Apperson</a></li>
                    <li><a rel="#dewey">Governor Thomas Dewey</a></li>
                    <li><a rel="#mooserivercommittee">The Moose River Committee</a></li>
                    <li><a rel="#schaefer">Paul Schaefer</a></li>
                    <li><a rel="#wildernesssociety">The Wilderness Society</a></li>
                </ul>
            </div>
            
            <div class="column" id="who">
                <h3>Places</h3>
                <ul>
                    <li><a rel="#forest">The Forest Preserve</a></li>
                    <li><a rel="#mooseriverplains">The Moose River Plains</a></li>
                    <li><a rel="#watertown">Watertown</a></li>
                </ul>
            </div>
            
            <div class="column" id="laws">
                <h3>Laws</h3>
                <ul>
                    <li><a rel="#burd">The Burd Ammendment</a></li>
                    <li><a rel="#foreverwild">Forever Wild</a></li>
                    <li><a rel="#stokes">The Stokes Act</a></li>
                </ul>
            </div>
        </div>

        <?php include './footer.php'; ?>
        <?php include './details.php'; ?>
        
    </body>
    
</html>
