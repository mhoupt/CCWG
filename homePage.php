topcodeblock
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>
      pagetitle
    </title>
    <meta name="description" content="webpagedescription" />
    <meta name="keywords" content="pagekeywords" />
    <link rel="stylesheet" type="text/css" href="userdocs/css/ccwgNew.css" />
    <link rel="stylesheet" type="text/css" href="userdocs/css/inc/NewLeftNav.css" />
headscripts
analyticscodeblock
  <style type="text/css">
@import url("userdocs/css/inc/CaviarDreams.css");
  </style>
  <link rel="stylesheet" href="userdocs/themes/ccwg/mainNavTwo.css" />
  <script src="userdocs/js/mainNav.js"></script>
  <link rel="stylesheet" href="userdocs/css/inc/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="userdocs/css/inc/default.css" type="text/css" media="screen" />
<script type="text/javascript" src="userdocs/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
        animSpeed: 500, // Slide transition speed
        pauseTime: 8000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        pauseOnHover: true, // Stop animation while hovering
    });
});
</script>
</head>

<body>
  <div id="topBlackBar">
      <div class="inner">
          <?php  $navigationfile = "AboveHeaderNavigation.php";?>
          <?php  include('inc/navcodeblock.php');?>
      </div><!-- inner -->
    </div><!-- Top black bar -->
  <div id="topShadow"></div><!-- topShadow -->

    <div id="headerMast">
       <div id="headerInner">

         <div id="logo">
           <?php $editcontrols="pwe";?>
           <?php // include('userdocs/inc/logo.php');?><a href="index.php"><img src="userdocs/themes/ccwg/cc-westgrove-logo-with-leaf-out.png" width="275" height="71" style="border: 0" alt="CCWG"></a></div><!-- Logo -->

         <div id="mainNav">
         <div id="inner">
           <?php $editcontrols="pwe";?>
           <?php  include('userdocs/modules/homeOnlyMainNav.php');?></div><!-- inner -->
         </div><!--Navigation-->

         <div id="secondaryNav"></div><!-- secondaryNav -->

       </div><!-- headerInner -->
  </div><!--HeaderMast-->

   <div id="homeTopSpacer"></div><!-- homeTopSpacer -->

   <div id="wrapper">
    <div id="mainContent">

      <div id="tape"></div>
      <div id="tapeTwo"></div>
      <div id="leftDivHome">
        <div class="inner">
          <?php $editcontrols="pwe";?>
          articletwo</div>
      </div><!--LefDiv-->
      <div id="rightDivHome">
        <div class="inner">
          <?php $editcontrols="pwe";?>
            <?php include('userdocs/modules/newmenusys.php');?>
        </div><!--Content Inner-->
      </div><!-- rightDivHome -->
      <div id="threeButtonsHome">
      <div class="inner">
        <?php $editcontrols="pwe";?>
        articlefour</div><!-- threeButtonsHome -->
      </div><!--Events Table-->
      <div id="socialButtons">
        <?php $editcontrols="pwe";?>
        articlesix</div><!--Social Buttons-->

    </div><!--MainContent-->
  </div><!--Wrapper-->

      <div id="footer">
      <div class="inner">
        <div id="slider_10">
          <?php $editcontrols="pwe";?>
        <?php  $articlename = "currentEvents.txt";?>
        <?php  include('inc/codeblock.php');?>
        </div><!--Slider-->
        <div id="bulletin">
          <?php $editcontrols="inledit";?>
        <?php  $articlename = "bulletinButton.txt";?>
        <?php  include('inc/codeblock.php');?>
        </div><!--Bulletine-->
      </div><!-- inner -->
    </div><!--Footer-->

    <div id="subFooter">
      <div class="inner">
        <div id="navigationSubs">
          <?php $editcontrols="pwe";?>
          <?php  $articlename = "navigationSubs.txt";?>
          <?php  include('inc/codeblock.php');?>
          </div><!-- navigationSubs -->
      </div><!-- inner -->
    </div><!-- subFooter -->

       <div id="blackEnding">
      <div class="inner">
        <?php $editcontrols="pwe";?>
        <?php  $articlename = "blackEnding.txt";?>
        <?php  include('inc/codeblock.php');?>
      </div><!-- inner -->
    </div><!-- blackEnding -->
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>

</body>
</html>