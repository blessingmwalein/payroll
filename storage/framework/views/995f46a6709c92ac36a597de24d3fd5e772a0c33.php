<?php $__env->startSection('title', __('Add Leave Application')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <?php echo e(__('Add Leave Application')); ?>

    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
      <li><a><?php echo e(__('Setting')); ?></a></li>
      <li><a href="<?php echo e(url('/hrm/leave_application')); ?>"><?php echo e(__('Add Leave Application')); ?></a></li>
      <li class="active"><?php echo e(__('Add Leave Application')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Add Leave Application')); ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <form action="<?php echo e(url('/hrm/leave_application/store')); ?>" method="post" name="add_form_leave_application">
        <?php echo e(csrf_field()); ?>

        <div class="box-body">
          <div class="row">
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
              <?php else: ?>
              <p class="text-yellow"><?php echo e(__('Enter New Application details. All field are required.')); ?> </p>
              <?php endif; ?>
            </div>
            <!-- /.Notification Box -->

            <div class="col-md-6">
              <label for="leave_category"><?php echo e(__('Leave Category ')); ?><span class="text-danger">*</span></label>
              <div class="form-group<?php echo e($errors->has('leave_category') ? ' has-error' : ''); ?> has-feedback">
                <select name="leave_category_id"  class="form-control">
                  <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                  <?php $__currentLoopData = $leave_categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($leave_category->id); ?>"> <?php echo e($leave_category->leave_category); ?> </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('leave_category')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('leave_category')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->

              <div class="col-md-6">
                <div class="form-group">
                <label><?php echo e(__('Start Date:')); ?></label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="start_date" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

              </div>
              <div class="col-md-6">
                 <div class="form-group">
                <label><?php echo e(__('End Date:')); ?></label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="end_date" class="form-control pull-right" id="datepicker2">
                </div>
                <!-- /.input group -->
              </div>
              </div>

              

             

              <div class="form-group">
                <label><?php echo e(__('Date of return from Last Leave:')); ?></label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="last_leave_date" class="form-control pull-right" id="datepicker3">
                </div>
                <!-- /.input group -->
              </div>

              <label for="last_leave_period"><?php echo e(__('Period of Last Leave')); ?> <span class="text-danger"></span></label>
              <div class="form-group<?php echo e($errors->has('last_leave_period') ? ' has-error' : ''); ?> has-feedback">
                <input type="text" name="last_leave_period" id="last_leave_period" class="form-control" value="<?php echo e(old('last_leave_period')); ?>" placeholder="<?php echo e(__('Enter Period of Last Leave..')); ?>">
                <?php if($errors->has('last_leave_period')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('last_leave_period')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->

               <label for="leave_category"><?php echo e(__('Category of Last Leave')); ?> <span class="text-danger"></span></label>
              <div class="form-group<?php echo e($errors->has('leave_category') ? ' has-error' : ''); ?> has-feedback">
                <select name="last_leave_category_id"  class="form-control">
                  <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                  <?php $__currentLoopData = $leave_categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($leave_category->id); ?>"> <?php echo e($leave_category->leave_category); ?> </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('leave_category')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('leave_category')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->

              <label for="leave_address"><?php echo e(__('Leave Address')); ?> <span class="text-danger"></span></label>
              <div class="form-group<?php echo e($errors->has('leave_address') ? ' has-error' : ''); ?> has-feedback">
                <textarea class="textarea text-description" name="leave_address"  placeholder="<?php echo e(__('Enter leave_address..')); ?>"><?php echo e(old('leave_address')); ?></textarea>
                <?php if($errors->has('leave_address')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('leave_address')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->

                <label for="during_leave"><?php echo e(__('Performing person during leave')); ?> <span class="text-danger"></span></label>
              <div class="form-group<?php echo e($errors->has('during_leave') ? ' has-error' : ''); ?> has-feedback">
                <input type="text" name="during_leave" id="during_leave" class="form-control" value="<?php echo e(old('during_leave')); ?>" placeholder="<?php echo e(__('Enter Performing person during leave..')); ?>">
                <?php if($errors->has('during_leave')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('during_leave')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->


            </div>
            <!-- /.col -->
            <div class="col-md-12">
              <label for="reason"><?php echo e(__('Reason')); ?> <span class="text-danger">*</span></label>
              <div class="form-group<?php echo e($errors->has('reason') ? ' has-error' : ''); ?> has-feedback">
                <textarea class="textarea text-description" name="reason"  placeholder="<?php echo e(__('Enter reason Details..')); ?>"><?php echo e(old('reason')); ?></textarea>
                <?php if($errors->has('reason')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('reason')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo e(url('/hrm/leave_application')); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i> <?php echo e(__('Cancel')); ?></a>
          <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo e(__('Add leave application')); ?></button>
        </div>
      </form>
    </div>
    <!-- /.box -->


  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
document.forms['add_form_leave_application'].elements['publication_status'].value = "<?php echo e(old('publication_status')); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/hrm/leave_application/add_leave_application.blade.php ENDPATH**/ ?>