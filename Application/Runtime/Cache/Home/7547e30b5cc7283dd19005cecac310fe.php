<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>账本列表</title>

    <!-- Bootstrap -->
    <link href="/MoneySystem/Public/css/bootstrap.min.css" rel="stylesheet">

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
            <h2>账本列表</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <table class="table table-striped">
                <tr>
                    <th>账本名称</th>
                    <th>账本介绍</th>
                    <th>建立时间</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($d["name"]); ?></td>
                        <td><?php echo ($d["info"]); ?></td>
                        <td><?php echo ($d["date"]); ?></td>
                        <td><a href="<?php echo U('Home/Index/checkAdd','','');?>?fid=<?php echo ($d["id"]); ?>" class="btn btn-primary btn-xs">添加发票</a> </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>

        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/MoneySystem/Public/js/bootstrap.min.js"></script>
</body>
</html>