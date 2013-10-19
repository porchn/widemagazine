<?php echo $this->head->render_doctype(); ?>
<?php //echo $this->head->render_html(); ?>
<!--[if IE 8]>			<html class="ie ie8" dir="ltr" lang="UTF-8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9" dir="ltr" lang="UTF-8"> <![endif]-->
<!--[if gt IE 9]><!-->	<html dir="ltr" lang="UTF-8"><!--<![endif]-->
<head>
<?php echo $this->head->render_meta(); ?>
<?php echo $this->head->render_favicon(); ?>
<?php echo $this->head->render_title(); ?>
<?php echo $this->template->display_css(); ?>
<?php echo $this->template->display_js(); ?>
</head>
<body <?php echo $this->head->render_body(); ?>>
<?php echo $template; ?>
<?php echo $this->template->display_css('css_view'); ?>
<?php echo $this->template->display_js('js_view'); ?>
</body>
</html>