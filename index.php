<html>
<head></head>
<body>
<form action=""method="get">
Enter sentence:<input type="text"name="sen"><br><br>
Enter the word to find:<input type="text"name="fword"><br><br>
Ente the word to replace:<input type="text"name="rword"><br><br>
<input type="submit">
</form>
<?php
$text=$_GET['sen'];
$findword=$_GET['fword'];
$replaceword=$_GET['rword'];
$replaceword=strtoupper($replaceword);
$upperword=strtoupper($replaceword);
echo"<br>******OUTPUT********<br>";
echo"The given sentence is:",$text,"<br>";
$parts=explode(",",$text);

$replace=str_replace($findword,$upperword,$text);
echo"After replacing:",$replace,"<br>";
echo"<br**************************<br>";
if(count($parts)>0)
{
 foreach($parts as $part)
 {
 $letter=0;
 $number=0;
 $special=0;
 echo"The word: ",$part,"<br>";
 for($i=0;$i<strlen($part);$i++)
 {

if($part[$i]>='A'&&$part[$i]<='Z'||$part[$i]>='a'&&$part[$i]<='z')
 {
 $letter++;
 }
 elseif($part[$i]>='0'&&$part[$i]<='9')
 {
 $number++;
 }
 else
 {
 $special++;
 }
 }

 echo"<br>***************<br>";
 echo"Number of letters: ",$letter,"<br>";
 echo"Number of digits: ",$number,"<br>";
 echo"Number of special character: ",$special,"<br>";
 echo"<br>************************<br>";
 }
}
?>
</body>
</html>