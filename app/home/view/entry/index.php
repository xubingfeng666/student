<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://g.tbcdn.cn/mtb/lib-flexible/0.3.4/??flexible_css.js,flexible.js"></script>
    <link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./static/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="./static/animate/swiper-3.4.2.min.css"/>


</head>
<body>
    <div class="animated fadeInUp" >
<h1 style="text-align: center" class="" duration="2s" swiper-animate-delay="2s">学生信息</h1>
<table class="table table-hover">
	<thead>
		<tr>
			<th>编号</th>
            <th>姓名</th>
            <th>头像</th>
            <th>性别</th>
            <th>班级</th>
            <th>详细信息</th>
		</tr>
	</thead>
	<tbody>
    <?php  foreach($data as $k=> $d) : ?>
		<tr>
			<td><?php echo $k+1?></td>
            <td><?php echo $d['sname']?></td>
            <td><img src="<?php echo $d['profile']?>" width="80"></td>
            <td><?php echo $d['sex'] ?></td>
            <td><?php echo $d['gname'] ?></td>
            <td><a href="?s=home/entry/show&sid=<?php echo $d['sid'] ?>">详细信息</a></td>
		</tr>
    <?php endforeach ?>
	</tbody>
</table>
</div>
</body>
</html>