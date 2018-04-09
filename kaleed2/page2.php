<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>منصة خالد التعليمة</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="kale.css" rel="stylesheet">
<link href="page2.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function()
{
   $('#MegaMenu1 .submenu ul li h2 a').addClass('ui-widget-header');
   $('#MegaMenu1 .submenu ul li a').hover(function()
   {
      $(this).addClass('ui-state-hover');
   }, function()
   {
      $(this).removeClass('ui-state-hover');
   });
   $('.ui-state-default').hover(function()
   {
      $(this).addClass('ui-state-hover');
   }, function()
   {
      $(this).removeClass('ui-state-hover');
   });
   $('#MegaMenu1 li').hover(function()
   {
      var top = $(this).find('.button').outerHeight();
      $(this).find('.submenu').css( {'top': top });
      $(this).find('.submenu').show();
      var maxWidth = 0;
      $(this).find('ul').each(function()
      {
         $(this).find('li').each(function()
         {
            $(this).css('width', 'auto');
            if ($(this).width() > maxWidth)
               maxWidth = $(this).width();
         });
      });
      $(this).find('ul').each(function()
      {
         $(this).find('li').width(maxWidth);
         $(this).css({'width' : maxWidth+4});
      });
      if ($(this).find('.row').length > 0 )
      {
         var maxRowWidth = 0;
         $(this).find('.row').each(function()
         {
            var width = 0;
            $(this).find('ul').each(function()
            {
               width += $(this).width();
            });
            if (width > maxRowWidth)
            {
               maxRowWidth = width;
            }
         });
         $(this).find('.submenu').css({'width' : maxRowWidth});
         $(this).find('.row:last').css({'margin': '0'});
      }
      else
      {
         var width = 0;
         $(this).find('ul').each(function()
         {
            width += $(this).width();
         });
         $(this).find('.submenu').css({'width' : width});
      }
      $(this).find('.submenu').slideDown();
   }, function()
   {
      $(this).find('.submenu').hide();
   })
   $('#MegaMenu1 li .submenu').hide();
});
</script>
</head>
<body>
<div id="wb_MegaMenu1">
   <ul class="ui-widget" id="MegaMenu1">
      <li>
      <a href="#" class="button ui-state-default"><span class="ui-icon"></span>&#1575;&#1604;&#1605;&#1578;&#1608;&#1587;&#1591;</a>
      <div class="submenu ui-widget-content">
      <div class="row">
         <ul>
            <li><h2>اول متوسط</h2></li>
            <li><a href=""><span class="ui-icon"></span>علوم</a></li>
            <li><a href=""><span class="ui-icon"></span>رياضيات</a></li>
            <li><a href=""><span class="ui-icon"></span>انجليزي</a></li>
            <li><a href=""><span class="ui-icon"></span>عربي</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>ثاني متوسط</h2></li>
            <li><a href=""><span class="ui-icon"></span>علوم</a></li>
            <li><a href=""><span class="ui-icon"></span>عربي</a></li>
            <li><a href=""><span class="ui-icon"></span>انحليزي</a></li>
            <li><a href=""><span class="ui-icon"></span>رياضيات</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>ثالث متوسط</h2></li>
            <li><a href=""><span class="ui-icon"></span>علوم</a></li>
            <li><a href=""><span class="ui-icon"></span>عربي</a></li>
            <li><a href=""><span class="ui-icon"></span>رياضيات</a></li>
            <li><a href=""><span class="ui-icon"></span>انجليزي</a></li>
         </ul>
      </div>
      </div>
      </li>
      <li>
      <a href="#" class="button ui-state-default"><span class="ui-icon"></span>&#1575;&#1604;&#1579;&#1575;&#1606;&#1608;&#1610;</a>
      <div class="submenu ui-widget-content">
      <div class="row">
         <ul>
            <li><h2>الاول الثانوي</h2></li>
            <li><a href=""><span class="ui-icon"></span>كيمياء</a></li>
            <li><a href=""><span class="ui-icon"></span>فيزياء</a></li>
            <li><a href=""><span class="ui-icon"></span>انجليزي</a></li>
            <li><a href=""><span class="ui-icon"></span>رياضيات</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>الثاني الثانوي</h2></li>
            <li><a href=""><span class="ui-icon"></span>كيمياء</a></li>
            <li><a href=""><span class="ui-icon"></span>فيزياء</a></li>
            <li><a href=""><span class="ui-icon"></span>رياضيات</a></li>
            <li><a href=""><span class="ui-icon"></span>انجليزي</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>الثالث الثانوي</h2></li>
            <li><a href=""><span class="ui-icon"></span>ح</a></li>
            <li><a href=""><span class="ui-icon"></span>خ</a></li>
            <li><a href=""><span class="ui-icon"></span>فففف</a></li>
            <li><a href=""><span class="ui-icon"></span>فقف</a></li>
         </ul>
      </div>
      </div>
      </li>
      <li>
      <a href="#" class="button ui-state-default"><span class="ui-icon"></span>&#1575;&#1604;&#1575;&#1576;&#1578;&#1583;&#1575;&#1574;&#1610;</a>
      <div class="submenu ui-widget-content">
      <div class="row">
         <ul>
            <li><h2>اول</h2></li>
            <li><a href=""><span class="ui-icon"></span>ع</a></li>
            <li><a href=""><span class="ui-icon"></span>ر</a></li>
            <li><a href=""><span class="ui-icon"></span>ان</a></li>
            <li><a href=""><span class="ui-icon"></span>ع</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>ثاني</h2></li>
            <li><a href=""><span class="ui-icon"></span>ع</a></li>
            <li><a href=""><span class="ui-icon"></span>رr</a></li>
            <li><a href=""><span class="ui-icon"></span>ان</a></li>
            <li><a href=""><span class="ui-icon"></span>ع</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>ثالث</h2></li>
            <li><a href=""><span class="ui-icon"></span>ع</a></li>
            <li><a href=""><span class="ui-icon"></span>ان</a></li>
            <li><a href=""><span class="ui-icon"></span>هه</a></li>
            <li><a href=""><span class="ui-icon"></span>م</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>رابع</h2></li>
            <li><a href=""><span class="ui-icon"></span>ععع</a></li>
            <li><a href=""><span class="ui-icon"></span>ر</a></li>
            <li><a href=""><span class="ui-icon"></span>ا</a></li>
            <li><a href=""><span class="ui-icon"></span>لل</a></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>خامس</h2></li>
         </ul>
      </div>
      <div class="row">
         <ul>
            <li><h2>سادس</h2></li>
         </ul>
      </div>
      </div>
      </li>
   </ul>
</div>
<div id="wb_Text1">
<span style="color:#000000;font-family:Arial;font-size:32px;">التعليييم العام</span></div>
</body>
</html>