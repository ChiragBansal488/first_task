<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>JavaScript form validation - checking non empty</title>
<link rel='stylesheet' href='form-style.css' type='text/css' />
</head>
<body onload='document.form1.text1.focus()'>
<div class="mail">
<p>Enter Userid [between 6 to 8 characters] and Submit</p>
<form name="form1" action="#">
<ul>
<li>Username:<input type='text' name='text1'/></li>
<li>&nbsp;</li>
<li class="submit"it"><input type="submit" name="submit" value="Submit" onclick="stringlength(document.form1.text1,6,8)"/></li>
<li>&nbsp;</li>
</form>
</ul>
</div>


<script>

if (Username == '') {
                error = 1;
                alert("Please Enter Username !!");
                return false;

            }
           
</script>
</body>
</html>