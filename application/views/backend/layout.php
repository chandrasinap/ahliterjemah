<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AhliTerjemah.com | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="http://ahliterjemah.com/assets/images/favicon.png" rel="icon"/>
  <!-- Bootstrap 3.3.6 -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Theme style -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/dist/css/AdminLTE.min.css'); ?>">

  <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/dist/css/skins/_all-skins.min.css'); ?>">

  <!-- iCheck -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/iCheck/flat/blue.css'); ?>">

  <!-- Date Picker -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/datepicker/datepicker3.css'); ?>">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker-bs3.css'); ?>">

  <!-- jcrop -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/jcrop/css/jquery.Jcrop.min.css'); ?>">

  <!-- jcrop -->

  <link rel="stylesheet" href="<?= base_url('assets/plugins/magicsuggest/css/magicsuggest-min.css'); ?>">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

  <script>var base_url = "<?php echo base_url(); ?>";</script>
  <style type="text/css">
   .ms-ctn input{
      min-width: 100px;
   }
  </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->

    <a href="index2.html" class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>A</b>LT</span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg">AhliTerjemah.com</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

        <span class="sr-only">Toggle navigation</span>

      </a>



      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

              <img src="<?= base_url('assets/plugins/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">

              <span class="hidden-xs">Administrator</span>

            </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header">

                <img src="<?= base_url('assets/plugins/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">

                <p>

                  Administrator

                  <small></small>

                </p>

              </li>

              <!-- Menu Body -->

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-left">

                </div>

                <div class="pull-right">

                  <a href="<?php echo base_url('/backend/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>

                </div>

              </li>

            </ul>

          </li>

          <!-- Control Sidebar Toggle Button -->

          <li>

            <a href="#">sadffsd</a>

          </li>

        </ul>

      </div>

    </nav>

  </header>

  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

          <img src="<?= base_url('assets/plugins/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">

        </div>

        <div class="pull-left info">

          <p>Administrator</p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

        </div>

      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">

        <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">

          <a href="<?php echo base_url('/backend'); ?>">

            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>

        </li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-files-o"></i>

            <span>News</span>

            <i class="fa fa-angle-left pull-right"></i>

          </a>

          <ul class="treeview-menu">

            <li><a href="<?= base_url('backend/news_list') ?>"><i class="fa fa-circle-o"></i> News List</a></li>

            <li><a href="<?= base_url('backend/news_add') ?>"><i class="fa fa-circle-o"></i> News Add</a></li>
            
            <li><a href="<?= base_url('backend/news_trash') ?>"><i class="fa fa-circle-o"></i> News Trash</a></li>

          </ul>

        </li>

      </ul>

    </section>

    <!-- /.sidebar -->

  </aside>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <?= $content ?>

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <strong>Copyright &copy; 2016 <a href="http://ahliterjamah">Ahli Terjemah</a>.</strong> All rights

    reserved.

  </footer>

</div>

<!-- ./wrapper -->



<!-- jQuery 2.2.0 -->

<script src="<?= base_url('assets/plugins/jQuery/jQuery-2.2.0.min.js'); ?>"></script>

<!-- jQuery UI 1.11.4 -->

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button);

</script>

<!-- Bootstrap 3.3.6 -->

<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

<!-- daterangepicker -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>

<!-- datepicker -->

<script src="<?= base_url('assets/plugins/datepicker/bootstrap-datepicker.js'); ?>"></script>

<!-- Bootstrap WYSIHTML5 -->

<script src="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>

<!-- Slimscroll -->

<script src="<?= base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js'); ?>"></script>

<!-- FastClick -->

<script src="<?= base_url('assets/plugins/fastclick/fastclick.js'); ?>"></script>

<!-- AdminLTE App -->

<script src="<?= base_url('assets/plugins/dist/js/app.min.js'); ?>"></script>

<script src="<?= base_url('assets/plugins/jcrop/js/jquery.Jcrop.min.js'); ?>"></script>

<script src='<?= base_url('assets/plugins/tinymce/tinymce.min.js') ?>'></script>

<script src='<?= base_url('assets/plugins/tinymce/jquery.tinymce.min.js') ?>'></script>

<script>

tinymce.init({

  selector: '#texteditor',

  theme: 'modern',

  plugins: [

      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',

      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',

      'save table contextmenu directionality emoticons template paste textcolor'

  ],

  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media fullpage | forecolor backcolor emoticons link | imageupload image',

  setup: function(editor) {

        var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');

        $(editor.getElement()).parent().append(inp);



        inp.on("change",function(){

            var input = inp.get(0);

            var file = input.files[0];

            var fr = new FileReader();

            var img;                

            var formData = new FormData();

            formData.append("userfile", file);

            $.ajax({

               url : base_url + 'backend/upload/imageContent',

               type: "POST",

               data: formData,

               processData: false,

               contentType: false,

               success: function(response) {

                  img = response;

               },

               error: function(jqXHR, textStatus, errorMessage) {

                   alert(errorMessage); // Optional

               }

            })

            .done(function(){

                editor.insertContent('<img width="400" height="auto" src="'+img+'"/>');

                inp.val('');

            });

        });



        editor.addButton( 'imageupload', {

            text:"IMAGE",

            icon: "upload",

            onclick: function(e) {

                inp.trigger('click');

            }

        });

    },
    relative_urls : false,
    remove_script_host : false,
    convert_urls : true

});

</script>

<script src="<?= base_url('assets/js/backend.js'); ?>"></script>

<!-- <script src="<?= base_url('assets/plugins/magicsuggest/js/magicsuggest-min.js'); ?>"></script>http://nicolasbize.com/magicsuggest/tutorial/5/lib/magicsuggest/magicsuggest.js -->

<script src="http://nicolasbize.com/magicsuggest/tutorial/5/lib/magicsuggest/magicsuggest.js"></script>

</body>

</html>