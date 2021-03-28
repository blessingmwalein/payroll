<?php $__env->startSection('title', __('Add Customer')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo e(__('Customer')); ?> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
            <li><a href="<?php echo e(url('/people/clients')); ?>"><?php echo e(__('Customers')); ?></a></li>
            <li class="active"><?php echo e(__('Add Customer')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Add Customer')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo e(url('people/clients/store')); ?>" method="post" name="client_add_form">
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
                            <p class="text-yellow"><?php echo e(__('Enter client type details. All field are required.')); ?> </p>
                            <?php endif; ?>
                        </div>
                        <!-- /.Notification Box -->

                        <div class="col-md-6">
                            <label for="name"><?php echo e(__('Client Name')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('Enter name..')); ?>">
                                <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="email"><?php echo e(__('Email')); ?></label>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('Enter email address..')); ?>">
                                <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="contact_no_one"><?php echo e(__('Contact No')); ?><span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('contact_no_one') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="contact_no_one" id="contact_no_one" class="form-control" value="<?php echo e(old('contact_no_one')); ?>" placeholder="<?php echo e(__('Enter contact no..')); ?>">
                                <?php if($errors->has('contact_no_one')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('contact_no_one')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="web"><?php echo e(__('Web')); ?></label>
                            <div class="form-group<?php echo e($errors->has('web') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="web" id="web" class="form-control" value="<?php echo e(old('web')); ?>" placeholder="<?php echo e(__('Enter web..')); ?>">
                                <?php if($errors->has('web')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('web')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="gender"><?php echo e(__('Gender')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('gender') ? ' has-error' : ''); ?> has-feedback">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <option value="m"><?php echo e(__('Male')); ?></option>
                                    <option value="f"><?php echo e(__('Female')); ?></option>
                                </select>
                                <?php if($errors->has('gender')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('gender')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="datepicker"><?php echo e(__('Date of Birth')); ?></label>
                            <div class="form-group<?php echo e($errors->has('date_of_birth') ? ' has-error' : ''); ?> has-feedback">
                                <div class="input-group date">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="date_of_birth" class="form-control pull-right" value="<?php echo e(old('date_of_birth')); ?>" id="datepicker">
                                </div>
                                <?php if($errors->has('date_of_birth')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('date_of_birth')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <label for="present_address"><?php echo e(__('Address')); ?><span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('present_address') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="present_address" id="present_address" class="form-control" value="<?php echo e(old('present_address')); ?>" placeholder="<?php echo e(__('Enter address..')); ?>">
                                <?php if($errors->has('present_address')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('present_address')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="contact_no_two"><?php echo e(__('Contact No (Optional)')); ?></label>
                            <div class="form-group<?php echo e($errors->has('contact_no_two') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="contact_no_two" id="contact_no_two" class="form-control" value="<?php echo e(old('contact_no_two')); ?>" placeholder="<?php echo e(__('Enter contact no..')); ?>">
                                <?php if($errors->has('contact_no_two')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('contact_no_two')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->


                            <label for="client_type_id"><?php echo e(__('Client Type')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('client_type_id') ? ' has-error' : ''); ?> has-feedback">
                                <select name="client_type_id" id="client_type_id" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <?php $__currentLoopData = $client_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($client_type['id']); ?>"><?php echo e($client_type['client_type']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('client_type_id')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('client_type_id')); ?></strong>
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
                    <a href="<?php echo e(url('/people/clients')); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i> <?php echo e(__('Cancel')); ?></a>
                    <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo e(__('Add client')); ?></button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['client_add_form'].elements['gender'].value = "<?php echo e(old('gender')); ?>";
    document.forms['client_add_form'].elements['client_type_id'].value = "<?php echo e(old('client_type_id')); ?>";
    document.forms['client_add_form'].elements['designation_id'].value = "<?php echo e(old('designation_id')); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/people/client/add_client.blade.php ENDPATH**/ ?>