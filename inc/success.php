    <?php

            if (isset($_SESSION['success'])){

                    echo '<div class ="alert alert-success">';
                    echo  $_SESSION['success'];
                        unset($_SESSION['success']);
                    echo "</div>";

            }


  ?>  

 