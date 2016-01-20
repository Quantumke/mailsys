<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if (isset($_POST['submit'])=='submit')
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$applied = $_POST['applied'];
$interests = $_POST['interests'];
$expirience = $_POST['expirience'];
    



// multiple recipients
$to  = 'nguruben@gmail.com' . ', '; // dont delete the comma
$to .= 'ben@moringadevshop.com';

// subject
$subject = 'New Applications From';

// message
$message = '
<html>
<head>
<link rel="stylesheet" href="http://seabanpr.co.ke/case/main.css">
</head>
<body>
<table class="body">
<tr>
<td class="center" align="center" valign="top">
<center>
<table class="row header">
<tr>
<td class="center" align="center">
<center>
<table class="container">
<tr>
<td class="wrapper last">
<table class="twelve columns">
<tr>
<td class="six sub-columns">
<img src="http://moringaschool.com/assets/images/logo.png" height="50px">
</td>
<td class="six sub-columns last" style="text-align:right; vertical-align:middle;">
<span class="template-label"></span>
</td>
<td class="expander"></td>
</tr>
</table>
</td>
</tr>
</table>
</center>
</td>
</tr>
</table>
<table class="container">
<tr>
<td>
<table class="row">
<tr>
<td class="wrapper last">
<table class="twelve columns">
<tr>

<h5>New Application, </h5><br>
<td style="background: rgb(235, 235, 235) none repeat scroll 0% 0%;">

<p class="lead"><span style="font-size:bold">Frist Name</span>: &nbsp;<?php echo  $firstname ?> .</p>
<p class="lead"><span style="font-size:bold">Last Name</span>: &nbsp;<?php echo $lastname ?>.</p>
<p class="lead">First Time Application: <?php echo $applied ?>.</p>
</td>
<td class="expander"></td>
</tr>
</table>
</td>
</tr>
</table>
<table class="row callout">
<tr>
<td class="wrapper last">
<table class="twelve columns">
<tr>
<td class="panel">
<p>What interests you about web and mobile development? <?php echo $interests ?></p>
</td>


<td class="expander"></td>

</tr>
</table>
</td>
</tr>
</table>

<table class="row callout">
<tr>
<td class="wrapper last">
<table class="twelve columns">
<tr>



<td class="expander"></td>
<td class="panel">
<p>What sort of prior experience do you have with web and/or mobile development? <?php echo $expirience ?></p>
</td>
</tr>
</table>
</td>
</tr>
</table>



<table class="row footer">
<tr>

<td class="wrapper last">
<table class="six columns">
<tr>
<td class="last left-text-pad">
<h5>Contact Info:</h5>
<p>Phone: <?php echo $phone ?></p>
<p>Email: <?php echo $email ?></p>
</td>
<td class="expander"></td>
</tr>
</table>
</td>
</tr>
</table>
<table class="row">
<tr>
<td class="wrapper last">
<table class="twelve columns">
<tr>
<td align="center">
<center>

</center>
</td>
<td class="expander"></td>
</tr>
</table>
</td>
</tr>
</table>
 
</td>
</tr>
</table>
</center>
</td>
</tr>
</table>

</body>
</html>

';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: Moringa School <birthday@example.com>' . "\r\n";
$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);

}

?>
<html>
<head>
</head>
<body>
<form action="" method="POST">
<input type ="text" name="firstname" id="firstname"><br>
<input type ="text" name="lastname" id="lastname"><br>
<input type ="text" name="email" id="email"><br>
<input type ="text" name="phone" id="phone"><br>
<input type="radio" name="applied" id="applied" value="yes"><br>
<input type="radio" name="applied" id="applied" value="no"><br>
            <textarea name="interests" id="interests"></textarea><br>
            <textarea name="expirience" id="expirience"></textarea>

<input type="submit" name="submit" value="submit">

</form>
<?php echo $phone ?>
</body>


</html>