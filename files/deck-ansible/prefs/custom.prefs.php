<?php

$workshop_style = 'css/ansible.css';
$workshop_image = 'images/YourLogoHere.png';
$workshop_name = 'Ansible Essentials Workshop';
$workshop_presenter = 'Your Name Here';
$workshop_title = 'Ansible Trainer';
$workshop_message = 'yourname@ansible.com';
$terminal_prompt = '[You@RedHat] $';

?>

<form method="POST" action="http://ansible.red/deck-ansible/">

<font face="verdana,sans">
<table>
	<tr>
		<td>Workshop Style Sheet</td>
		<td><input type="text" size="60" name="workshop_style" value="<?=$workshop_style?>"></td>
	</tr>
	<tr>
		<td>Workshop Image</td>
		<td><input type="text" size="60" name="workshop_image" value="<?=$workshop_image?>"><img src="<?=$workshop_image?>" width="50"></td>
	</tr>
	<tr>
		<td>Workshop Name / Event Title</td>
		<td><input type="text" size="60" name="workshop_name" value="<?=$workshop_name?>"></td>
	</tr>
	<tr>
		<td>Workshop Presenter</td>
		<td><input type="text" size="60" name="workshop_presenter" value="<?=$workshop_presenter?>"></td>
	</tr>
	<tr>
		<td>Workshop Presenter's Title</td>
		<td><input type="text" size="60" name="workshop_title" value="<?=$workshop_title?>"></td>
	</tr>
	<tr>
		<td>Workshop Message or Contact Info</td>
		<td><input type="text" size="60" name="workshop_message" value="<?=$workshop_message?>"></td>
	</tr>
	<tr>
		<td>Terminal Prompt</td>
		<td><input type="text" size="60" name="terminal_prompt" value="<?=$terminal_prompt?>"></td>
	</tr>



	<tr>
		<td>&nbsp;</td>
		<td><input type="submit"></td>
	</tr>
</table>

</form>
