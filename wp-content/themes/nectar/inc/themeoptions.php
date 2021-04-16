<?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["phone"])) {
		if(get_option('phone')){
         update_option('phone', $_POST["phone"]);
		}
		else {
		  add_option('phone', $_POST["phone"]);
		}
	}
	if (isset($_POST["mail"])) {
		if(get_option('mail')){
         update_option('mail', $_POST["mail"]);
		}
		else {
		  add_option('mail', $_POST["mail"]);
		}
	}
	if (isset($_POST["fb"])) {
		if(get_option('fb')){
         update_option('fb', $_POST["fb"]);
		}
		else {
		  add_option('fb', $_POST["fb"]);
		}
	}
	if (isset($_POST["twitt"])) {
		if(get_option('twitt')){
         update_option('twitt', $_POST["twitt"]);
		}
		else {
		  add_option('twitt', $_POST["twitt"]);
		}
	}
	if (isset($_POST["wel_title"])) {
		if(get_option('wel_title')){
         update_option('wel_title', $_POST["wel_title"]);
		}
		else {
		  add_option('wel_title', $_POST["wel_title"]);
		}
	}
	if (isset($_POST["welcontents"])) {
		if(get_option('welcontents')){
         update_option('welcontents', $_POST["welcontents"]);
		}
		else {
		  add_option('welcontents', $_POST["welcontents"]);
		}
	}
	if (isset($_POST["wel_link"])) {
		if(get_option('wel_link')){
         update_option('wel_link', sanitize_text_field($_POST["wel_link"]));
		}
		else {
		  add_option('wel_link',  sanitize_text_field($_POST["wel_link"]));
		}
	}
}
?>
<div class="wrap">
<h1>Theme Options</h1>

<form method="post" action="" novalidate="novalidate">
<table class="form-table">
<tbody><tr>
<th scope="row"><label for="phone">Phone</label></th>
<td><input name="phone" type="text" id="phone" value="<?php if(get_option('phone')){ echo get_option('phone'); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="mail">Email</label></th>
<td><input name="mail" type="text" id="mail" value="<?php if(get_option('mail')){ echo get_option('mail'); } ?>" class="regular-text"></td>
</tr>

<tr>
    <th scope="col" colspan="2"><h2>Social Media</h2></th>
</tr>
<tr>
<th scope="row"><label for="fb">Facebook</label></th>
<td><input name="fb" type="text" id="fb" value="<?php if(get_option('fb')){ echo get_option('fb'); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="twitt">Twitter</label></th>
<td><input name="twitt" type="text" id="twitt" value="<?php if(get_option('twitt')){ echo get_option('twitt'); } ?>" class="regular-text"></td>
</tr>

<tr>
    <th scope="col" colspan="2"><h2>Welcome Text</h2></th>
</tr>

<tr>
<th scope="row"><label for="wel_title">Title</label></th>
<td><input name="wel_title" type="text" id="wel_title" value="<?php if(get_option('wel_title')){ echo get_option('wel_title'); } ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="welcontents">Contents</label></th>
<td>
<textarea rows="7" cols="50" name="welcontents" id="welcontents" class="regular-text" ><?php if(get_option('welcontents')){ echo stripslashes(get_option('welcontents')); } ?></textarea>
</td>
</tr>
<tr>
<th scope="row"><label for="wel_link">Read More Link</label></th>
<td><input name="wel_link" type="text" id="wel_link" value="<?php if(get_option('wel_link')){ echo get_option('wel_link'); } ?>" class="regular-text"></td>
</tr>

</tbody></table>
<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
</form>
</div>