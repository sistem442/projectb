<!DOCTYPE html>
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2015 by anonymous (http://jsbin.com/oyepoz/19/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
<html>
<head>
  
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<meta charset=utf-8 />
<title>JS Bin</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

  
<style>
  
  ul{list-style:none;}
  a{text-decoration:none;}

  .more{
    color:#aaccdd;
    cursor:pointer;
  }

</style>
<style id="jsbin-css">
#rtcontent{
     
     list-style-type:none;
     margin:0;
     padding-left:18px;
     padding-right:14px;
     width:240px;

}

#rtcontent li{
     height:20px;
     background-color:#003366;
     text-align:center;
     font-family:Times New Roman; serif;
     font-weight:bold;
     font-size: 11pt;
}     

#rtcontent li a{
     display:block;
     text-decoration:none;
     color:white;
     margin:5px;
     padding:0px;
}

#rtcontent li a:hover,a:active{
     background-color:#006699;
}
</style>
</head>
<body>
<div id="rtcontent">
<ul class="term-list">
  <li class="term-item "><a href="#">Item 1</a></li>
<li class="term-item "><a href="#">Item 2</a></li>
<li class="term-item "><a href="#">Item 3</a></li>
<li class="term-item "><a href="#">Item 4</a></li>
<li class="term-item "><a href="#">Item 5</a></li>
<li class="term-item "><a href="#">Item 6</a></li>
<li class="term-item "><a href="#">Item 7</a></li>
</ul>
</div>

  
  
<script id="jsbin-javascript">
$(document).ready(function(){
$('ul.term-list').each(function(){ 
  var LiN = $(this).find('li').length;
  if( LiN > 4){    
    $('li', this).eq(3).nextAll().hide().addClass('extras');
    $(this).append('<li class="more" style="text-align: right; padding-right: 10px; font-style: italic">More...</li>');    
  }
});
$('ul.term-list').on('click','.more',function(){
  $this = $(this);
  var text = ($this.text() == 'Less...') ? 'More...' : 'Less...';
  $this.text(text);  
  $(this).siblings('li.extras').slideToggle();
});
});
</script>
</body>
</html>