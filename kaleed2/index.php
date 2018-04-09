<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>منصة خالد التعليمة</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="font-awesome.min.css" rel="stylesheet">
<link href="kale.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.panel.min.js"></script>
<script src="wb.carousel.min.js"></script>
<script src="skrollr.min.js"></script>
<script src="wwb12.min.js"></script>
<script>
$(document).ready(function()
{
   $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'overlay', position: 'right', toggle: true, overlay: true});
   var Carousel1Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      scalemode: 1,
      pagination: true,
      pagination_img_default: 'images/page_default.png',
      pagination_img_active: 'images/page_active.png',
      start: 0
   };
   $("#Carousel1").on('activate', function(event, index)
   {
      switch(index)
      {
      }
   });
   $("#Carousel1").on('beforeActivate', function(event, index)
   {
      switch(index)
      {
         case 0:
            AnimateCss('wb_Title1', 'transform-scale-in', 400, 500);
            AnimateCss('wb_Review1', 'transform-lightspeed-in', 800, 500);
            AnimateCss('wb_User1', 'animate-rotate-in-left', 800, 1000);
            break;
         case 1:
            AnimateCss('wb_Title2', 'transform-scale-in', 500, 500);
            AnimateCss('wb_Review2', 'transform-lightspeed-in', 800, 500);
            AnimateCss('wb_User2', 'animate-rotate-in-left', 800, 1000);
            break;
         case 2:
            AnimateCss('wb_Title3', 'transform-scale-in', 500, 500);
            AnimateCss('wb_Review3', 'transform-lightspeed-in', 800, 500);
            AnimateCss('wb_User3', 'animate-rotate-in-left', 800, 1000);
            break;
      }
   });
   $("#Carousel1").carousel(Carousel1Opts);
   $("#Carousel1_back a").click(function()
   {
      $('#Carousel1').carousel('prev');
   });
   $("#Carousel1_next a").click(function()
   {
      $('#Carousel1').carousel('next');
   });
   skrollr.init({forceHeight: false, mobileCheck: function() { return false; }, smoothScrolling: false});
   function LayoutGrid2Scroll()
   {
      var $obj = $("#wb_LayoutGrid2");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimationResume('wb_FontAwesomeIcon1');
         AnimationResume('wb_FontAwesomeIcon2');
         AnimationResume('wb_FontAwesomeIcon3');
         AnimationResume('wb_FontAwesomeIcon4');
         AnimationResume('wb_Heading1');
         AnimationResume('wb_Heading2');
         AnimationResume('wb_Heading3');
         AnimationResume('wb_Heading4');
         AnimationResume('wb_Text1');
         AnimationResume('wb_Text2');
         AnimationResume('wb_Text3');
         AnimationResume('wb_Text4');
      }
   }
   LayoutGrid2Scroll();
   $(window).scroll(function(event)
   {
      LayoutGrid2Scroll();
   });
   function FontAwesomeIcon7Scroll()
   {
      var $obj = $("#wb_FontAwesomeIcon7");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon3', 'transform-lightspeed-in', 100, 1000);
      }
   }
   FontAwesomeIcon7Scroll();
   $(window).scroll(function(event)
   {
      FontAwesomeIcon7Scroll();
   });
   function FontAwesomeIcon8Scroll()
   {
      var $obj = $("#wb_FontAwesomeIcon8");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon8', 'transform-lightspeed-in', 200, 1000);
      }
   }
   FontAwesomeIcon8Scroll();
   $(window).scroll(function(event)
   {
      FontAwesomeIcon8Scroll();
   });
   function FontAwesomeIcon10Scroll()
   {
      var $obj = $("#wb_FontAwesomeIcon10");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon10', 'transform-lightspeed-in', 300, 1000);
      }
   }
   FontAwesomeIcon10Scroll();
   $(window).scroll(function(event)
   {
      FontAwesomeIcon10Scroll();
   });
   function FontAwesomeIcon11Scroll()
   {
      var $obj = $("#wb_FontAwesomeIcon11");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon11', 'transform-lightspeed-in', 400, 1000);
      }
   }
   FontAwesomeIcon11Scroll();
   $(window).scroll(function(event)
   {
      FontAwesomeIcon11Scroll();
   });
   function FontAwesomeIcon26Scroll()
   {
      var $obj = $("#wb_FontAwesomeIcon26");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon26', 'transform-lightspeed-in', 500, 1000);
      }
   }
   FontAwesomeIcon26Scroll();
   $(window).scroll(function(event)
   {
      FontAwesomeIcon26Scroll();
   });
   function FontAwesomeIcon27Scroll()
   {
      var $obj = $("#wb_FontAwesomeIcon27");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon27', 'transform-lightspeed-in', 600, 1000);
      }
   }
   FontAwesomeIcon27Scroll();
   $(window).scroll(function(event)
   {
      FontAwesomeIcon27Scroll();
   });
   function FontAwesomeIcon28Scroll()
   {
      var $obj = $("#wb_FontAwesomeIcon28");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_FontAwesomeIcon28', 'transform-lightspeed-in', 700, 1000);
      }
   }
   FontAwesomeIcon28Scroll();
   $(window).scroll(function(event)
   {
      FontAwesomeIcon28Scroll();
   });
});
</script>
<!-- Insert Google Analytics code here --><script>
$(document).ready(function()
{
   var $countup = $('#count-up h1');
   
   $countup.each(function() 
   {
     var $obj = $(this);
     $obj.data('value', parseInt($obj.html()));
     $obj.data('done', false);
     $obj.html('0');
   });
   $(window).bind('scroll', function() 
   {
      $countup.each(function() 
      {
         var $obj = $(this);
         if (!$obj.data('done') && $(window).scrollTop() + $(window).height() >= $obj.offset().top) 
         {
            $obj.data('done', true);
            $obj.animate({scroll: 1}, 
            { 
               duration: 3000, 
               step: function(now) 
               {
                  var $obj = $(this);
                  var val = Math.round($obj.data('value') * now);
                  $obj.html(val);
               }
            });
         }
      });
   }).triggerHandler('scroll');
});
</script>
</head>
<body>
<div id="wb_PageHeader">
<div id="PageHeader">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon1">
<a href="./index.php#the_end"><div id="FontAwesomeIcon1"><i class="fa fa-user-circle-o">&nbsp;</i></div></a>
</div>
</div>
<div class="col-2">
<div id="wb_Heading1">
<h1 id="Heading1">منصة خالد التعليمة</h1>
</div>
</div>
<div class="col-3">
<div id="wb_PanelMenu1">
<a href="#PanelMenu1_markup" id="PanelMenu1">&nbsp;</a>
<div id="PanelMenu1_markup">
<ul>
   <li><a href="#"><i class="fa fa-home fa-fw">&nbsp;</i><span>Home</span></a></li>
   <li><a href="#"><i class="fa fa-user fa-fw">&nbsp;</i><span>About Me</span></a></li>
   <li><a href="#"><i class="fa fa-camera fa-fw">&nbsp;</i><span>Gallery</span></a></li>
   <li><a href="#"><i class="fa fa-pencil fa-fw">&nbsp;</i><span>Blog</span></a></li>
   <li><a href="#"><i class="fa fa-link fa-fw">&nbsp;</i><span>Links</span></a></li>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>
<div id="wb_Carousel1">
<div id="Carousel1">
<div class="frame frame-1">
<div id="wb_Title1">
<h1 id="Title1">التواصل</h1></div>
<div id="wb_Review1">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em>050505050</em></span></div>
<div id="wb_User1">
<a href="#top" title="Top"><div id="User1"><i class="fa fa-whatsapp">&nbsp;</i></div></a></div>
</div>
<div class="frame frame-2">
<div id="wb_Title2">
<h1 id="Title2">kaled q</h1></div>
<div id="wb_Review2">
&nbsp;</div>
<div id="wb_User2">
<a href="#top" title="Top"><div id="User2"><i class="fa fa-youtube">&nbsp;</i></div></a></div>
</div>
<div class="frame frame-3">
<div id="wb_Title3">
<h1 id="Title3">شرح على السناب</h1></div>
<div id="wb_Review3">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em>aaaaaaaaaaaaaaat.</em></span></div>
<div id="wb_User3">
<a href="#top" title="Top"><div id="User3"><i class="fa fa-snapchat-ghost">&nbsp;</i></div></a></div>
</div>
</div>
<div id="Carousel1_back"><a style="cursor:pointer"><img alt="Back" style="border-width:0" src="images/arrow-prev-white.png"></a></div>
<div id="Carousel1_next"><a style="cursor:pointer"><img alt="Next" style="border-width:0" src="images/arrow-next-white.png"></a></div>
</div>
<div id="wb_LayoutGrid2">
<div id="LayoutGrid2">
<div class="row">
<div class="col-1">
<div id="wb_Image4">
<img src="images/macpro_boat.png" id="Image4" alt="">
</div>
<div id="wb_Heading5">
<h1 id="Heading5">التحصيلي</h1>
</div>
<div id="wb_readmore1">
<a href="./page4.php"><div id="readmore1"><div id="readmore1_text"><span style="color:#FFFFFF;font-family:Arial;font-size:17px;"><strong>اضغط هنا</strong></span></div></div></a>
</div>
</div>
<div class="col-2">
<div id="wb_Image2">
<img src="images/hand_phone3_320.jpg" id="Image2" alt="">
</div>
<div id="wb_Heading6">
<h1 id="Heading6">القدرات </h1>
</div>
<div id="wb_readmore2">
<a href="./page3.php"><div id="readmore2"><div id="readmore2_text"><span style="color:#FFFFFF;font-family:Arial;font-size:17px;"><strong>اضغط هنا</strong></span></div></div></a>
</div>
</div>
<div class="col-3">
<div id="wb_Image3">
<img src="images/plane_graded320.jpg" id="Image3" alt="">
</div>
<div id="wb_Heading7">
<h1 id="Heading7">التعليم العام</h1>
</div>
<div id="wb_readmore3">
<a href="./page2.php"><div id="readmore3"><div id="readmore3_text"><span style="color:#FFFFFF;font-family:Arial;font-size:16px;"><strong>اضغط هنا</strong></span></div></div></a>
</div>
</div>
<div class="col-4">
<div id="wb_Image1">
<img src="images/hand_macbook9_320.jpg" id="Image1" alt="">
</div>
<div id="wb_Heading8">
<h1 id="Heading8">الجامعي</h1>
</div>
<div id="wb_readmore4">
<a href="./page1.php"><div id="readmore4"><div id="readmore4_text"><span style="color:#FFFFFF;font-family:Arial;font-size:17px;"><strong>اضغط هنا</strong></span></div></div></a>
</div>
</div>
<div class="col-5">
<div id="wb_LayoutGrid6">
<form name="LayoutGrid6" method="post" action="mailto:yourname@yourdomain.com" enctype="text/plain" id="LayoutGrid6">
<div class="row">
<div class="col-1">
<input type="text" id="Editbox2" name="name" value="" spellcheck="false" placeholder="&#1575;&#1587;&#1605; &#1575;&#1604;&#1583;&#1582;&#1604;" data--100-bottom="transform:translate(0%,0px);" data-bottom-top="transform:translate(200%,0px);">
<input type="password" id="Editbox1" name="pawwod" value="" spellcheck="false" placeholder="&#1575;&#1604;&#1585;&#1602;&#1605; &#1575;&#1604;&#1587;&#1585;&#1610;" data--100-bottom="transform:translate(0%,0px);" data-bottom-top="transform:translate(200%,0px);">
<input type="submit" id="Button1" name="" value="دخول" disabled data--100-bottom="transform:translate(0%,0px);" data-bottom-top="transform:translate(400%,0px);">
</div>
<div class="col-2">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div id="wb_count-up">
<div id="count-up">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_FontAwesomeIcon2">
<div id="FontAwesomeIcon2"><i class="fa fa-thumbs-up">&nbsp;</i></div>
</div>
<div id="wb_Heading2">
<h1 id="Heading2">200</h1>
</div>
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:13px;">نسبة</span>
</div>
</div>
<div class="col-3">
<div id="wb_FontAwesomeIcon3">
<div id="FontAwesomeIcon3"><i class="fa fa-user-o">&nbsp;</i></div>
</div>
<div id="wb_Heading3">
<h1 id="Heading3">90</h1>
</div>
<div id="wb_Text2">
<span style="color:#000000;font-family:Arial;font-size:13px;">عدد المعلمين</span>
</div>
</div>
<div class="col-4">
<div id="wb_FontAwesomeIcon4">
<div id="FontAwesomeIcon4"><i class="fa fa-users">&nbsp;</i></div>
</div>
<div id="wb_Heading4">
<h1 id="Heading4">10000</h1>
</div>
<div id="wb_Text3">
<span style="color:#000000;font-family:Arial;font-size:13px;">عدد الطلاب المسجلين</span>
</div>
</div>
<div class="col-5">
<div id="wb_FontAwesomeIcon5">
<div id="FontAwesomeIcon5"><i class="fa fa-youtube">&nbsp;</i></div>
</div>
<div id="wb_Heading9">
<h1 id="Heading9">2500</h1>
</div>
<div id="wb_Text4">
<span style="color:#000000;font-family:Arial;font-size:13px;">عدد المحاضرات المباشرة</span>
</div>
</div>
<div class="col-6">
<div id="wb_FontAwesomeIcon6">
<div id="FontAwesomeIcon6"><i class="fa fa-book">&nbsp;</i></div>
</div>
<div id="wb_Heading10">
<h1 id="Heading10">12500</h1>
</div>
<div id="wb_Text5">
<span style="color:#000000;font-family:Arial;font-size:13px;">عدد الدروس</span>
</div>
</div>
<div class="col-7">

</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon7">
<a href="./index.php"><div id="FontAwesomeIcon7"><i class="fa fa-facebook">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon8">
<a href="./index.php"><div id="FontAwesomeIcon8"><i class="fa fa-twitter">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon10">
<a href="./index.php"><div id="FontAwesomeIcon10"><i class="fa fa-instagram">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon11">
<a href="./index.php"><div id="FontAwesomeIcon11"><i class="fa fa-youtube">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon26">
<a href="./index.php"><div id="FontAwesomeIcon26"><i class="fa fa-snapchat-ghost">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon27">
<a href="./index.php"><div id="FontAwesomeIcon27"><i class="fa fa-rss">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon28">
<a href="./index.php"><div id="FontAwesomeIcon28"><i class="fa fa-linkedin">&nbsp;</i></div></a>
</div>
<div id="wb_Text17">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">خالد الشمري2008</span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>