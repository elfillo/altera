<?php
/*
Template Name: Дизайн проекты
*/
?>
<?php
    $load_count = 6;
    $post_type = 'post_project';
    $count = wp_count_posts('post_project')->publish;

    $projects = get_posts([
	    'post_type' => $post_type,
	    'numberposts' => $load_count,
    ]);
?>
<?php get_header()?>
	<div class="container">
        <section class="projects">
            <div class="projects--title">Дизайн проекты</div>
            <div class="projects--list more-box">
				<?php foreach ($projects as $project):?>
                    <a href="<?php echo $project->guid?>" class="item" itemid="<?php echo $project->ID?>">
                        <div class="img"><img src="<?php echo get_the_post_thumbnail_url($project)?>" alt="#"></div>
                        <div class="text">
                            <div class="title"><?php echo $project->post_title?></div>
                            <div class="short_desc"><?php echo $project->post_excerpt?></div>
                        </div>
                    </a>
				<?php endforeach;?>
            </div>
        </section>
	</div>
    <?php if($count > $load_count):?>
    <section class="container">
        <div class="button button_show-more"
             onclick="showMorePost('<?php echo $load_count?>', '<?php echo $count?>', '<?php echo $post_type?>')"
        >
            Показать еще
        </div>
    </section>
    <?php endif;?>
<?php get_footer()?>