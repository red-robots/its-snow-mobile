<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php $phone_number = get_field("phone_number","option");
		$phone_text = get_field("phone_text","option");
		$email = get_field("email","option");
		$email_text = get_field("email_text","option");
		if($phone_number):?>
			<div class="phone">
				<?php if($phone_text) echo $phone_text.'&nbsp;';?><a href="tel:+1<?php echo preg_replace("[^0-9]","",$phone_number);?>"><?php echo $phone_number;?></a>
			</div><!--.phone-->
		<?php endif;
		if($phone_number):?>
			<div class="email">
				<?php if($email_text) echo $email_text.'&nbsp;';?><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
			</div><!--.phone-->
		<?php endif;?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
