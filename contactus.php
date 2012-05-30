<?php include('header.php') ?>
<!--begin content-->
<!-- InstanceBeginEditable name="Editable" -->
<div id="content">

    <h2>Contact Us</h2>
    <div><img src="images/con_address.png" alt="Address" width="16" height="16" hspace="5" />32570  310th. St.</div>
      <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Richland, Iowa 52585</div><br />

    <div><img src="images/con_tel.png" alt="Phone" width="16" height="16" hspace="5" />319-456-8600</div><br />

    <div><img src="images/con_info.png" alt="Info" width="16" height="16" hspace="5" />If you are interested in traveling with us on the next trip to Kigali or Rwanda,
      fill out the &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;form below.</div>
    <br />

<div id="box1">
<form action="formmail.php" method="post">



				                <label for="contact_name"> <strong>Enter your name:</strong> </label>
				                <br />
				                <input name="Name" id="contact_name" size="30" value="" type="text" />
				                <br />
				                <label for="contact_email"> <strong>E-mail address:</strong> </label>
				                <br />
				                <input name="email" id="contact_email" size="30" value="" type="text" />
				                <br />
				                <label for="contact_subject"> <strong>Message subject:</strong> </label>
				                <br />
				                <input name="Subject" id="contact_subject" size="30" value="" type="text" />
				                <br />
				                <br />
				                <label for="contact_text"> <strong>Enter your message:</strong> </label>
				                <br />
				                <textarea cols="50" rows="10" name="Message" id="contact_text"></textarea>
				                <br />
                                <br />
                                <div align="center"><input type="hidden" name="subject" value="Contact Us" />
                                <input type="hidden" name="good_url" value="contactus_thankyou.php" />
                                    <input type="hidden" name="recipients" value="rose@lightningandthunder.org" />
				                <input name="submit" type="submit" value="Send"/></div>		       
				            </form>
  </div>
  <hr />
  <div id="box3">
    <h2>&nbsp;</h2>

  </div>
</div>
<!--end content-->
<?php include('sidebar.php') ?>
<?php include('footer.php') ?>