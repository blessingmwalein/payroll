<?php $__env->startSection('title', __('Manage Salary')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     <?php echo e(__('PAYROLL')); ?> 
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
      <li><a><?php echo e(__('Payroll')); ?></a></li>
      <li class="active"><?php echo e(__('Manage Salary')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo e(__('Manage Salary')); ?></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
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
          <form action="<?php echo e(url('/hrm/payroll/go')); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group<?php echo e($errors->has('user_id') ? ' has-error' : ''); ?>">
              <div class="col-sm-offset-3 col-sm-6">
                <div class="input-group margin">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                  <select name="user_id" class="form-control">
                    <option selected disabled><?php echo e(__('Select One')); ?></option>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($employee['id']); ?>"><strong><?php echo e($employee['name']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat"><i class="icon fa fa-arrow-right"></i> <?php echo e(__('Go')); ?></button>
                    </span>
                  </div>
                  <?php if($errors->has('user_id')): ?>
                  <span class="help-block">
                    <strong> &nbsp; &nbsp;<?php echo e($errors->first('user_id')); ?></strong>
                  </span>
                 <?php endif; ?>
               </div>
             </div>
           </form>
         </div>
         <!-- /. end col -->
       </div>
       <!-- /.box-body -->
       <div class="box-footer clearfix">

       </div>
       <!-- /.box-footer -->
     </div>
     <!-- /.box -->
   </section>
   <!-- /.content -->
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/hrm/payroll/manage_salary.blade.php ENDPATH**/ ?>