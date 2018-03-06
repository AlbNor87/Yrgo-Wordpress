<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<?php

$args = ['post_type'=> 'employee'];

$employees = get_posts($args);

?>

<div class="row">
    <div class="col">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()): the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div><!-- /col -->
</div><!-- /row -->

<ul>

<?php foreach ($employees as $employee): ?>

<li><h4><a href="<?php the_permalink();?>">
<?php echo $employee->post_title ?></a></h4>
<h6><?php echo $employee->post_content?></h6>
</li>

<?php endforeach; 

?>


</ul>

<?php get_footer(); ?>
