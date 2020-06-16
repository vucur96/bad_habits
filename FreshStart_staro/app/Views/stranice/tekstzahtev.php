<head>
        <meta charset="UTF-8">
        <title>Tekst zahtev</title>  
 </head>

 <body>
     
    <div align="center">
       <?php echo "<form name='form_requests' method='POST' action='prihvatiiliOdbiBlog/{$blog->BlogID}'>
            <table border='0px' cellpadding='1px' style='width:70%;text-align:center;'>
                <tr><td colspan='2' align='center'><font size='5'> $blog->naslov</font></td></tr> 
		<tr><td colspan='2' align='center'>$blog->tekst</td> </tr>
                <tr> <td width='50%'> <input type='submit' class='btn btn-cta' name='prihvati' value=' Prihvati '></td><td width='50%'><input type='submit' class='btn btn-primary' name='odbij' value=' Odbij '></td></tr>";
            echo "</table></form>";
       ?>
    </div>
 </body>
 
 