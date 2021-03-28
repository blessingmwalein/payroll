<?php
use Carbon\Carbon;
?>

<?php $__env->startSection('title', __( 'Show Leave Application')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     <?php echo e(__('Show Leave Application')); ?> 
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__('Dashboard')); ?> </a></li>
      <li><a><?php echo e(__('Leave')); ?></a></li>
      <li><a href="<?php echo e(url('/hrm/leave_application')); ?>"><?php echo e(__('Manage Leave Application')); ?></a></li>
      <li class="active"><?php echo e(__('Details')); ?></li>
    </ol>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"> <?php echo e(__('Leave Application')); ?></h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <a href="<?php echo e(url('/hrm/leave_application')); ?>" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left"></i><?php echo e(__('Back')); ?> </a>
      <button class="btn btn-default btn-flat pull-right" onclick="printDiv('printable_area')"><i class="fa fa-print"></i><?php echo e(__('Print')); ?> </button>
      <hr>
      
      <div id="printable_area" class="table-responsive">
        <div class="text-center">
          <h4><strong><?php echo e(__('APPLICATION FOR LEAVE')); ?></strong></h4>
        </div>
      <table  class="table table-bordered table-striped">
        <tbody id="myTable">

          <tr>
            <td><?php echo e(__('Name of Applicant')); ?></td>
            <td><?php echo e($leave_application['name']); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('ID No.')); ?></td>
            <td><?php echo e($leave_application['employee_id']); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('Designation')); ?></td>
            <td><?php echo e($leave_application['designation']); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('Leave Category')); ?></td>
            <td><?php echo e($leave_application['leave_category']); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('Start Date')); ?></td>
            <td><?php echo e(date("d F Y", strtotime( $leave_application['start_date'] ))); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('End date')); ?></td>
            <td><?php echo e(date("d F Y", strtotime($leave_application['end_date']))); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('Leave Days')); ?></td>
            <td>
              <?php ($leave_days = Carbon::parse($leave_application['start_date'])->diffInDays(Carbon::parse($leave_application['end_date']))+1); ?>
              <?php echo e($leave_days); ?>

            </td>
          </tr>
          <tr>
            <td><?php echo e(__('Reason for Leave')); ?></td>
            <td><?php echo e($leave_application['reason']); ?></td>
          </tr>
           <tr>
            <td><?php echo e(__('Date of return from Last Leave')); ?></td>
            <td><?php echo e(date("d F Y", strtotime($leave_application['last_leave_date']))); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('Period of Last Leave')); ?></td>
            <td><?php echo e($leave_application['last_leave_period']); ?> Days</td>
          </tr>
          <tr>
            <td><?php echo e(__('Category of Last Leave')); ?></td>
            <td><?php echo e($leave_application['leave_category']); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('Leave Address')); ?></td>
            <td><?php echo e($leave_application['leave_address']); ?></td>
          </tr>
          <tr>
            <td><?php echo e(__('Performing person during leave')); ?></td>
            <td"><?php echo e($leave_application['during_leave']); ?> Days</td>
          </tr>
   
          <tr>
            <td><?php echo e(__('Apply date')); ?></td>
            <td><?php echo e(date("D d F Y h:ia", strtotime($leave_application['created_at']))); ?></td>
          </tr>
        </tbody>
      </table>

      <div class="signatur">
        <strong class="signleft"><?php echo e(__('Signature of Applicant')); ?></strong>
      </div>

      <div class="oficsign"> 
        <h4><strong><?php echo e(__('For Office Use only')); ?></strong></h4>
      </div>
     
      <table class="table table-bordered table-striped">

        <tbody>
        
          <tr>
            <td colspan="3"><strong><?php echo e(__('ACTION ON APPLICATION')); ?></strong></td>
            
          </tr>

          <tr>
            <td>
              <div>
              <h4> <?php echo e(__('APPROVED FOR')); ?></h4>
              <p>...........<?php echo e(__('Days With Pay')); ?></p>              
              <p>...........<?php echo e(__('Days without pay')); ?></p>              
              <p>...........<?php echo e(__('others')); ?></p>
            </div>
            </td>
            
            <td>
              <div class="dueappr">
            <h4> <?php echo e(__('DISAPPROVED DUE TO')); ?> </h4>
          </div>
          </td>

          <td>
              <div class="remark">
            <h4> <?php echo e(__('Remarks')); ?> </h4>
          </div>
          </td>


          </tr>
        </tbody>
      </table>
      <br>
      <hr>
      <div>
        <strong><?php echo e(__('Head of Chamber')); ?></strong>
      </div>
    </div><!--pintable-->
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
</section>
<!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/hrm/leave_application/show_leave_application.blade.php ENDPATH**/ ?>