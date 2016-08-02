<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?php echo $title;?></title>

    <!-- Bootstrap core CSS -->
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="lib/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="lib/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="lib/css/style.css" rel="stylesheet">
    <link href="lib/css/style-responsive.css" rel="stylesheet">

    <link href="lib/css/table-responsive.css" rel="stylesheet">
    <script src="lib/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <?php $this->load('header'); ?>
      <?php $this->load('menu'); ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <?php $this->load($content); ?>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - M. Aviv S.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/js/jquery.js"></script>
    <script src="lib/js/jquery-1.8.3.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/js/jquery.scrollTo.min.js"></script>
    <script src="lib/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="lib/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="lib/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="lib/js/sparkline-chart.js"></script>    
	  <script src="lib/js/zabuto_calendar.js"></script>	
	  <!--script for this page-->
    <script src="lib/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom switch-->
    <script src="lib/js/bootstrap-switch.js"></script>
    
    <!--custom tagsinput-->
    <script src="lib/js/jquery.tagsinput.js"></script>
   
    
    <script src="lib/js/form-component.js"></script>  
		<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
