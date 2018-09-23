<html>
    <head>
        <meta charset="UTF-32">
        <title> Alienek �ltal va� elrabl�s jelent�se </title>
    </head>
    <body>
        <h2> Az Alienek �ltal va� elrabl�s jelent�se</h2>
        <?php
         $first_name=$_POST["firstname"];
         $last_name=$_POST['lastname'];
         $email =$_POST["email"];
         $whenithappened=$_POST["whenithappened"];
         $howlong =$_POST["howlong"];
         $howmany =$_POST["howmany"];
         $aliendescription=$_POST["aliendescription"];
         $whattheydid =$_POST["whattheydid"];
         $fangspotted =$_POST["fangspotted"];
         $other=$_POST["other"];
         
         $to ="patrikmayor@gmail.com";
         $subject="Fang Report";
         $msg = "$first_name $last_name elrabolt�k $whenithappened -ben/ban �s $howmany ideig volt t�vol.\n".
             "Alienek sz�ma: $howmany \n".
             "Alienek le�r�sa: $aliendescription".
             "Mit csin�ltak: $whattheydid \n".
             "L�tt�k fangot ? $fangspotted \n".
             "Egy�bb comment: $other .";
         $dbc =mysqli_connect('localhost','root','','aliendatabase')
               or die('Error connection to MySQL server.');
               //haha comment
         //mail($to,$subject,$msg, 'From: '.$email);
         $query ="insert into alien_abduction (first_name, las_name,when_it_happened,how_long,".
         " how_many,alien_description,what_they_did, fang_spotted,other,email)".
         "values ('$first_name','$last_name','$whenithappened', '$howlong', '$howmany', '$aliendescription',".
         " '$whattheydid','$fangspotted','$other','$email')";
         
        $result =mysqli_query($dbc,$query)
            or die('Error querring database.');
        //
            mysqli_close($dbc);
         
         echo 'K�sz hogy kit�lt�tted a jelent�st! :). <br />';
         echo 't�ged legut�bb: '. $whenithappened ." -ben/ban raboltak el ".$howlong." �r�ra.". '<br />';
         echo $howmany." alient l�tt�l.".'<br />';
         echo "�rd le �ket: ".$aliendescription.'<br />';
         echo "Az alienek ezt csin�lt�k:".$whattheydid."<br />";
         echo "ott volt fang ? ".$fangspotted.'<br />';
         echo "B�rmi egy�b amit velem szeretn�l tudatni:".$other."<br />";
         echo "email c�med: ".$email."<br />";         
        ?>        
    </body>
</html>