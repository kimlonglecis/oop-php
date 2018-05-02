
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin <small>Statistics Overview</small>
                        </h1>
                        
                        <!-- <?php 

                            $sql = 'select * from users where id = 1';
                            $result = $database->query($sql);
                            $user_found = mysqli_fetch_array($result);

                            echo $user_found['username'];

                         ?>   -->
                        

                        <!-- <?php 
                        
                            $result_set = User::find_all_users();
                            while ($row = mysqli_fetch_array($result_set)) {
                                echo $row{'username'}."<br>";
                            }
                        
                        
                         ?> -->

                         <!-- <?php 
                            $found_user = User::find_user_by_id(1);
                            echo $found_user["first_name"];
                         
                          ?> -->

                        <?php 
                            $found_user = User::find_user_by_id(2);
                            $user = User::instantation($found_user);
                            echo $user->password;

                         ?>  
                        

                        
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            </div>              
            <!-- /.container-fluid -->