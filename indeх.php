<!DOCTYPE html PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Топовый сайт новичка</title>
<style type="text/css">
   .layer1 {
    background: #F2EFE6;
    border: 1px solid #B25538;
    padding: 10px;
    margin: 20px;
   }
</style>
<style>
body {
background: #00FF00;
max-width: 900px;
margin: 10px auto;
padding: 30px;
}
 
p{
font:italic;
}
</style>
</head>
<body>
    
<?php
$ID = "не определен";
if(isset($_POST["ID"])){
  
    $ID = $_POST["ID"];
}
?>    
    

<p id="player"></p>

<?php
$file=fopen('myfile.txt','a');
fputs($file, "Сообщение отправлено ");
?>

<?php
$file=fopen('myfile.txt','a');
fputs($file, $_POST[ID]);
?>

<?php
$file=fopen('myfile.txt','a');
fputs($file, " пользователем<br>\n");
?>

<?php
$inputName = 'texter';
$file=fopen('myfile.txt','a');
fputs($file, $_POST[$inputName]);
?>
<form action="index.php" method="post">
    <label for="uname"><b>Логин</b></label>
    <input type="text" id="nm" name="ID" placeholder="Enter Username"/>

    <label for="psw"><b>Пароль</b></label>
    <input id="ps" type="password" placeholder="Enter"/>
<div>
<input type=text id="texter" name="<?php echo($inputName);?>">
</div>
<button type='submit'>Отправить</button>
</form>

<?php
$file=fopen('myfile.txt','a');
fputs($file, "\n<br>");
?>
  
<script>
function clickFuntion2 (){
	var namme=nm.value;
	var passo=ps.value;
	if((namme=="1") && (passo=="1")){
	document.getElementById("ttext").innerHTML ="Сообщение написано пользователем 1: ";
	
	}else if((namme=="2") && (passo=="2")){
	document.getElementById("ttext").innerHTML ="Сообщение написано пользователем 2: ";

	}else{
	document.getElementById("ttext").innerHTML ="Ошибка";
	}	
} 
</script>
<p id="ttext"></p>


<?php print file_get_contents('myfile.txt') ?>

</body>
</html>