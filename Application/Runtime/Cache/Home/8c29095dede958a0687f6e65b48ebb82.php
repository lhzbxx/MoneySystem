<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/moneysystem/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>新建账本页面</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">账本名字</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="请输入账本名字">
                    </div>
                </div>

                <div class="form-group">
                    <label for="textarea" class="col-sm-2 control-label">账本介绍</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="6" id="textarea" name="info">账本介绍</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">建立时间</label>
                    <div class="col-sm-10">
                        <input type="text" name="date" class="form-control" id="inputEmail3" placeholder="请输入账本建立时间">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">新建账本</button>
                        &nbsp;
                        <a href="<?php echo U('Home/Index/index','','');?>" class="btn btn-primary">回到发票列表</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>






<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/moneysystem/Public/js/bootstrap.min.js"></script>
</body>
</html>