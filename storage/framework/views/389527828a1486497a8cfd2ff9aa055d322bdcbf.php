<?php $__env->startSection('title', __('Salary Statement')); ?>

<?php $__env->startSection('main_content'); ?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo e(__('Salary Statement')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
            <li><a><?php echo e(__('Increment')); ?></a></li>
            <li class="active"><?php echo e(__('Salary Statement')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Salary Statement')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="btn-body">
                <a href="<?php echo e(url('hrm/salary/statement/search')); ?>" class="tip btn btn-primary btn-flat"><i class="fa fa-plus"></i> <?php echo e(__('add new Salary Statement')); ?></a>



                    <form action="<?php echo e(url('/hrm/salary/statement/preview')); ?>" method="get">

                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="emp_id" value="<?php echo e($empid); ?>">
                        <input type="hidden" name="date1" value="<?php echo e($startdate); ?>">
                        <input type="hidden" name="date2" value="<?php echo e($enddate); ?>">
                        <button type="submit" class="tip btn btn-primary btn-flat"><?php echo e(__('Preview')); ?> </button>
                        
                    </form>


                 <form action="<?php echo e(url('/hrm/salary/statement/pdf')); ?>" method="get">
                        <?php echo e(csrf_field()); ?>

                       <input type="hidden" name="emp_id" value="<?php echo e($empid); ?>">
                        <input type="hidden" name="date1" value="<?php echo e($startdate); ?>">
                        <input type="hidden" name="date2" value="<?php echo e($enddate); ?>">
                        <button type="submit" class="tip btn btn-primary btn-flat"><?php echo e(__('PDF')); ?> </button>
                        
                    </form>
                </div>
                <hr>

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


                <div class="st-left-body">
                    <h4>
                    <?php $users= \App\User::all()->where('employee_id', $empid);
                    foreach($users as $user){
                    $empname=$user->name;
                    $idno=$user->id_number;
                    $joindate=$user->joining_date;
                    $contact=$user->contact_no_one;
                    $datebirth=$user->date_of_birth;
                    $designation=$user->designation_id;
                    $prsaddress=$user->present_address;
                    $prmaddress=$user->permanent_address;
                    }
                    
                    ?>
                    <?php echo e(__('EMP ID NO:')); ?> <?php echo e($idno); ?><br>
                    <?php echo e(__('Name: ')); ?><?php echo e($empname); ?><br>
                    <?php $desig= \App\Designation::find($designation)->designation;?>
                    <?php echo e(__('Designation: ')); ?><?php echo e($desig); ?><br>
                    <?php echo e(__('Date of Birth: ')); ?><?php echo e($datebirth); ?><br>
                    <?php echo e(__('Joining Date: ')); ?><?php echo e($joindate); ?><br>
                    <?php echo e(__('Contact: ')); ?><?php echo e($contact); ?><br>
                    </h4>
                </div>
                <div class="st-center-body">
                    <div class="img-body"><img src="<?php echo e(asset('public/profile_picture/'.auth()->user()->avatar)); ?>" class="img"></div>
                    <h2><?php echo e(__('Salary Statement')); ?></h2>
                    <center><b><?php echo e(date("F Y", strtotime($startdate))); ?> to <?php echo e(date("F Y", strtotime($enddate))); ?><br>
                    <?php $users= \App\User::all()->where('employee_id', $empid);
                    foreach($users as $user){
                    $empname=$user->name;
                    }
                    
                    ?>
                    
                    </b></center>
                </div>
                <div class="st-right-body">
                    <h4>
                    <?php echo e(__('Present Address: ')); ?><?php echo e($prsaddress); ?><br>
                    <?php echo e(__('Permanent Address: ')); ?><?php echo e($prmaddress); ?>

                    
                    </h4>
                </div>



               <div id="printable_area" class="col-md-12 table-responsive">
               <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><?php echo e(__('SL')); ?></th>
                            <th><?php echo e(__('PAID ID NO')); ?></th>
                            <th><?php echo e(__('Pay Month')); ?></th>
                            <th><?php echo e(__('Pay By')); ?></th>
                            <th><?php echo e(__('Note')); ?></th>
                            <th><?php echo e(__('Received Salary')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php ($sl = 1); ?>
                        <?php $__currentLoopData = $salarysheets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($sl ++); ?></td>
                            <td>PRLL<?php echo e($payroll->id); ?></td>
                            <td><?php echo e(date("d F Y", strtotime($payroll->payment_month))); ?></td>
                            <td><?php echo e(Auth::user()->name); ?></td>
                            <td><?php echo e($payroll->note); ?></td>
                            <td><?php echo e($payroll->gross_salary); ?></td>
                           

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="4"></td>
                            <th><?php echo e(__('Total')); ?></th>
                            <th><?php echo e($datetotal); ?></th>
                        </tr>

                    </tbody>
                </table>
            </div><!--printable-->



            <div class="sign-body-l">-----------------------------------<br><?php echo e(__('Employee')); ?></div>
            <div class="sign-body-r">-----------------------------------<br><?php echo e(__('Authorized')); ?></div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/hrm/increment/salaryStatementView.blade.php ENDPATH**/ ?>