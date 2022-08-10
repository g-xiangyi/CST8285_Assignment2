<?php 
    require_once('connection.php');
    session_start();
    $email = $_SESSION['email'];
    $query_username = "SELECT * from STUDENT WHERE STU_EMAIL = '$email' ";
    $result =  mysqli_query($connection,$query_username);

    $row_username = mysqli_num_rows($result);

    $data = mysqli_fetch_assoc($result);

    $student_id = $data['STU_ID']; 

    $query_attendance = "SELECT * from ATTENDANCE WHERE STU_ID = '$student_id' ";
    $course_result =  mysqli_query($connection,$query_attendance ); 

?>

<!DOCTYPE html>
<html>

    <head>
    <!-- Site made with Mobirise Website Builder v4.7.7, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/images/logo-122x122.jpg" type="image/x-icon">
        <title>Home</title>
    </head>

    <body>
        <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="index.php">
                            <img src="assets/images/logo-122x122.jpg" alt="Mobirise" title="" style="height: 3.8rem;"> </a>
                        </span>
                        <span class="navbar-caption-wrap">
                            <a class="navbar-caption text-white display-5" href="index.php">Kungfu Master</a>
                        </span>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item">
                            <span class="nav-link link text-white display-4" >
                            <span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Hello, <?php echo $data['STU_FNAME'];?></span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link link text-white display-4" >
                            <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>Courses</span>
                        </li>
                    </ul>
            
                    <div class="navbar-buttons mbr-section-btn" style = "float:right;">
                        <a class="btn btn-sm btn-white display-4" href="logout.php">
                        <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Log Out</a>
                    </div>
                </div>

            </nav>
        </section>
        
        <section class="section-table cid-qVmB9nihVz" id="table1-3"></section>
        <div class="py-5">

            <div class="container" style = "margin-top:100px;">
                <div class="row">
                    <h3> User Profile</h3>
                    <div class="col-md-12">
                        <div class="panel panel-default animated slideInRight">
                            <div class="panel-body">
                                <br>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Joined</th>
                                            <th>Date of Birth</th>
                                            <th>Address</th>
                                            <th>Mom's phone</th>
                                            <th>Dad's phone</th>
                                            <th>Rank</th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $data['STU_FNAME']." ".$data['STU_LNAME'];?></td>
                                            <td><?php echo $data['STU_EMAIL'];?></td>
                                            <td><?php echo $data['STU_PHONE'];?></td>
                                            <td><?php echo $data['STU_JOINDATE'];?></td>
                                            <td><?php echo $data['STU_BIRTHDAY'];?></td>
                                            <td><?php echo $data['STU_ADDRESS'];?></td>
                                            <td><?php echo $data['STU_MOMPHONE'];?></td>
                                            <td><?php echo $data['STU_DADPHONE'];?></td>
                                            <td><?php echo $data['STU_RANK'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        
        <div class="py-5">
            <div class="container" style = "margin-top:100px;">
                <div class="row">
                    <h3> Registered Courses</h3>
                    <div class="col-md-12">
                        <!-- Website Overview -->
                        <div class="panel panel-default animated slideInRight">
                            <div class="panel-heading main-color-bg"></div>
                            <div class="panel-body">
                                <br>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Class Day</th>
                                            <th>Class Time</th>
                                            <th>Class Level</th>
                                            <th>Class Instructor</th>
                                            <th>Class Price</th>
                                            <th>Class Description</th>
                                        </tr>
                                        <?php 
                                            while($row = mysqli_fetch_assoc($course_result)){
                                                $course_id = $row['CLASS_NUM']; 
                                                $query_course = "SELECT * from CLASS WHERE CLASS_NUM = '$course_id' ";
                                                $result_course_register = mysqli_query($connection,$query_course);
                                                
                                                while($rows = mysqli_fetch_assoc($result_course_register)){
                                                    echo '
                                                        <tr>
                                                            <td>'. $rows['CLASS_DAY'].'</td>
                                                            <td>'.$rows['CLASS_TIME'].'</td>
                                                            <td>'.$rows['CLASS_LEVEL'].'</td>
                                                            <td>'.$rows['CLASS_INSTRUCTOR'].'</td>
                                                            <td>'.$rows['CLASS_PRICE'].'</td>
                                                            <td>'. $rows['CLASS_DESCRIPTION'].'</td>
                                                        </tr>
                                                    '; } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3> History Payment</h3>
                    <div class="col-md-12">
                        <div class="panel panel-default animated slideInRight">
                            <div class="panel-body">
                                <br>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <th>Student ID </th>
                                            <th>Payment Type</th>
                                            <th>Payment Time</th>
                                            <th>Payment Amount</th>
                                            <th>Transction Code</th>
                                        </tr>
                                        <?php 
                                            $query_payment = "SELECT * FROM PAYMENT WHERE STU_ID = '$student_id'";
                                            $result_payment = mysqli_query($connection,$query_payment);
                                            while($rows = mysqli_fetch_assoc( $result_payment)){
                                                echo '
                                                    <tr>
                                                        <td>'. $rows['STU_ID'].'</td>
                                                        <td>'.$rows['PAYMENT_TYPE'].'</td>
                                                        <td>'.$rows['PAYMENT_TIME'].'</td>
                                                        <td>'.$rows['PAYMENT_AMOUNT'].'</td>
                                                        <td>'.$rows['PAYMENT_ID'].'</td></tr>
                                                                    
                                                '; 
                                            } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('footer.php') ?>