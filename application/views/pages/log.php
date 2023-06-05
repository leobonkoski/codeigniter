

            <?php
                $json =  json_encode($log_database,JSON_PRETTY_PRINT);
                $decode = json_decode($json);
                print_r($decode);
                ?>
                
    