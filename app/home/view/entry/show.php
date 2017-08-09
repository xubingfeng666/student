<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./static/bt3/css/bootstrap.min.css">
	<link rel="stylesheet" href="./static/animate/animate.css">
</head>
<body>
<div class="panel panel-default animated fadeIn " style="margin-top: 20px;">
	  <div class="panel-heading">
			<h3 class="panel-title">学生信息</h3>
	  </div>
<!--	  <div class="panel-body">-->
          <div class="container">
			<table class="table table-hover">
				<thead>
					<tr>
                        <th>姓名</th>
                        <th>头像</th>
                        <th>性别</th>
                        <th>班级</th>
                        <th>爱好</th>
                        <th>生日</th>
					</tr>
				</thead>
				<tbody>
            <?php foreach($data as $k=>$d) : ?>
				<tr>
					<td><?php echo $d['sname']?></td>
					<td><img src="<?php echo $d['profile']?>" width="80"></td>
					<td><?php echo $d['sex'] ?></td>
					<td><?php echo $d['gname'] ?></td>
					<td><?php echo $d['hobby'] ?></td>
					<td><?php echo $d['birthday'] ?></td>
				</tr>
			<?php endforeach;?>
				</tbody>
			</table>
	  </div>
</div>
</body>
</html>