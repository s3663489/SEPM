<?php $title = 'Job Application|EgGaming';
$js = array('enhancement2.js');
 ?>



<section><fieldset><legend><strong>Personal Information</strong> *</legend>
<p>First Name* <input maxlength="20" name="firstname" pattern="^[a-zA-Z\s]{1,20}" required="required" size="20" type="text" /></p>
<p>Last Name* <input maxlength="20" name="lastname" pattern="^[a-zA-Z ]{1,20}" required="required" size="20" type="text" /></p>
<p>Age* <input max="100" min="1" name="ageInputName" type="range" value="50" /> <output name="ageOutputName">50</output></p>
<p>Address <textarea cols="50" name="addresstext" rows="1" placeholder=""></textarea></p>
<p>E-mail*</p>
<p><input name="email" required="required" size="30" type="email" value="" placeholder="ex: myname@example.com" /></p>
</fieldset><fieldset><legend><strong> Extra Details</strong> *</legend>Availability
<div>
<table border="0" cellspacing="0" cellpadding="5">
<thead>
<tr>
<th scope="col">Day</th>
<th scope="col">Start</th>
<th scope="col">Finish</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row" nowrap="nowrap">Monday:</th>
</tr>
<tr>
<th scope="row" nowrap="nowrap">Tuesday:</th>
</tr>
<tr>
<th scope="row" nowrap="nowrap">Wednesday:</th>
</tr>
<tr>
<th scope="row" nowrap="nowrap">Thursday:</th>
</tr>
<tr>
<th scope="row" nowrap="nowrap">Friday:</th>
</tr>
<tr>
<th scope="row" nowrap="nowrap">Saturday:</th>
</tr>
<tr>
<th scope="row" nowrap="nowrap">Sunday:</th>
</tr>
</tbody>
</table>
</div>
</fieldset></section>
<p><input name="submit" type="submit" value="APPLY" /></p>