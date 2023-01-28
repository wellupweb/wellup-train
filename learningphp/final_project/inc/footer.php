
    <!-- footer start -->

    <section class="footer bg---bs-indigo py-4" id="footer">
      <div class="container">
        <div class="footer-content d-flex justify-content-between">
          <div class="footer-content-left">
            <p class="mt-3"><?php echo $site_info_result['footer_title']; ?></p>
          </div>
          <div class="footer-content-right">
            <a href="<?php echo $site_info_result['fb_link']; ?>" class="btn btn-outline-info"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="<?php echo $site_info_result['twitter_link']; ?>" class="btn btn-outline-info"><i class="fa-brands fa-twitter"></i></a>
            <a href="<?php echo $site_info_result['whatsapp_link']; ?>" class="btn btn-outline-info"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="<?php echo $site_info_result['github_link']; ?>" class="btn btn-outline-info"><i class="fa-brands fa-github"></i></a>
          </div>
        </div>
      </div>
    </section>

    <!-- footer end -->



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>