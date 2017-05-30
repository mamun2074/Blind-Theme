<?php
global $blind_option;
?>

<footer>
    <div class="up-footer">
        <div class="container">
            <div class="row">

                <?php

                dynamic_sidebar('footer_sidebar');

                ?>

            </div>
        </div>
    </div>
    <p class="copyright" style="background-color:<?php echo $blind_option['footer-bgc']; ?>;color:<?php echo $blind_option['footer-color'];?>;text-align: <?php echo $blind_option['footer-align'];?>;">
       <?php echo $blind_option['footer-text']; ?>
    </p>
</footer>
<!-- End footer -->

</div>
<!-- End Container -->
<?php wp_footer(); ?>

</body>
</html>