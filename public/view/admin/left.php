<div class="col-xs-3">
	<div class="list-group">
		<a href="#" class="list-group-item disabled">
			管理
		</a>
		<a href="?s=admin/grade/store" <?php if(CONTROLLER == 'grade'): ?>class="list-group-item disabled" <?php endif ?> class="list-group-item">班级</a>
        <a href="?s=admin/material/store" <?php if(CONTROLLER == 'material'): ?>class="list-group-item disabled" <?php endif ?> class="list-group-item">素材</a>

        <a href="?s=admin/student/store"<?php if(CONTROLLER == 'student'): ?>class="list-group-item disabled" <?php endif ?> class="list-group-item">学生</a>
	</div>
</div>