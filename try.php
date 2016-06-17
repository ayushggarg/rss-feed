    <?php

    $handle = fopen("urllist.txt", "r");
        if ($handle) 
        {
            while (($line = fgets($handle)) !== false) 
            {
                $url = $line;
                
                ?>

                <a href = <? echo $url; ?> > </a> 
                <?
                //echo $url."<br>";
            }

            fclose($handle);
        } 
        else 
        {
            echo "error opening the file";
        } 
    
?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-linkpreview.css">
</head>
<body>
    <div id="preview-container"></div>
    <div class="row-fluid input-append">
        <a href="#" id="linkurl"></a>
    </div>
    <div id="preview-container2"></div>
    
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/proxy-ajax.js"></script>
    <script type="text/javascript" src="js/bootstrap-linkpreview.js"></script>
    <script type="text/javascript" src="js/main.js"></script> 
</body>
</html>
 