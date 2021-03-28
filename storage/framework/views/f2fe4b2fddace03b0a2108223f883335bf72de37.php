<?php $__env->startSection('title', __('Employee')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo e(__('Employee')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
            <li><a><?php echo e(__('Employee')); ?></a></li>
            <li class="active"><?php echo e(__('Employee')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Manage Employee')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-3">
                <a href="<?php echo e(url('/people/employees/create')); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i><?php echo e(__(' Add')); ?> </a>
            </div>
            <div  class="col-md-3">
              <button type="button" class="tip btn btn-primary btn-flat" title="Print" data-original-title="Label Printer" onclick="printDiv('printable_area')">
                    <i class="fa fa-print"></i>
                    <span class="hidden-sm hidden-xs"> <?php echo e(__('Print')); ?></span>
                </button>
            </div>
                
                <div  class="col-md-6">
                    <input type="text" id="myInput" class="form-control" placeholder="<?php echo e(__('Search..')); ?>">
                </div>

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
        <div id="printable_area" class="col-md-12 table-responsive">
               <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><?php echo e(__(' SL#')); ?></th>
                            <th><?php echo e(__(' ID')); ?></th>
                            <th><?php echo e(__(' Name')); ?></th>
                            <th><?php echo e(__(' Designation')); ?></th>
                            <th><?php echo e(__(' Contact No')); ?></th>
                            <th class="text-center"><?php echo e(__('Added')); ?></th>
                            <th class="text-center"><?php echo e(__('Actions')); ?></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <?php $sl = 1; ?>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($sl++); ?></td>
                            <td><?php echo e($employee['employee_id']); ?></td>
                            <td><?php echo e($employee['name']); ?></td>
                            <td><?php echo e($employee['designation']); ?></td>
                            <td><?php echo e($employee['contact_no_one']); ?></td>
                            <td class="text-center"><?php echo e(date("d F Y", strtotime($employee['created_at']))); ?></td>
                           
                            <td class="text-center">
                               <a href="<?php echo e(url('/people/employees/edit/' . $employee['id'])); ?>"><i class="icon fa fa-edit"></i> <?php echo e(__('Edit')); ?></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/people/employee/manage_employees.blade.php ENDPATH**/ ?>