<?php echo link_tag('assets/css/menu_inicial.css'); ?>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url().'assets/js/menu_inicial.js';?>"></script>
<?php
	session_start();

	$_SESSION['user_id'] = $user['user_id'];
?>
<input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id']; ?>" />
<nav id='cssmenu'>
</nav>
<div id="content">
    
</div>
