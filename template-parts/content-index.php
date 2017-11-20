<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <div class="row-1">
        <div class="background-image">
        </div><!--.background-image-->
        <div class="triangle-1">
            <img src="<?php echo get_template_directory_uri();?>/images/top-1.png" alt="triangle 1">
        </div><!--.triangle-1-->
        <div class="triangle-2">
            <img src="<?php echo get_template_directory_uri();?>/images/top-2.png" alt="triangle 2">
        </div><!--.triangle-2-->
        <?php $title = get_field("title");
        $date = get_field("date");
        $location_1 = get_field("location_1");
        $location_2 = get_field("location_2");
        if($title):?>
            <header class="title"><h1><?php echo $title;?></h1></header>
        <?php endif;
        if($date):?>
            <div class="date"><?php echo $date;?></div><!--.date-->
        <?php endif;
        if($location_1):?>
            <div class="location-1"><?php echo $location_1;?></div><!--.location-1-->
        <?php endif;
        if($location_2):?>
            <div class="location-2"><?php echo $location_2;?></div><!--.location-2-->
        <?php endif;?>
    </div><!--.row-1-->
    <?php $row_2_copy = get_field("row_2_copy");
    $row_3_copy = get_field("row_3_copy");
    $row_4_copy = get_field("row_4_copy");
    if($row_2_copy):?>
        <div class="row-2 copy">
            <div class="background-image">
                <img src="<?php echo get_template_directory_uri();?>/images/mid-1.png" alt="mid 1">
            </div><!--.background-image-->
            <?php echo $row_2_copy;?>
        </div><!--.row-2-->
    <?php endif;?>
    <div class="mobile-image">
        <img src="<?php echo get_template_directory_uri();?>/images/wyoming.jpg" alt="Wyoming">
    </div><!--.mobile-image-->
    <?php if($row_3_copy):?>
        <div class="row-3 copy">
            <div class="background-image">
                <img src="<?php echo get_template_directory_uri();?>/images/mid-2.png" alt="mid 2">               
            </div><!--.background-image-->
            <?php echo $row_3_copy;?>
        </div><!--.row-3-->
    <?php endif;?>
    <?php if($row_4_copy):?>
        <div class="row-4 copy">
            <?php echo $row_4_copy;?>
        </div><!--.row-3-->
    <?php endif;?>
</article><!-- #post-## -->
