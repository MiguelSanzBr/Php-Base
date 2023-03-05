<html> 
<body>

<?php
if (isset($_POST['envia-formulário']))
    {
        $formatospermitidos = array ('jpg' ,'png');
        $extencao = pathinfo ("$FILER","arquivo");
    }
?>
<form action=
<?php 
echo $_SERVER ['PHP_SELF'];
?>
 method="post" enctype="multipart/form-data"> 
 <input type="file" name="Filer"> <br>
 <input type="submit" name="Botão">
</form>
</body>
</html>