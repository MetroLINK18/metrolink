   <?php 
                  $con= mysql_connect("10.100.11.200","transitFX","transitFX!23","busStatus");
                  if($con){
                      die("Cannot connect:".mysql_error());
                  }
                  mysql_select_db("db",$con);
                  $sql="SELECT*FROM test";
                  $myData =mysql_query($sql,$con);
                  while($record=mysql-fetch_array($myData)){
                      echo "<td>".record['OS']"</td>";
                      echo "<td>".record['']"</td>";
                  }
              
                    ?>