</div><!-- /container -->

   
<hr class="featurette-divider">
    <div class="container marketing">
      <?php
          if(isset($_SESSION['user'])):
            echo ucfirst($_SESSION['user']);
      ?>
      <a href="../view/includes/unset.php">Sair</a>
      <?php
          else:
      ?>
      <a href="../view/login.php">Entrar</a>

    <?php endif;?>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    
  </body>
</html>