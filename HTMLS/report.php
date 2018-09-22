<html>
<head>
<meta charset="UTF-8">
 <title> Alienek által vaó elrablás jelentése </title>
</head>
<body>
 <h2> Az Alienek által vaó elrablás jelentése</h2>
<?php
 $name=$_POST["firstname"]." ".$_POST['lastname'];
 $email =$_POST["email"];
 $whenithappened=$_POST["whenithappened"];
 $howlong =$_POST["howlong"];
 $howmany =$_POST["howmany"];
 $aliendescription=$_POST["aliendescription"];
 $whattheydid =$_POST["whattheydid"];
 $fangspotted =$_POST["fangspotted"];
 $other=$_POST["other"];
 
 echo 'Kösz hogy kitöltötted a jelentést! :). <br />';
 echo 'téged legutóbb: '. $whenithappened ." -ben/ban raboltak el ".$howlong." órára.". '<br />';
 echo $howmany." alient láttál.".'<br />';
 echo "Írd le õket: ".$aliendescription.'<br />';
 echo "Az alienek ezt csinálták:".$whattheydid."<br />";
 echo "ott volt fang ? ".$fangspotted.'<br />';
 echo "Bármi egyéb amit velem szeretnél tudatni:".$other."<br />";
 echo "email címed: ".$email."<br />";
?>

</body>
</html>