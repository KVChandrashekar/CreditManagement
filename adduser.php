<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<!--   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
 -->
<style type="text/css">
*{
	height:auto;
	overflow: hidden;
  padding:0px;
}

	.btndanger1{
  display: inline-block;
  border-radius: 4px;
  width: 120px;
  height: 30px;
  background-color: darkblue;
  font-size: 20px;
  background-color: lightgreen;
  padding: 0px;
}

.btndanger1:hover{
  background-color: skyblue;
  cursor: pointer;
}
/*#myTable{
  margin: 40px; 
  margin-left: 30%;
}*/
.myform{
  padding:0px;
  width:30%;
  height: 20px;
  text-align: center;
}
</style>

</head>
<body style="background-color: #5a6575;">
	<h1 align="center" style="font-family: sans-serif;">Add details</h1><br><br>
	<!-- <div style="position: relative; top: 20px;" > -->
	<form width="auto" action="add.php" method = "post" align="center" position='fixed' autocomplete="off">
		<div class="useradd">
        <label for="name"> Name: </label> <input class="myform" type="text" id="name" name="name" placeholder="Names are Unique" required=""><br><br>
        <label for="email">Email:</label> <input class="myform" type="text" id="email" name="email" placeholder="Email" required=""><br><br>
        <label for="credit">Credits: </label> <input class="myform" type="text" id="credit" name="credit" placeholder="Credits" required=""><br><br>
        <button class="btn" type="submit" name="useradd">Add details</button>
        </div>
    </form>
</div>
</body>
</html>