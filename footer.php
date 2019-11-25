<?php
/**
 * @package shopitem
 */

 wp_footer();
?>  <!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; <?php bloginfo('name'); echo " ".date('Y'); ?></p>
    <p class="m-0 text-center text-white"><?php
	printf( esc_html__( 'Theme: %1$s by %2$s.', 'shopitem' ), 'ShopItem', '<a href="https://github.com/3rChuss">_Jesus Abril_</a>' );
	?></p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>