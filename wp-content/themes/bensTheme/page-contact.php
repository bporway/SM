<?php while (have_posts()) : the_post(); ?>

<?php $contactInfo = the_content(); ?>

<div class = "homeCenter">

    <div class= "sm-contact-info">

    <p class="pageTitle">contact</p>
<b>Steve Marsel
Steve Marsel Studio</b>
561 Windsor Street
Somerville, MA, 02143
<table border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr valign="top">
<td><b>phone:  </b>

<b>fax:</b></td>
<td>617 718 7407
888 254 6505
617 718 7409</td>
</tr>
<tr valign="top">
<td><b>email:</b></td>
<td><a href="http://stevemarselstudio.com/mail.php"><img id="contactEmail" src="http://stevemarselstudio.com/web/images/html/contact_email.gif" alt="" width="191" height="16" name="contactEmail" border="0" /></a></td>
</tr>
</tbody>
</table>

    </div>

</div>

 <!-- footer -->
    <div align="center" class="sm-footer"><div style="text-align: center;"><img border="0" height="27" src="http://stevemarselstudio.com/web/images/html/footer_phone.gif" width="119"><a href="#" onmouseout="swapImgRestore();" onmouseover="swapImage('footerEmail','','web/images/html/footer_email_rollover.gif',1);"><img border="0" height="27" id="footerEmail" name="footerEmail" src="http://stevemarselstudio.com/web/images/html/footer_email.gif" width="188"></a></div>
</div>
<?php endwhile; ?>
