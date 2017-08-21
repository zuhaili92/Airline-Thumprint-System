    

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        
           <!-- Load and execute javascript code used only in this page -->
     <script type="text/javascript">
    //     setTimeout(function() {
    //     $.bootstrapGrowl("This is another test.", { type: 'success' });
    // }, 1000);

    <?php 
    if($_SESSION['msg']==1)
    { ?>
      $(function(){

                $.bootstrapGrowl('<h4>Congratulations!</h4> <p>You have successfully registered. Please login to access your account!</p>', {
                    type: 'success',
                    delay: 2500,
                    allow_dismiss: true
                });

               
            });
      $(function(){ UiProgress.init(); });
      <?php }
      unset($_SESSION['msg']); ?>
      </script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>