

      <?php
      if (isset($_SESSION['errors'])){
      echo '<div class="alert alert-danger">';
        foreach($_SESSION['errors'] as $error){
          echo $error ;
        }
        unset($_SESSION['errors']);
        echo "</div>";
      }
      
      
      ?>