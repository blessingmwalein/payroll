<?php $__env->startSection('title', __('Leave Categories')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e(__('WORKING DAYS')); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
      <li><a><?php echo e(__('Setting')); ?></a></li>
      <li class="active"><?php echo e(__('Working Days')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Manage working days')); ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <form action="<?php echo e(url('/setting/working-days/update/')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="box-body">
          <!-- Notification Box -->
          <div class="col-md-12">
            <?php if(!empty(Session::get('message'))): ?>
            <div class="alert alert-success alert-dismissible" id="notification_box">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-check"></i> <?php echo e(Session::get('message')); ?>

            </div>
            <?php elseif(!empty(Session::get('exception'))): ?>
            <div class="alert alert-warning alert-dismissible" id="notification_box">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="icon fa fa-warning"></i> <?php echo e(Session::get('exception')); ?>

            </div>
            <?php endif; ?>
          </div>
          <!-- /.Notification Box -->
          <div class="col-md-12">
            <div class="form-group">
              <?php $__currentLoopData = $working_days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $working_day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <label class="checkbox-inline">
                <?php if($working_day['working_status'] == 1): ?>
                <input type="hidden" name="day[]" value="1"><input checked type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                <?php else: ?>
                <input type="hidden" name="day[]" value="0"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value">
                <?php endif; ?>
                <span><?php echo e($working_day['day']); ?></span>
              </label>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-edit"></i> <?php echo e(__('Update')); ?></button>
        </div>
      </form>
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/setting/working_day/manage_working_days.blade.php ENDPATH**/ ?>