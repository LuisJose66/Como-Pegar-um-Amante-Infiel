<?php
$url = $_SERVER['SERVER_NAME'];
$link = $_POST['link'];
if ($link=='') $link = 'http://www.yourdomain.com';
$alt = "Catch A Cheating Lover - make money online";

// replace http://www.yourdomain.com on line 4 with your raw affiliate link.
//
// Example 1:	If you've set up an affiliate program with ClickBank your raw affiliate link will be..
//				http://xxxxx.CLICKBANKID.hop.clickbank.net
//
//				Where CLICKBANKID is your ClickBank ID and xxxxx is your affiliate's ID.
//				You must instruct your affiliates to change 'xxxxx' with their ClickBank ID in the link to get credited for sales.
//				If your ClickBank ID was 'john' and your affiliate's ID was 'mary' the link will be http://mary.john.hop.clickbank.net
//
//
// Example 2:	If you've set up an affiliate program with PayDotCom your raw affiliate link will be..
//				https://paydotcom.com/r/12345/xxxxx
//
//				Where 12345 is your PayDotCom product ID and xxxxx is your affiliate's ID.
//				You must instruct your affiliates to change 'xxxxx' with their PayDotCom ID in the link to get credited for sales.
//				If your product ID was '12345' and your affiliate's ID was 'mary' the link will be https://paydotcom.com/r/12345/mary
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow" />
<title>Catch A Cheating Lover - Affiliate Program</title>
<link href="images/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="headerbg">
<div id="header">
</div>
</div>

<div id="contentbg">
<div id="content">

<h1 align="center"><span class="red"><u>ATTENTION AFFILIATES!</u> </span></h1>
<h2 align="center">Start Promoting Catch A Cheating Lover <u>NOW</u> And Earn A Generous <span class="red"><u>75% Commission</u></span> Paid Instantly Into Your PayPal Account With Every Sale!</h2>
<p align="center"><strong>Tip!</strong> Bookmark this page now by pressing Ctrl+D on your keyboard.<br />
  This will save this page on your bookmarks so you won't forget about it and miss out!</p>
<p><span><strong><img src="images/softback300.jpg" width="300" align="right" /><em>H</em></strong></span><em><strong>ere's 5 great reasons you should start promoting Catch A Cheating Lover today!...</strong></em></p>
<p><strong>1. Great low cost product - high volume of sales!</strong> Catch A Cheating Lover is a video training product that'll be highly desirable for anyone looking to start a business online but don't have a large budget to work with. We have a great set of bonuses and very low refund rates simply because our product delivers! <u>This means more stable commission for you!</u></p>
<p><strong>2. You earn a <u>generous 75% commission</u> for every sale you refer! </strong>That's right, you earn way more than us with our insanely high payout! There are other affiliate programs out there only offering 50% commission or less however we're here to make <u>YOU</u> money!</p>
<p><strong>3. We do all the nitty-gritty admin work! </strong>As an affiliate <u>you won't have to trouble yourself</u> with processing payments, product creation, product maintenance, refunds or customer support! Simply send the traffic to us and we'll convert it for you! Simple.</p>
<p><strong>4. We give you all the tools you need!</strong> We have a wide range of tools that you can <u>copy and paste onto your website</u> and email lists! Choose from a selection of banners, auto-responder emails and more to help you make as many sales as you want for yourself! You can even use content from our main sales page to help you come up with your own landing pages and reviews!</p>
<p><strong>5. We're here to stay!</strong> Other product vendors may come and go, but we have the professional edge over them and are products are solid winners! Don't waste your time trying to promote something that doesn't look right! If you like the look of the product, chances are your visitors will too!</p>
<p><em>Ready to become our affiliate and start making sales?...</em></p>
<div id="boxheader"></div>
<div id="boxcontent">

<h2>Sign Up For Affiliate Updates!</h2>
<p>If you haven't already done so sign up below to get access to important updates! You'll be the first to know whenever we release a new product so you can beat the competition and start cashing in early!</p>
    <form method="post" action="http://www.aweber.com/scripts/addlead.pl"  >
        <input type="hidden" name="meta_web_form_id" value="" />
        <input type="hidden" name="meta_split_id" value="" />
        <input type="hidden" name="listname" value="" />
        <input type="hidden" name="redirect" value="" id=""	 />
        <input type="hidden" name="meta_redirect_onlist" value="" />
        <input type="hidden" name="meta_adtracking" value="" />
        <input type="hidden" name="meta_message" value="1" />
        <input type="hidden" name="meta_required" value="name,email" />
        <input type="hidden" name="meta_forward_vars" value="1" />
        <input type="hidden" name="meta_tooltip" value="" />
        <table width="500" border="0" align="center" cellpadding="1" cellspacing="0">
            <tr>
                <td width="140"><div align="right" >First Name:</div></td>
                <td width="306"><input name="name" type="text" value="" size="30"  /></td>
            </tr>
            <tr>
                <td><div align="right" >And Email:</div></td>
                <td><input name="email" type="text" value='' size="30"  /></td>
            </tr>
            <tr>
                <td colspan="2"><div align="center">
                <input name="submit" type="submit" value="Keep Me Updated!"/>
                </div></td>
            </tr>
        </table>
    </form>
    <div align="center"><span class="small">Your privacy is highly respected. Your information will never be shared,
      rented or sold to any third party and you may unsubscribe any time you want. </span></div>
</div>
<div id="boxfooter"></div>

  <p>You have full permission to use all the resources below and modify them as long as they are used to promote this site. With that said, happy promoting!</p>
  <a name="link" id="link"></a>

<div id="boxheader"></div>
<div id="boxcontent">

    <h2>Personalize Your Resources!</h2>

    <form action="affiliates.php#link" method="post">
        <table width="100%" border="0" cellspacing="0" cellpadding="3">
            <tr>
            <td><div align="center">ClickBank Affiliate Link / Custom URL:</div></td>
            </tr>
        <tr>
            <td><div align="center">
            <input name="link" type="text" id="link" value="<?php echo $link; ?>" size="35" />
            </div></td>
        </tr>
        <tr>
        <td><div align="center">
        <input name="button" type="submit" id="button" value="Update My Resources" />
        </div></td>
        </tr>
        </table>
    </form>

<p>Sign up with <a href="http://www.clickbank.com" target="_blank">ClickBank</a> if you haven't already done so and replace <strong>xxxxx</strong> with your ClickBank username. This will be your raw affiliate link which you can copy and paste into your website, your Email signature, into your autoresponder series, into your articles, into your eBooks and so on. Alternatively, if you have your own custom link, place it in here to update all your resources.</p>

</div>
<div id="boxfooter"></div>

<div id="boxheader"></div>
<div id="boxcontent">

<h2>Cloak Your Affiliate Link! </h2>
<center>
<form name="textarea" id="textarea_cloak">
<textarea name="textarea" id="textarea_cloak" cols="60" rows="5"><?php echo "<?php header( 'Location: " ?><?php echo $link; ?><?php echo "' ) ;?>" ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_cloak.focus();this.form.textarea_cloak.select();" name="button2" />
</form>
</center>
<p>Cloaking your affiliate link will protect your commissions. Create a new text file and copy and paste in the code with your affiliate link. Rename the file to index.php and upload to a folder on your server.</p>
<p align="center">For example, your new affiliate link will become:<br />
<em><strong>http://www.yourdomain.com/foldername</strong></em></p>
<p>If you would like to update your resources with your cloaked affiliate link enter your new URL in the affiliate link generator above.</p>
<p>&nbsp;</p>


</div>
<div id="boxfooter"></div>

<div id="boxheader"></div>
<div id="boxfooter"></div>

<div id="boxheader"></div>
<div id="boxcontent">
                
<h2>send Out Emails!</h2>
<p><span>Email marketing is still the most effective form of generating traffic on demand and it all starts with building a list. If you've got a mailing list of your own, you can schedule a few email series into your broadcast straight away. Even if you haven't started list building, you can still add these emails into your auto-responder sequence so that new subscribers will be exposed to the offer!</span></p>

<center>
  <?php if(file_exists('autoresponders/broadcast1.txt')) { ?>
  
  <?php
$b1title = file('autoresponders/broadcast1.txt');
$b1title = str_replace("SUBJECT: ", "", $b1title);
echo '<strong>'.$b1title[0].'</strong>';
?>
  <form name="textarea" id="textarea_broadcast">
<textarea name="textarea" id="textarea_broadcast" cols="70" rows="30">
<?php $broadcast = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/broadcast1.txt")); echo $broadcast; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_broadcast.focus();this.form.textarea_broadcast.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/broadcast2.txt')) { ?>

<?php
$b2title = file('autoresponders/broadcast2.txt');
$b2title = str_replace("SUBJECT: ", "", $b2title);
echo '<strong>'.$b2title[0].'</strong>';
?>
<form name="textarea" id="textarea_broadcast2">
<textarea name="textarea" id="textarea_broadcast2" cols="70" rows="30"><?php $broadcast2 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/broadcast2.txt")); echo $broadcast2; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_broadcast2.focus();this.form.textarea_broadcast2.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/broadcast3.txt')) { ?>

<?php
$b3title = file('autoresponders/broadcast3.txt');
$b3title = str_replace("SUBJECT: ", "", $b3title);
echo '<strong>'.$b3title[0].'</strong>';
?>
<form name="textarea" id="textarea_broadcast3">
<textarea name="textarea" id="textarea_broadcast3" cols="70" rows="30"><?php $broadcast3 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/broadcast3.txt")); echo $broadcast3; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_broadcast3.focus();this.form.textarea_broadcast3.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/broadcast4.txt')) { ?>

<?php
$b4title = file('autoresponders/broadcast4.txt');
$b4title = str_replace("SUBJECT: ", "", $b4title);
echo '<strong>'.$b4title[0].'</strong>';
?>
<form name="textarea" id="textarea_broadcast4">
<textarea name="textarea" id="textarea_broadcast4" cols="70" rows="30"><?php $broadcast4 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/broadcast4.txt")); echo $broadcast4; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_broadcast4.focus();this.form.textarea_broadcast4.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email1.txt')) { ?>

<?php
$e1title = file('autoresponders/email1.txt');
$e1title = str_replace("SUBJECT: ", "", $e1title);
echo '<strong>'.$e1title[0].'</strong>';
?>
<form name="textarea" id="textarea_email1">
<textarea name="textarea" id="textarea_email1" cols="70" rows="30"><?php $email1 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email1.txt")); echo $email1; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email1.focus();this.form.textarea_email1.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email2.txt')) { ?>

<?php
$e2title = file('autoresponders/email2.txt');
$e2title = str_replace("SUBJECT: ", "", $e2title);
echo '<strong>'.$e2title[0].'</strong>';
?>
<form name="textarea" id="textarea_email2">
<textarea name="textarea" id="textarea_email2" cols="70" rows="30"><?php $email2 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email2.txt")); echo $email2; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email2.focus();this.form.textarea_email2.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email3.txt')) { ?>

<?php
$e3title = file('autoresponders/email3.txt');
$e3title = str_replace("SUBJECT: ", "", $e3title);
echo '<strong>'.$e3title[0].'</strong>';
?>
<form name="textarea" id="textarea_email3">
<textarea name="textarea" id="textarea_email3" cols="70" rows="30"><?php $email3 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email3.txt")); echo $email3; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email3.focus();this.form.textarea_email3.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email4.txt')) { ?>

<?php
$e4title = file('autoresponders/email4.txt');
$e4title = str_replace("SUBJECT: ", "", $e4title);
echo '<strong>'.$e4title[0].'</strong>';
?>
<form name="textarea" id="textarea_email4">
<textarea name="textarea" id="textarea_email4" cols="70" rows="30"><?php $email4 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email4.txt")); echo $email4; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email4.focus();this.form.textarea_email4.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email5.txt')) { ?>

<?php
$e5title = file('autoresponders/email5.txt');
$e5title = str_replace("SUBJECT: ", "", $e5title);
echo '<strong>'.$e5title[0].'</strong>';
?>
<form name="textarea" id="textarea_email5">
<textarea name="textarea" id="textarea_email5" cols="70" rows="30"><?php $email5 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email5.txt")); echo $email5; ?></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email5.focus();this.form.textarea_email5.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email6.txt')) { ?>

<?php
$e6title = file('autoresponders/email6.txt');
$e6title = str_replace("SUBJECT: ", "", $e6title);
echo '<strong>'.$e6title[0].'</strong>';
?>
<form name="textarea" id="textarea_email6">
<textarea name="textarea" id="textarea_email6" cols="70" rows="30"><?php $email6 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email6.txt")); echo $email6; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email6.focus();this.form.textarea_email6.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email7.txt')) { ?>

<?php
$e7title = file('autoresponders/email7.txt');
$e7title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e7title[0].'</strong>';
?>
<form name="textarea" id="textarea_email7">
<textarea name="textarea" id="textarea_email7" cols="70" rows="30"><?php $email7 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email7.txt")); echo $email7; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email7.focus();this.form.textarea_email7.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email8.txt')) { ?>

<?php
$e8title = file('autoresponders/email8.txt');
$e8title = str_replace("SUBJECT: ", "", $e8title);
echo '<strong>'.$e8title[0].'</strong>';
?>
<form name="textarea" id="textarea_email8">
<textarea name="textarea" id="textarea_email8" cols="70" rows="30"><?php $email8 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email8.txt")); echo $email8; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email8.focus();this.form.textarea_email8.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email9.txt')) { ?>

<?php
$e9title = file('autoresponders/email9.txt');
$e9title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e9title[0].'</strong>';
?>
<form name="textarea" id="textarea_email9">
<textarea name="textarea" id="textarea_email9" cols="70" rows="30"><?php $email9 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email9.txt")); echo $email9; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email9.focus();this.form.textarea_email9.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email10.txt')) { ?>

<?php
$e10title = file('autoresponders/email10.txt');
$e10title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e10title[0].'</strong>';
?>
<form name="textarea" id="textarea_email10">
<textarea name="textarea" id="textarea_email10" cols="70" rows="30"><?php $email10 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email10.txt")); echo $email10; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email10.focus();this.form.textarea_email10.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email11.txt')) { ?>

<?php
$e11title = file('autoresponders/email11.txt');
$e11title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e11title[0].'</strong>';
?>
<form name="textarea" id="textarea_email11">
<textarea name="textarea" id="textarea_email11" cols="70" rows="30"><?php $email11 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email11.txt")); echo $email11; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email11.focus();this.form.textarea_email11.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email12.txt')) { ?>

<?php
$e12title = file('autoresponders/email12.txt');
$e12title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e12title[0].'</strong>';
?>
<form name="textarea" id="textarea_email12">
<textarea name="textarea" id="textarea_email12" cols="70" rows="30"><?php $email12 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email12.txt")); echo $email12; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email12.focus();this.form.textarea_email12.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email13.txt')) { ?>

<?php
$e13title = file('autoresponders/email13.txt');
$e13title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e13title[0].'</strong>';
?>
<form name="textarea" id="textarea_email13">
<textarea name="textarea" id="textarea_email13" cols="70" rows="30"><?php $email13 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email13.txt")); echo $email13; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email13.focus();this.form.textarea_email13.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email14.txt')) { ?>

<?php
$e14title = file('autoresponders/email14.txt');
$e14title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e14title[0].'</strong>';
?>
<form name="textarea" id="textarea_email14">
<textarea name="textarea" id="textarea_email14" cols="70" rows="30"><?php $email14 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email14.txt")); echo $email14; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email14.focus();this.form.textarea_email14.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email15.txt')) { ?>

<?php
$e15title = file('autoresponders/email15.txt');
$e15title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e15title[0].'</strong>';
?>
<form name="textarea" id="textarea_email15">
<textarea name="textarea" id="textarea_email15" cols="70" rows="30"><?php $email15 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email15.txt")); echo $email15; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email15.focus();this.form.textarea_email15.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email16.txt')) { ?>

<?php
$e16title = file('autoresponders/email16.txt');
$e16title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e16title[0].'</strong>';
?>
<form name="textarea" id="textarea_email16">
<textarea name="textarea" id="textarea_email16" cols="70" rows="30"><?php $email16 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email16.txt")); echo $email16; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email16.focus();this.form.textarea_email16.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email17.txt')) { ?>

<?php
$e17title = file('autoresponders/email17.txt');
$e17title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e17title[0].'</strong>';
?>
<form name="textarea" id="textarea_email17">
<textarea name="textarea" id="textarea_email17" cols="70" rows="30"><?php $email17 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email17.txt")); echo $email17; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email17.focus();this.form.textarea_email17.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email18.txt')) { ?>

<?php
$e18title = file('autoresponders/email18.txt');
$e18title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e18title[0].'</strong>';
?>
<form name="textarea" id="textarea_email18">
<textarea name="textarea" id="textarea_email18" cols="70" rows="30"><?php $email18 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email18.txt")); echo $email18; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email18.focus();this.form.textarea_email18.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email19.txt')) { ?>

<?php
$e19title = file('autoresponders/email19.txt');
$e19title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e19title[0].'</strong>';
?>
<form name="textarea" id="textarea_email19">
<textarea name="textarea" id="textarea_email19" cols="70" rows="30"><?php $email19 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email19.txt")); echo $email19; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email19.focus();this.form.textarea_email19.select();" name="button2" /></form>
<p>&nbsp;</p>

<?php } if(file_exists('autoresponders/email20.txt')) { ?>

<?php
$e20title = file('autoresponders/email20.txt');
$e20title = str_replace("SUBJECT: ", "", $e7title);
echo '<strong>'.$e20title[0].'</strong>';
?>
<form name="textarea" id="textarea_email20">
<textarea name="textarea" id="textarea_email20" cols="70" rows="30"><?php $email20 = str_replace("YOUR LINK", $link, file_get_contents("autoresponders/email20.txt")); echo $email20; ?></textarea><br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea_email20.focus();this.form.textarea_email20.select();" name="button2" /></form>
<p>&nbsp;</p>



<?php } ?>

</center>

<p>&nbsp;</p>

</div>
<div id="boxfooter"></div>

<div id="boxheader"></div>
<div id="boxcontent">

<h2>Use Banners And Images!</h2>

<p>Banners are most effective next to text and articles and can be added as a sidebar widget on your blog! You'll also get high click-throughs when placed on thank-you pages, download pages and anywhere else in a sequence of events. Try to <u>avoid placing too many banners on one page</u> as it will distract and put off your visitors. If you want to promote several products, use a banner rotator tool.</p>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
<td><div align="center"><img src="banners/125x125.gif" width="125" height="125" alt="<?php echo $alt; ?>" /></div></td>
<td><div align="center"><img src="banners/125x125a.jpg" width="125" height="125" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td><div align="center">
<form name="textarea" id="textarea125x125_01">
<textarea name="textarea" id="textarea125x125_01" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/125x125.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea125x125_01.focus();this.form.textarea125x125_01.select();" name="button2" />
</form>
</div></td>
<td><div align="center">
<form name="textarea" id="textarea125x125_02">
<textarea name="textarea" id="textarea125x125_02" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/125x125a.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea125x125_02.focus();this.form.textarea125x125_02.select();" name="button2" />
</form>
</div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><div align="center"><img src="banners/250x250.gif" width="250" height="250" alt="<?php echo $alt; ?>" /></div></td>
<td><div align="center"><img src="banners/250x250a.jpg" width="250" height="250" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td width="260">
<form name="textarea" id="textarea250x250_01">
<div align="center">
<textarea name="textarea" id="textarea250x250_01" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/250x250a.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea250x250_01.focus();this.form.textarea250x250_01.select();" name="button2" />
</div>
</form>
</td>
<td width="300">
<form name="textarea" id="textarea250x250_02">
<div align="center">
<textarea name="textarea" id="textarea250x250_02" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/250x250a.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea250x250_02.focus();this.form.textarea250x250_02.select();" name="button2" />
</div>
</form>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
<td><div align="center"><img src="banners/120x240.gif" width="120" height="240" alt="<?php echo $alt; ?>" /></div></td>
<td><div align="center"><img src="banners/120x240a.jpg" width="120" height="240" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td><div align="center">
<form name="textarea" id="textarea120x240_01">
<textarea name="textarea" id="textarea120x240_01" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/125x125.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea120x240_01.focus();this.form.textarea120x240_01.select();" name="button2" />
</form>
</div></td>
<td><div align="center">
<form name="textarea" id="textarea120x240_02">
<textarea name="textarea" id="textarea120x240_02" cols="30" rows="5"><a href="<?php echo $url; ?>"><img src="<?php echo $url; ?>/banners/125x125a.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea120x240_02.focus();this.form.textarea120x240_02.select();" name="button2" />
</form>
</div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><div align="center"><img src="banners/234x60.gif" width="234" height="60" alt="<?php echo $alt; ?>" /></div></td>
<td><div align="center"><img src="banners/234x60a.jpg" width="234" height="60" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td><div align="center">
<form name="textarea" id="textarea234x60_01">
<textarea name="textarea" id="textarea234x60_01" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/125x125.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea234x60_01.focus();this.form.textarea234x60_01.select();" name="button2" />
</form>
</div></td>
<td><div align="center">
<form name="textarea" id="textarea234x60_02">
<textarea name="textarea" id="textarea234x60_02" cols="30" rows="5"><a href="<?php echo $url; ?>"><img src="<?php echo $url; ?>/banners/125x125a.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea234x60_02.focus();this.form.textarea234x60_02.select();" name="button2" />
</form>
</div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2"><div align="center"><img src="banners/468x60.gif" width="468" height="60" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td colspan="2"><div align="center">
<form name="textarea" id="textarea468x60_01">
<textarea name="textarea" id="textarea468x60_01" cols="60" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/468x60.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea468x60_01.focus();this.form.textarea468x60_01.select();" name="button2" />
</form>
</div></td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
<tr>
<td colspan="2"><div align="center"><img src="banners/468x60a.jpg" width="468" height="60" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td colspan="2"><div align="center">
<form name="textarea" id="textarea468x60_02">
<textarea name="textarea" id="textarea468x60_02" cols="60" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/468x60a.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea468x60_02.focus();this.form.textarea468x60_02.select();" name="button2" />
</form>
</div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td><div align="center"><img src="banners/120x600.gif" width="120" height="600" alt="<?php echo $alt; ?>" /></div></td>
<td><div align="center"><img src="banners/120x600a.jpg" width="120" height="600" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td><div align="center">
<form name="textarea" id="textarea120x600_01">
<span>
<textarea name="textarea" id="textarea120x600_01" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/120x600.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea120x600_01.focus();this.form.textarea120x600_01.select();" name="button2" />
</span>
</form>
</div></td>
<td><div align="center">
<form name="textarea" id="textarea120x600_02">
<span>
<textarea name="textarea" id="textarea120x600_02" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/160x600a.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea120x600_02.focus();this.form.textarea120x600_02.select();" name="button2" />
</span>
</form>
</div></td>
</tr>
<tr>
<td><p>&nbsp;</p></td>
<td><p>&nbsp;</p></td>
</tr>
<tr>
<td><div align="center"><img src="banners/160x600.gif" width="160" height="600" alt="<?php echo $alt; ?>" /></div></td>
<td><div align="center"><img src="banners/160x600a.jpg" width="160" height="600" alt="<?php echo $alt; ?>" /></div></td>
</tr>
<tr>
<td><div align="center">
<form name="textarea" id="textarea160x600_01">
<span>
<textarea name="textarea" id="textarea160x600_01" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/160x600.gif" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea160x600_01.focus();this.form.textarea160x600_01.select();" name="button2" />
</span>
</form>
</div></td>
<td><div align="center">
<form name="textarea" id="textarea160x600_02">
<span>
<textarea name="textarea" id="textarea160x600_02" cols="30" rows="5"><a href="<?php echo $link; ?>"><img src="<?php echo $url; ?>/banners/160x600a.jpg" alt="<?php echo $alt; ?>" border="0" /></a></textarea>
<br />
<input type="button" value="Select Code" onclick="javascript:this.form.textarea160x600_02.focus();this.form.textarea160x600_02.select();" name="button2" />
</span>
</form>
</div></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<h3 align="center"><a href="banners/BannersAndGraphics.zip">Click here to download all Our banners and graphics For Later Use!</a></h3>

</div>
<div id="boxfooter"></div>

<p align="center">&nbsp;</p>
<h3 align="center">Thank You For Your Effort! 
  We Look Forward To Paying You Soon!</h3>
  
<div class="disclaimer">We make every effort to ensure that we accurately represent these products and services and their potential for income. Earning and Income statements made by our company and its customers are estimates of what we think you can possibly earn. There is no guarantee that you will make these levels of  income and you accept the risk that the earnings and income statements differ by individual. As with any business, your results may vary, and will be based on your individual capacity, business experience, expertise, and level of desire. There are no guarantees concerning the level of success you may experience. The testimonials and examples used are exceptional results, which do not apply to the average purchaser, and are not intended to represent or guarantee that anyone will achieve the same or similar results. Each individual’s success depends on his or her background, dedication, desire and motivation. There is no assurance that examples of past earnings can be duplicated in the future. We cannot guarantee your future results and/or success nor is this a guarantee as a <a href="http://www.tiptopmarketer.com">way to make money online from home</a>. There are some unknown risks in business and on the internet that we cannot foresee which can reduce results. We are not responsible for your actions. The use of our information, products and services should be based on your own due diligence and you agree that our company is not liable for any success or failure of your business that is directly or indirectly related to the purchase and use of our information, products and services. ClickBank is a registered trademark of Keynetics Inc., a Delaware corporation. Catch A Cheating Lover is not affiliated with Keynetics Inc. in any way, nor does Keynetics Inc. sponsor or approve any Catch A Cheating Lover product. Keynetics Inc. expresses no opinion as to the correctness of any of the statements made by Catch A Cheating Lover in the materials on this Web page.
</div>

<div class="footer">
<a href="index.html">Home</a> | <a href="disclaimer.html">Disclaimer</a> | <a href="privacy.html">Privacy</a> | <a href="terms.html">Terms</a> | <a href="affiliates.php">Affiliates</a>
<br /><br />
<script type="text/javascript" src="images/year.js"></script> Catch A Cheating Lover. All Rights Reserved.<br />
For help and support please contact YOUR@EMAILADDRESS.COM
</div>
<br />
    
</div>
</div>

<div id="footerbg">
<div id="footer">
</div>
</div>

</body>
</html>