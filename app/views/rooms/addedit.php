<?php
$errors = validation_errors();
if($errors){
	echo $this->msg->err('<ul>' . $errors . '</ul>', 'Please check the following invalid item(s) and try again.');
}
?>

<div class="tabber" id="tabs-configure">

	<div class="tabbertab<?php echo ($tab == 'addedit-details') ? ' tabbertabdefault' : ''; ?>">
		<h2>Main details</h2>
		<?php $this->load->view('rooms/addedit.details.php', $room); ?>
	</div>

	<?php if($room_id != NULL){ ?>
	<div class="tabbertab<?php echo ($tab == 'addedit-permissions') ? ' tabbertabdefault' : ''; ?>">
		<h2>Permissions</h2>
		<?php $this->load->view('rooms/addedit.permissions.php', $room); ?>
	</div>
	<?php } ?>

</div>