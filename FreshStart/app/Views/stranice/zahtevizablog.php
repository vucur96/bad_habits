<html>
<head>
        <meta charset="UTF-8">
        <title>Zahtevi za blog</title>  
</head>
<body>
    
    
    <div id="menu">
        <div align="center">

            <form name='form_requests'  action="<?php echo site_url("Admin/blogPrihvatiOdbi") ?>"  method="POST">

                <table>
                    <tr><th>Naslov</th> 
                    <?php
                    foreach ($zahteviBlog as $zahtevblog) {
                        echo "<tr><td>".anchor("Admin/textzahtev/{$zahtevblog->BlogID}", "$zahtevblog->naslov")."</td></tr>";
                    }
                    ?>
                </table>
            </form>
        </div>
    </div>
    
</body>
</html>
                 