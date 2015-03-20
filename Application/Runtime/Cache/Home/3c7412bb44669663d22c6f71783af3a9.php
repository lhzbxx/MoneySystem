<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>发票登记页面</title>

    <!-- Bootstrap -->
    <link href="/moneysystem/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        function todayDate () {
            var d = new Date()
            $("#date").val(d.getYear()+'-'+d.getMonth()+'-'+d.getDate());
        }
    </script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>发票登记页面</h2>
        </div>
    </div>
    <div class="row" align="center">
        <div class="col-md-4 col-md-offset-4">
            <form class="form-horizontal" action="<?php echo ($action_url); ?>" method="post" enctype ="multipart/form-data" >
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">金额</label>
                    <div class="col-sm-10">
                        <input type="text" name="amount" class="form-control" id="inputEmail3" placeholder="请输入发票金额">
                    </div>
                </div>

                <div class="form-group">
                    <label for="textarea" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="6" id="textarea" name="info" placeholder="备注信息"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">消费时间</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" name="date" class="form-control" id="date" placeholder="请输入发票消费时间">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default" aria-expanded="false" onclick="todayDate()">今日</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">账本</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" name="book" class="form-control" id="inputEmail3" placeholder="请选择账本或添加新账本">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">选择 <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li><?php echo ($d); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile" class="col-sm-2 control-label">发票上传</label>
                    <div class="col-sm-10">
                        <input type="file" name="file" accept="image/*" id="exampleInputFile">
                        <p class="help-block">（把扫描好的发票从这里上传到服务器）</p>
                    </div>

                </div>

                <div class="form-group">
                    <div class="col-col-sm-10">
                        <button type="submit" class="btn btn-primary">提交</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo U('Home/Index/index','','');?>" class="btn btn-primary">返回</a>
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