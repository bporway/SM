<?php while (have_posts()) : the_post(); ?>

<?php

$contactImage = get_field('contactimage');


?>

<?php $contactInfo = the_content(); ?>

<div class = "homeCenter">

    <div class="sm-image-col">
            <div class="sm-news-image">
            <img src ="<?php echo $contactImage; ?>" >
            </div>
    </div>

    <div class= "sm-desc-col noRightPad">

        <div class="sm-page-title"><P>contact</P></div>

        <div class="sm-page-description">

            <div class="cushycms"><p class="pageTitle"></p>

<p><b>Steve Marsel<br>
Steve Marsel Studio</b><br>
561 Windsor Street<br>
Somerville, MA, 02143</p>

<table border="0" cellpadding="0" cellspacing="0">
	<tbody>
		<tr valign="top">
			<td>
			<p><b>phone:&nbsp;&nbsp;</b><br>
			<br>
			<b>fax:</b></p>
			</td>
			<td>
			<p>617 718 7407<br>
			888 254 6505<br>
			617 718 7409</p>
			</td>
		</tr>
		<tr valign="top">
			<td>
			<p><b>email:</b></p>
			</td>
			<td>
			<p><a href="mail.php" onmouseout="swapImgRestore();" onmouseover="swapImage('contactEmail','','web/images/html/contact_email_rollover.gif',1);"><img style = "margin-top:-4px;" border="0" height="16" id="contactEmail" name="contactEmail" src="http://stevemarselstudio.com/web/images/html/contact_email.gif" width="191"></a></p>
			</td>
		</tr>
	</tbody>
</table>
</div>


            <!-- links -->

            <p><img src="http://stevemarselstudio.com/web/images/html/bullet_gray.gif" width="10" height="10" id="joinBullet" name="joinBullet"> <a class="bulletlink" href="mail.php" onmouseover="swapImage('joinBullet','','web/images/html/bullet_red.gif',1);" onmouseout="swapImgRestore();">Join our email list</a><br>

							<img src="http://stevemarselstudio.com/web/images/html/bullet_gray.gif" width="10" height="10" id="storeBullet" name="storeBullet"> <a class="bulletlink" href="http://www.cafepress.com/cp/store.aspx?s=marselstudio" target="_blank" onmouseover="swapImage('storeBullet','','web/images/html/bullet_red.gif',1);" onmouseout="swapImgRestore();">Enter Logowear store</a><br>

							<img src="http://stevemarselstudio.com/web/images/html/bullet_gray.gif" width="10" height="10" id="clientBullet" name="clientBullet"> <a class="bulletlink" href="clientarea.php" onmouseover="swapImage('clientBullet','','web/images/html/bullet_red.gif',1);" onmouseout="swapImgRestore();">Client area</a></p>

            <!-- end first set of links -->

            <p><b>Directions:</b><br>

							<img src="http://stevemarselstudio.com/web/images/html/bullet_gray.gif" width="10" height="10" id="dirNorthBullet" name="dirNorthBullet"> <a href="#" class="bulletlink" onclick="javascript:NewWindow=window.open('http://www.stevemarselstudio.com/cdirn.html','','width=470,height=600,left=100,top=100,toolbar=No,location=No,scrollbars=Yes,status=No,resizable=Yes,fullscreen=No'); NewWindow.focus(); void(0);" onmouseover="swapImage('dirNorthBullet','','web/images/html/bullet_red.gif',1);" onmouseout="swapImgRestore();">From the North</a><br>

							<img src="http://stevemarselstudio.com/web/images/html/bullet_gray.gif" width="10" height="10" id="dirSouthBullet" name="dirSouthBullet"> <a href="#" class="bulletlink" onclick="javascript:NewWindow=window.open('http://www.stevemarselstudio.com/cdirs.html','','width=470,height=600,left=100,top=100,toolbar=No,location=No,scrollbars=Yes,status=No,resizable=Yes,fullscreen=No'); NewWindow.focus(); void(0);" onmouseover="swapImage('dirSouthBullet','','web/images/html/bullet_red.gif',1);" onmouseout="swapImgRestore();">From the South</a><br>

							<img src="http://stevemarselstudio.com/web/images/html/bullet_gray.gif" width="10" height="10" id="dirWestBullet" name="dirWestBullet"> <a href="#" class="bulletlink" onclick="javascript:NewWindow=window.open('http://www.stevemarselstudio.com/cdirw.html','','width=500,height=600,left=100,top=100,toolbar=No,location=No,scrollbars=Yes,status=No,resizable=Yes,fullscreen=No'); NewWindow.focus(); void(0);" onmouseover="swapImage('dirWestBullet','','web/images/html/bullet_red.gif',1);" onmouseout="swapImgRestore();">From the West</a><br>

							<img src="http://stevemarselstudio.com/web/images/html/bullet_gray.gif" width="10" height="10" id="dirPubBullet" name="dirPubBullet"> <a href="#" class="bulletlink" onclick="javascript:NewWindow=window.open('http://www.stevemarselstudio.com/cdirpub.html','','width=500,height=330,left=100,top=100,toolbar=No,location=No,scrollbars=Yes,status=No,resizable=Yes,fullscreen=No'); NewWindow.focus(); void(0);" onmouseover="swapImage('dirPubBullet','','web/images/html/bullet_red.gif',1);" onmouseout="swapImgRestore();">Public transportation</a></p>

            <!-- end second set of links -->

        </div>




    </div>

</div>

 <!-- footer -->
    <div align="center" class="sm-footer"><div style="text-align: center;"><img border="0" height="27" src="http://stevemarselstudio.com/web/images/html/footer_phone.gif" width="119"><a href="#" onmouseout="swapImgRestore();" onmouseover="swapImage('footerEmail','','web/images/html/footer_email_rollover.gif',1);"><img border="0" height="27" id="footerEmail" name="footerEmail" src="http://stevemarselstudio.com/web/images/html/footer_email.gif" width="188"></a></div>
</div>
<?php endwhile; ?>
