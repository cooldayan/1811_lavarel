<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" contect="http://www.webqin.net">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>三级分销</title>
    <link rel="shortcut icon" href="{{asset('shop/images/favicon.ico')}}" />
    
    <!-- Bootstrap -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('shop/css/response.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('shop/js/jquery.min.js')}}"></script>
    <!-- <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('shop/js/style.js')}}"></script>
    <!--焦点轮换-->
    <script src="{{asset('shop/js/jquery.excoloSlider.js')}}"></script>
  </head>
  <body>
    <div class="maincont">

     @yield('content')

     <div class="footNav">
      <dl>
       <a href="/index">
        <dt><span class="glyphicon glyphicon-home"></span></dt>
        <dd>微店</dd>
       </a>
      </dl>
      <dl>
       <a href="/prolist">
        <dt><span class="glyphicon glyphicon-th"></span></dt>
        <dd>所有商品</dd>
       </a>
      </dl>
      <dl>
       <a href="/car">
        <dt><span class="glyphicon glyphicon-shopping-cart"></span></dt>
        <dd>购物车 </dd>
       </a>
      </dl>
      <dl>
       <a href="/user">
        <dt><span class="glyphicon glyphicon-user"></span></dt>
        <dd>我的</dd>
       </a>
      </dl>
      <div class="clearfix"></div>
     </div><!--footNav/-->
    </div><!--maincont-->
    
    <script>
		$(function () {
         $("#sliderA").excoloSlider();
         
		});
	</script>
  </body>
</html>