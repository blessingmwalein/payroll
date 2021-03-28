<?php $__env->startSection('title', __('Change Password')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo e(__('PASSWORD')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
            <li class="active"><?php echo e(__('Change Password')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Change Password')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo e(url('/profile/update-password')); ?>" method="post">
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
                            <p class="text-yellow"><?php echo e(__('Enter file details. All field are required.')); ?> </p>
                            <?php endif; ?>
                        </div>
                        <!-- /.Notification Box -->
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="password"><?php echo e(__('New Password ')); ?><span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?> has-feedback">
                                <input type="password" name="password" id="password" class="form-control" value="<?php echo e(old('password')); ?>" placeholder="<?php echo e(__('Enter new password..')); ?>">
                                <?php if($errors->has('password')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- end/Row-->

                    <div class="row">
                        <div class="col-md-6">
                            <label for="password_confirmation"><?php echo e(__('Confirm Password')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?> has-feedback">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="<?php echo e(old('password_confirmation')); ?>" placeholder="<?php echo e(__('Enter confirm password..')); ?>">
                                <?php if($errors->has('password_confirmation')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- end/Row-->
                    
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-edit"></i><?php echo e(__('Edit')); ?> </button>
            </div>
        </form>
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/profile/change_password.blade.php ENDPATH**/ ?>