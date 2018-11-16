<html>
<?php
include 'config1.php';
?>
<head>
    <title>Admin- Dashboard</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <style>
        
        body {
            background-color: #d1cfcf;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        #brand {
            color: white !important;
        }

       
        #tab {
            margin: 0 auto;
            text-align: center;
        }

        .img-thumbnail {
            transform: scale(0.8, 0.8);
            -ms-transform: scale(0.8, 0.8);
            -webkit-transform: scale(0.8, 0.8);
        }
    </style>
    <script>    
       $(document).ready(function () {

            $("#fdbk").css("display", "none");
            $("#add").css("display", "none");
            $("#success").css("display", "none");
            $("#danger").css("display", "none");
            $("#delete").css("display", "none");
            $("#tab").css("display", "none");
            $("#maaya1").css("display", "none");
            $("#tedxevent").css("display", "none");
            $("#activityevent").css("display", "none");



            $("#addevent").click(function () {
            	// $("#start").css("display","none");
                $("#fdbk").css("display", "none");
                $("#delete").css("display", "none");
                $("#add").css("display", "block");
                $("#maaya1").css("display", "none");
                $("#tedxevent").css("display", "none");
                $("#activityevent").css("display", "none");

            });
            $("#feedback").click(function () {
            	// $("#start").css("display","none");
                $("#fdbk").css("display", "block");
                $("#delete").css("display", "none");
                $("#add").css("display", "none");
                $("#maaya1").css("display", "none");
                $("#tedxevent").css("display", "none");
                $("#activityevent").css("display", "none");

            });
            $("#delevent").click(function () {
            	// $("#start").css("display","none");
                $("#fdbk").css("display", "none");
                $("#delete").css("display", "block");
                $("#add").css("display", "none");
                $("#maaya1").css("display", "none");
                $("#tedxevent").css("display", "none");
                $("#activityevent").css("display", "none");

            });
            $("#maaya").click(function () {
            	// $("#start").css("display","none");
                $("#fdbk").css("display", "none");
                $("#maaya1").css("display", "block");
                $("#add").css("display", "none");
                $("#delete").css("display", "none");
                $("#tedxevent").css("display", "none");
                $("#activityevent").css("display", "none");

            });
            $("#tedx").click(function () {
            	// $("#start").css("display","none");
                $("#fdbk").css("display", "none");
                $("#maaya1").css("display", "none");
                $("#add").css("display", "none");
                $("#delete").css("display", "none");
                $("#tedxevent").css("display", "block");
                $("#activityevent").css("display", "none");

            });
            $("#activity").click(function () {
            	// $("#start").css("display","none");
                $("#fdbk").css("display", "none");
                $("#maaya1").css("display", "none");
                $("#add").css("display", "none");
                $("#delete").css("display", "none");
                $("#tedxevent").css("display", "none");
                $("#activityevent").css("display", "block");
            });
        });
    </script>
   
</head>

<body>
    <div class="sidenav">
        <br>
        <br>
        <a href="#" id="addevent">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" style="font-size:25px;">Add Event</button>
        </a>
        
        <a href="#" id="delevent">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" style="font-size:25px;">Delete Events</button>
        </a>
        <a href="#" id="maaya">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" style="font-size:25px;">Maaya Events</button>
        </a>

        <a href="#" id="tedx">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" style="font-size:25px;">TedX events</button>
        </a>
        <a href="#" id="activity">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" style="font-size:25px;">Activity Day</button>
        </a>


        <a href="#" id="feedback">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" style="font-size:25px; ">Feedback</button>
        </a>
<!---check heeeeeeeeeeerrrrrrrrrrrrrrreeeeeeeeeeeee-->
        <a href="#" id="option5">
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" style="font-size:25px; "><a href="login.html" target="_blank">Logout</button></a>
        </a>



    </div>
    <div class="navbar navbar-expand-lg">
        <a class="navbar-brand" id="brand">My Dashboard</a> 
    </div>

    <!-- sample -->
    <div class="col-8 mx-auto" id="#start">
    	<br>
    	<div class="card-title text-center" style="margin-left: 50px; background-color: purple; border-radius: 15px">
            <h3 style="padding-top:10px; padding-bottom: 10px; color: white;">Welcome Bhavani!<br>You are in the Admin Dashboard</h3>
        </div>
    </div>

<!-- feedbacks -->
    <div class="row align-items-center" >
        <div class="col-8 mx-auto" >
            <div class="card" id="fdbk" style="margin-top: 25px; margin-left: 50px; border-radius: 15px;">
                <div class="card-body text-center">
                    <div class="card-title" style="background-color: purple; border-radius: 15px">
                        <h3 style="padding-top:15px; padding-bottom: 20px; color: white;">Feedbacks</h3>
                    </div>
                    <table id="app" class="table table-striped">
                        <tr style="font-size: 20">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                         <?php
                            include("config1.php");
                            $sel=mysqli_query($con,"select * from feedback");
                            while($arr=mysqli_fetch_array($sel))
                            {
                                $n=$arr['name'];
                                $e=$arr['email'];
                                $s=$arr['subject'];
                                $d=$arr['message'];
                                echo "<tr>";
                                echo "<td>".$n."</td><td>".$e."</td><td>".$s."</td><td>".$d."</td>";
                                echo "</tr>";
                            }
                         ?>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- add event -->
    <div class="row align-items-center">
        <div class="col-8 mx-auto">
            <div class="card" id="add" style="margin-top: 25px; margin-left: 50px; border-radius: 15px">
                <div class="card-body text-center">
                    <div class="card-title" style="background-color: purple; border-radius: 15px">
                        <h3 style="padding-top:15px; padding-bottom: 20px; color: white;">Add Event</h3>
                    </div>
                    <form method="post" name="addform" action="filex.php">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Event name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="name" id="name1" placeholder="Enter the event name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">DAY</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="day" id="day1" placeholder="Day 1/2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">FEE</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="fee"  id="fee1" placeholder="Fee">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Choose a picture</label>
                        <div class="col-md-3">
                            <input id="dp" type="file" name="img" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="desc1" name="desc" placeholder="Description"></textarea>
                        </div>
                    </div>

                    <button id="button" type="submit" name="sub" class="btn mx-auto" style="background-color: purple; color: white;">Add</button>
                </form>

                    <div class="alert alert-success mx-auto" role="alert" id="success" style="margin-top: 10px;">
                        Event added successfully!
                    </div>
                    <div class="alert alert-danger mx-auto" role="alert" id="danger">
                        Couldn't add the event. Please try again.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- maaya events -->
    <div class="row align-items-center" >
        <div class="col-8 mx-auto" >
            <div class="card" id="maaya1" style="margin-top: 25px; margin-left: 50px; border-radius: 15px;">
                <div class="card-body text-center">
                    <div class="card-title" style="background-color: purple; border-radius: 15px">
                        <h3 style="padding-top:15px; padding-bottom: 20px; color: white;">Maaya Events</h3>
                    </div>

                    <table id="app" class="table table-striped" >
                        <tr style="font-size: +20px; border-radius: 15px;">
                            <th>Image</th>
                            <th colspan="2">Name</th>
                            <th>Day</th>
                            <th>Fee</th>
                            <th>Description</th>
                        </tr>
                         <?php
                            include("config1.php");
                            $sel=mysqli_query($con,"select * from maaya");
                            while($arr=mysqli_fetch_array($sel))
                            {
                                $n=$arr['name'];
                                $day=$arr['day'];
                                $f=$arr['fees'];
                                $i=$arr['image'];
                                $d=$arr['description'];
                                echo "<tr style='border-radius:15px'><td width='250' height='200'>";
                                echo "<img src='$i' alt='someimg' class='img-fluid rounded'> </td><td colspan='2' style='font-size:18px'><strong><u>".$n."</u></strong></td><td>".$day."</td><td>".$f."</td><td style='font-size:15px'>".$d."</td>";
                                echo "</tr>";
                            }
                         ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- tedx events -->
    <div class="row align-items-center" >
        <div class="col-8 mx-auto" >
            <div class="card" id="tedxevent" style="margin-top: 25px; margin-left: 50px; border-radius: 15px;">
                <div class="card-body text-center">
                    <div class="card-title" style="background-color: purple; border-radius: 15px">
                        <h3 style="padding-top:15px; padding-bottom: 20px; color: white;">TED-X</h3>
                    </div>

                    <table id="app" class="table table-striped" >
                        <tr style="font-size: +20px; border-radius: 15px;">
                            <th>Image</th>
                            <th colspan="2">Name</th>
                            <th>Description</th>
                        </tr>
                         <?php
                            include("config1.php");
                            $sel=mysqli_query($con,"select * from tedx");
                            while($arr=mysqli_fetch_array($sel))
                            {
                                $n=$arr['name'];
                                $i=$arr['image'];
                                $d=$arr['description'];
                                echo "<tr style='border-radius:15px'><td width='250' height='200'>";
                                echo "<img src='$i' alt='someimg' class='img-fluid rounded'> </td><td colspan='2' style='font-size:18px'><strong><u>".$n."</u></strong></td><td>".$d."</i></td>";
                                echo "</tr>";
                            }
                         ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- activity day events -->
    <div class="row align-items-center" >
        <div class="col-8 mx-auto" >
            <div class="card" id="activityevent" style="margin-top: 25px; margin-left: 50px; border-radius: 15px;">
                <div class="card-body text-center">
                    <div class="card-title" style="background-color: purple; border-radius: 15px">
                        <h3 style="padding-top:15px; padding-bottom: 20px; color: white;">Activity Day Events</h3>
                    </div>

                    <table id="app" class="table table-striped" >
                        <tr style="font-size: +20px; border-radius: 15px;">
                            <th>Image</th>
                            <th colspan="2">Name</th>
                            <th>Day</th>
                            <th>Fee</th>
                            <th>Description</th>
                        </tr>
                         <?php
                            include("config1.php");
                            $sel=mysqli_query($con,"select * from activityday");
                            while($arr=mysqli_fetch_array($sel))
                            {
                                $n=$arr['name'];
                                $day=$arr['day'];
                                $f=$arr['fees'];
                                $i=$arr['image'];
                                $d=$arr['description'];
                                echo "<tr style='border-radius:15px'><td width='250' height='200'>";
                                echo "<img src='$i' alt='someimg' class='img-fluid rounded'> </td><td colspan='2' style='font-size:18px'><strong><u>".$n."</u></strong></td><td>".$day."</td><td>".$f."</td><td><i>".$d."</i></td>";
                                echo "</tr>";
                            }
                         ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- delete events -->
    <div class="row align-items-center">
        <div class="col-md-8 mx-auto">
            <div class="card" id="delete" style="margin-top: 25px; margin-left: 50px; border-radius: 15px">
                <div class="card-body text-center">
                    <div class="card-title" style="background-color: purple; border-radius: 15px">
                        <h3 style="padding-top: 15px; padding-bottom: 20px; color: white;">Delete events</h3>
                    </div>
                    <form method="post" id="post">
	                    <table id="app" class="table table-striped" >
    	                    <tr style="font-size: +20; border-radius: 15px;">
								<th><input type="submit" name="update_cart" value="Delete"></th>
								<th>Image</th>
                	            <th colspan="2">Name</th>
                    	        <th>Day</th>
                        	    <th>Fee</th>
                            	<th>Description</th>

	                        </tr>
    	                     <?php
        	                    include("config1.php");
                                if(isset($_POST['update_cart'])){
                                      $remove = $_POST['remove'];
                                      $a = implode(",", $remove);
                                    $n= mysqli_query($con,"delete from maaya where name in($a)");
                                 }
                                 if($n){
                                      //echo "<script>alert('item deleted');</script>";
                                        // header("Refresh:0;url=home.php"); 
                                         echo"Deleted"; 
                                     }
                                 else{
                                         //echo "<script>alert('item not deleted');</script>";
                                        echo"Issue";
                                     }
                            
            	                $sel=mysqli_query($con,"select * from maaya");
                	            while($arr=mysqli_fetch_array($sel))
                    	        {
                        	        $n=$arr['name'];
                            	    $day=$arr['day'];
                                	$f=$arr['fees'];
	                                $i=$arr['image'];
    	                            $d=$arr['description'];
        	                        echo "<tr style='border-radius:15px'>";
        	                        echo "<td>";?><input type='checkbox' name='remove[]' class = "other" value='<?php echo $n;  ?>'/>;
                                    <?php echo "</td>";
        	                        echo "</td><td width='250' height='200'>";
            	                    echo "<img src='$i' alt='someimg' class='img-fluid rounded'> </td><td colspan='2' style='font-size:18'><strong><u>".$n."</u></strong></td><td>".$day."</td><td>".$f."</td><td><i>".$d."</i></td>";
                	                echo "</tr>";
                    	        }
                        	 ?>
                    	</table>

                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
