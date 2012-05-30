<?php include('header.php') ?>
<!--begin content-->
<!-- InstanceBeginEditable name="Editable" -->
<div id="content">

    <h2>Invite Dick &amp; Rose</h2>
    

  <div id="box1">
  <p>If you would like to book Dick and Rose for a meeting, conference, revival meetings or a crusade in your church or city, please fill out the form below.  We will personally contact you to schedule a date.</p>
<p> For further information call: 1-319-456-8600</p>
<hr />
<form action="formmail.php" method="post">
<div>Ministry Info:</div>

<label><strong>Name of Ministry:</strong></label><br />
<input name="Name" size="30" type="text" /><br />
<label><strong>Ministry Website URL:</strong></label><br />
<input name="Ministry Website URL" size="30" type="text" /><br />
<label><strong>Description of Ministry:</strong></label><br />
<textarea name="Description of Ministry" cols="50" rows="10"></textarea><br />
<br />
<hr /><br />

<div>Event Info:</div>

<label><strong>Event Name:</strong></label><br />
<input name="Event Name" size="30" type="text" /><br />
<label><strong>Event Date(s):</strong></label><br />
<input name="Event Date(s)" type="text" id="Event Date(s)" size="30" /><br />
<label><strong>Type of Event:</strong></label><br />
<select name="Type of Event">
  <option>Conference</option>
  <option>Seminar</option>
  <option>Meeting</option>
  <option>School</option>
  <option>House Fellowship</option>
  <option>Other</option>
</select><br />
<label><strong>Event Description:</strong></label><br />
<textarea name="Event Description" cols="50" rows="10"></textarea><br />
<br />
<hr /><br />

<div>Contact Info:</div>

<label><strong>Contact Name:</strong></label><br />
<input name="Contact Name" type="text" id="contactname" size="30" /><br />
<label><strong>Contact Phone:</strong></label><br />
<input name="Contact Phone" type="text" id="contactphone" size="30" /><br />
<label><strong>Contact Email:</strong></label><br />
<input name="email" type="text" id="contactemail" size="30" /><br />
<br />

<div align="center"><input type="hidden" name="subject" value="Invite Dick &amp; Rose" />
<input type="hidden" name="recipients" value="rose@lightningandthunder.org" />
<input type="hidden" name="good_url" value="contactus_invite.html" />
<input name="submit" type="submit" value="Send" /></div>
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