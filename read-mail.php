<?php include "frame.php" ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ระบบงานสารบรรณ</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">

  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Read Mail
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mailbox</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <!-- Menu mail  -->
        <?php
          include "menumail.php";
        ?>

        <div class="col-md-9">
          <div class="box box-primary" style="color: black">
              <div class="box-tools pull-right">
              <br>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3 style="color: black">Message Subject Is Placed Here</h3>
                <h5  style="color: black">From: help@example.com
                  <span class="mailbox-read-time">15 Feb. 2016 11:03 PM</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                    <i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                    <i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                  <i class="fa fa-print"></i></button>
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>Hello John,</p>

                <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
                  on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
                  master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
                  gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
                  asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
                  blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
                  Apparel.</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <ul class="mailbox-attachments clearfix">
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
                        <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fa fa-paperclip"></i> App Description.docx</a>
                        <span class="mailbox-attachment-size">
                          1,245 KB
                          <a href="#" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"data-toggle="modal" data-target="#ReplyModal" data-whatever="@mdo" id="modal"><i class="fa fa-reply"></i> Reply</button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ForwardModal" data-whatever="@mdo" id="modal2"><i class="fa fa-share"></i> Forward</button>
              </div>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


<!-- Reply modal -->
    <div class="modal fade" id="ReplyModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="close1">&times;</button>
                    <h4 class="modal-title">ตอบกลับ</h4>
                </div>
                <div class="modal-body">
                    <form id="ReplyForm" method="post">

                        <div class="form-group">
                            <label for="recipient-name" class="control-label" >E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <p id="emailError" style="color: red;"></p>                            
                            <p id="emailpattenError" style="color: red;"></p>
                        </div>
                       <!-- <div class="form-group">
                          รับทราบ : 
                          <input type="radio" name="status" value="read">
                        </div>
                        -->
                        <div class="form-group">
                          <textarea id="compose-textarea" class="form-control" style="height: 200px">
                          </textarea>                     
                        </div>
                        <div class="modal-footer">
                            <div class="form-group" align="right">
                                <button type="submit" class="btn btn-primary loginsubmit" value="submit" name="submit" id="submit" style="width: 120px;">ส่ง
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Reply modal -->

<!-- Forward modal -->
    <div class="modal fade" id="ForwardModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="close1">&times;</button>
                    <h4 class="modal-title">ส่งต่อ</h4>
                </div>
                <div class="modal-body">
                    <form id="ForwardForm" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label" >E-mail:</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <p id="emailError" style="color: red;"></p>                            
                            <p id="emailpattenError" style="color: red;"></p>
                        </div>
                        <div class="form-group">
                          <textarea id="compose-textarea-forward" class="form-control" style="height: 200px">
                          </textarea>                     
                        </div>
                        <div class="modal-footer">
                            <div class="form-group" align="right">
                                <button type="submit" class="btn btn-primary loginsubmit" value="submit" name="submitForward" id="submitForward" style="width: 120px;">ส่ง
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Forward modal -->

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="/plugins/alert.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
    $("#compose-textarea-forward").wysihtml5();
  });
</script>
</body>
</html>
