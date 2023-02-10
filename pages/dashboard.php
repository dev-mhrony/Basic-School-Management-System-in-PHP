 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
--><?php session_start();

if (!(isset($_SESSION['login']))) {

	header('location:../index.php');

}
?>
 <!DOCTYPE html>
 <html lang="en">
 <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->

 <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Online Student Management</title>

     <!-- Bootstrap Core CSS -->
     <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- MetisMenu CSS -->
     <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
     <link rel="stylesheet" href="../dist/css/deshbord.css">
     <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
     <!-- Custom Fonts -->
     <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 </head>

 <body>

     <div id="wrapper">

         <!-- Navigation -->
         <!-- Navigation -->
         <?php include('leftbar.php')?>;

         <!--nav-->

         <div id="page-wrapper">

             <div class="row">


                 <div class="col-lg-12">
                     <div style="padding-top: 10px;">
                         <marquee onMouseOver="this.stop()" onMouseOut="this.start()"> <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> is the sole owner of this script. It is not suitable for personal use. And releasing it in demo version. Besides, it is being provided for free only from <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>. For any of your problems contact us on <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a> facebook group / page or message <a href="https://www.facebook.com/dev.mhrony">MH RONY</a> on facebook. Thanks for staying with <a href="https://www.youtube.com/@codecampbdofficial">Code Camp BD</a>.</marquee>
                     </div>
                     <h4 class="page-header"> <?php echo strtoupper("welcome"." ".htmlentities($_SESSION['login']));?></h4>

                 </div>
                 <!-- /.col-lg-12 -->
             </div>


             <!-- /.row -->
             <div class="row">
                 <div class="col-lg-12">
                     <div class="deshbord_info">
                         <div class="deshbord_item">
                             <div class="item_list">
                                 <h4>00</h4>
                                 <p><a href="view-course.php">Course List</a></p>
                             </div>
                         </div>
                         <div class="deshbord_item">
                             <div class="item_list">
                                 <h4>00</h4>
                                 <p><a href="view-subject.php">Subject List</a></p>
                             </div>
                         </div>
                         <div class="deshbord_item">
                             <div class="item_list">
                                 <h4>00</h4>
                                 <p><a href="view.php">All Student</a></p>
                             </div>
                         </div>
                     </div>
                     <!-- Author By: MH RONY
Author Website: https://developerrony.com
Github Link: https://github.com/dev-mhrony
Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
-->
                     <!-- /.panel -->
                 </div>
                 <!-- /.col-lg-12 -->
             </div>
             <!-- /.row -->
         </div>
         <!-- /#page-wrapper -->

         <p style="text-align: center;"> CopyRight by <a href="">Code Camp BD</a> Design and Developer <a href="">MH RONY</a> All Resalve 2023</p>

     </div>
     <!-- /#wrapper -->

     <!-- jQuery -->
     <script src="../bower_components/jquery/dist/jquery.min.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

     <!-- Metis Menu Plugin JavaScript -->
     <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

     <!-- Custom Theme JavaScript -->
     <script src="../dist/js/sb-admin-2.js"></script>

 </body>

 </html>