<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Development Company | Web technology solutions by Aeongrapix</title>

<meta name="description" content="Aeongrapix is a leading web solution company experts in latest web technologies like Flex, AIR, Flash Builder, AS3, HTML5, CSS3, PHP." />
<meta name="keywords" content="web development company, software development, website redesign, website development, website maintenance, custom website design" />

<?php include('include/common.php');?>
</head>
<script type="text/javascript" language="javascript">
function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}
function validate_phone(field,alerttxt)
{
with (field)
  {
  if (value.length < 10)
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}
function hasASelection(groupName) 
{ 
var elms = document.getElementsByName(groupName); 
for(var k=0, elm;elm=elms[k];k++) 
if(elm.checked) return true; 
return false; 
} 
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_form(thisform)
{
	
   with (thisform)
  {
  if (validate_required(name,"Please enter your full name ")==false)
  {name.focus();return false;}
  }
  with (thisform)
  {
  if (validate_required(comp_name,"Please enter your company name")==false)
  {comp_name.focus();return false;}
  }
   with (thisform)
  {
  if (validate_required(email,"Please enter your email address")==false)
  {email.focus();return false;}
  }
  with (thisform)
  {
  if (validate_email(email,"You have not entered a valid e-mail address!")==false)
    {email.focus();return false;}
  }
  with (thisform)
  {
  if (validate_required(budget,"Please enter your estimated budget")==false)
  {budget.focus();return false;}
  }
  with (thisform)
  {
  if (validate_required(time,"Please enter your expected time of arrival")==false)
  {time.focus();return false;}
  }
  with (thisform)
  {
  if (validate_required(comments,"Please enter your project description")==false)
  {comments.focus();return false;}
  }
}
</script>
<body>
<div id="mainDiv">
<!-- top-nav starts -->
<?php include('include/top-nav.php');?>
<!-- top-nav ends -->
<!-- banner space starts -->
<div id="bannerSpacer"><br class="clear" /></div>
<!-- banner space ends -->
<!-- left-section starts -->
<section id="leftSec">
	<h1>Free Quote</h1>
    <form action="scripts/send_quotemail.php" method="post" name="frm1" id="frm1"  onsubmit="return validate_form(this)">
       <?php if($_REQUEST['stat']==1){ ?><?php echo "Thanks for requesting quote. We will get back to you soon";  ?><?php } ?>

    <ul id="form">
    	<li><label>Your Full Name:</label><input name="name" type="text"></li>
        <li><label>Your Company Name:</label><input name="comp_name" type="text"></li>
        <li><label>Your Email Address:</label><input name="email" type="text"></li>
        <li><label>Estimated Budget / Cost:</label><input name="budget" type="text"></li>
        <li><label>Expected Time of Arrival:</label><input name="time" type="text"></li>
        <li>
       	  <label>Project Description:</label>
            <textarea cols="" rows="" name="comments"></textarea>
        </li>
        <li><input name="Submit" type="submit" value="Submit"></li>
    </ul>
    </form>
</section>
<!-- left-section ends -->

<!-- right-section starts -->
<?php include('include/right-section.php');?>
<!-- right-section ends -->
<br class="clear" />
</div>

<!-- footer section starts -->
<?php include('include/footer.php');?>
<!-- footer section ends -->
</body>
</html>
