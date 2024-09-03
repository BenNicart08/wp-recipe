    
    <footer class="py-10 text-center bg-light_accent">
      <div class="footer__content">
        <h4>TheRecipe</h4>
        <ul class="footer__nav--wrap flex justify-center gap-2 mb-4">
          <?php wp_nav_menu(array(
              'theme_location' => 'footer_menu',
              'menu_class' => "footer__nav--wrap",
            ))?>
        </ul>
        <p class="text-[12px] mb-0">Copyright 2023. All Rights Reserved</p>
      </div>
    </footer>
    <?php wp_footer()?>
  </body>
</html>