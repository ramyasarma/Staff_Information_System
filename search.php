<?php
                        if(isset($_POST['completedsearch']))
                        {
                                $term = $_POST['query'];
                                $mysql = mysql_connect("localhost","yourusername","yourpassword");
                                mysql_select_db("yourdatabase");
                                $qu = mysql_query("SELECT * FROM employee_basic_details WHERE fname LIKE '%{$term}%'"); 
                                echo "<th>Employee Basic Details Results</th>";
                                while($row = mysql_fetch_array($qu))
                                           {
                                                echo "<tr><td>";  
                                                echo $row['fname'];    
                                                        echo "</tr></td>";
                                }
                        }
                ?>

