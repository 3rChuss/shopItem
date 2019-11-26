<?php
/**
 * @package shopitem
 */

 wp_footer();
?>
    <!-- col-lg-9 -->
    </div>
  <!-- row -->
  </div>
<!-- container -->
</div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <h2 class="text-center"><?php bloginfo('description');?></h2>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; <?php bloginfo('name'); echo " ".date('Y'); ?></p>
      <p class="m-0 text-center text-white"><?php
      printf( esc_html__( 'Theme: %1$s by %2$s.', 'shopitem' ), 'ShopItem', '<a href="https://github.com/3rChuss">_Jesus Abril_</a>' );
    ?></p>
    </div>
    <!-- /.container -->
  </footer>
</body>

</html>