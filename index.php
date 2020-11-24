<html>
<head>
<script src="jquery.js"></script>
</head>
<body>
<h1>hello welcome</h1>

<?php

$a;
$a="mahesh";
echo "Welcome ".$a;
?>

<br/>

Enter Name<input id=val1 />
<br/>

Enter Surname<input id=val2 />

<input type="button" value="Add" onClick=aaa(); />

<script>

function aaa(){
 var a=$('#val1').val();

 var b=$('#val2').val();
  alert(a+" "+ b);
}

</script>
</body>
</html>