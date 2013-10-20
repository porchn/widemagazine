<?php echo $this->head->render_doctype(); ?>
<?php //echo $this->head->render_html(); ?>
<!--[if IE 8]>			<html class="ie ie8" dir="ltr" lang="UTF-8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9" dir="ltr" lang="UTF-8"> <![endif]-->
<!--[if gt IE 9]><!-->	<html dir="ltr" lang="UTF-8"><!--<![endif]-->
<head>
<?php echo $this->head->render_meta(); ?>
<?php echo $this->head->render_favicon(); ?>
<?php echo $this->head->render_title(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_assets_url('img/ico/apple-touch-icon-114-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_assets_url('img/ico/apple-touch-icon-114-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_assets_url('img/ico/apple-touch-icon-72-precomposed.png')?>">
<link rel="apple-touch-icon-precomposed" href="<?php echo site_assets_url('img/ico/apple-touch-icon-57-precomposed.png')?>">
    


<?php echo $this->template->display_css(); ?>
<?php echo $this->template->display_js(); ?>
<!--[if IE 7]><link type="text/css" rel="stylesheet" href="<?php echo site_assets_url('css/font-awesome-ie7.min.css')?>"><![endif]-->
<!--[if IE]> <link href="<?php echo site_assets_url('css/ie.css')?>" rel="stylesheet" > <![endif]-->

<!--[if lt IE 9]>
  <script type="text/javascript" src="<?php echo site_assets_url('js/html5shiv.js')?>"></script>
  <script type="text/javascript" src="<?php echo site_assets_url('js/respond.min.js')?>"></script>
<![endif]-->
</head>
<body <?php echo $this->head->render_body(); ?> class="clearfix" data-smooth-scrolling="1">

<?php echo $template; ?>
<?php echo $this->template->display_css('css_view'); ?>
<?php echo $this->template->display_js('js_view'); ?>

</body>
</html>