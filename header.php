<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="format-detection" content="telephone=no" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <title>Altera</title>
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="" />
</head>
<body>
<?require_once ('parts/views/svg.php')?>
<?require_once ('parts/views/modal.php')?>
<div class="container">
    <header class="header">
        <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri()?>/img/logo/logo.png" alt="logo">
        </a>
        <nav class="nav">
            <?php wp_nav_menu(array('theme_location'=>'Main', 'menu_class' => 'nav_header') );?>
        </nav>
        <div class="mobile_menu">
	        <?php wp_nav_menu(array('theme_location'=>'Main', 'menu_class' => 'nav_header') );?>
        </div>
        <div class="burger"><span></span><span></span><span></span></div>
    </header>
</div>

