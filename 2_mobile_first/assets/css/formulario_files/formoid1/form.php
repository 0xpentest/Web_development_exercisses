<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-orange.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-orange.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Contactar</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Indique su nombre"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Nombre"/><span class="icon-place"></span></div></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>" title="Indique su sexo"><label class="title">Sexo<span class="required">*</span></label>		<div class="column column2"><label><input type="radio" name="radio" value="option 1" required="required"/><span>option 1</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="radio" value="option 2" required="required"/><span>option 2</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Indique su ciudad"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><span><select name="select" required="required">

		<option value="Seleccionar">Seleccionar</option>
		<option value="Madrid">Madrid</option>
		<option value="Barcelona">Barcelona</option>
		<option value="San Sebastián">San Sebastián</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-email<?php frmd_add_class("email"); ?>" title="Indique su email"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="email" name="email" value="" required="required" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Indique su consulta"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" required="required" placeholder="Su consulta"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>