<?php include('header.php') ?>
<!--begin content-->
<!-- InstanceBeginEditable name="Editable" -->
<div id="content">

    <h2>Prayer Request</h2>
    <div> Let us connect our faith with yours and agree with you in prayer?</div>
    <div class="verse"><p>Again, I say to you that if two of you agree on earth concerning
      anything that they ask, it will be done for them by My Father in heaven. - Matthew 18:19</div>
    <div>Dick and Rose will pray and agree with you. Proclaiming the Word of God over your situation.</div>
    <div class="verse"><p>Faith can move the mountain in your life. Bring your loved ones to Christ. Heal the sick and
    set the captives free!! - Matthew. 17: 20</div>
    <div>Please send us your prayer requests so that we can agree with you in prayer.</div><br />

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
				                <label for="contact_subject"> <strong>Prayer subject:</strong> </label>
				                <br />
				                <input name="Subject" id="contact_subject" size="30" value="" type="text" />
				                <br />
				                <br />
				                <label for="contact_text"> <strong>Enter your prayer request:</strong> </label>
				                <br />
				                <textarea cols="50" rows="10" name="Prayer Request" id="contact_text"></textarea>
				                <br />
                                <br />
                                <div align="center"><input type="hidden" name="subject" value="Prayer Request" />
                                <input type="hidden" name="good_url" value="contactus_prayerrequest.php" />
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