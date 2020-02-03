<?php
/*
Template Name: Дизайн проект
Template Post Type: post_project
*/
?>
<?php get_header()?>
<?php
    $project_docs = get_field('project_docs', $post->ID);
    $project_gallery = get_field('project_gallery', $post->ID);
?>
<div class="container">
    <section class="project_about">
        <div class="project_about--title">Дизайн проекты</div>
        <div class="project_about--cover"><img src="<?php echo get_the_post_thumbnail_url($post)?>" alt="#"></div>
        <div class="project_about--details">
            <div class="box box_docs">
                <div class="title">Смотреть документацию: </div>
                <div class="docs">
                    <?php foreach ($project_docs as $doc):?>
                    <a href="<?php echo $doc['url']?>" class="item" download>
                        <div class="icon"><img src="<?php get_uri('img/project/pdf.png')?>" alt="#"></div>
                        <div class="name"><?php echo $doc['title']?></div>
                    </a>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="box box_description">
                <div class="title">Описание проекта:</div>
                <div class="text">
	                <?php echo apply_filters('the_content', $post->post_content);?>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="project_gallery">
    <?php foreach ($project_gallery as $item):?>
        <div class="project_gallery--item"><img src="<?php echo $item?>" alt="#"></div>
    <?php endforeach; unset($item)?>
</section>
<section class="project_form">
    <?php require 'parts/views/form.php'?>
</section>
<?php get_footer()?>