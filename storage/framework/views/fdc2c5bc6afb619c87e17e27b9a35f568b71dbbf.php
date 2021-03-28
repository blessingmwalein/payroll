<?php $__env->startSection('title', __('Notice')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo e(__('NOTICE')); ?> 
        </h1>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> <?php echo e(__('Dashboard')); ?></a></li>
            <li><a href=""><?php echo e(__('Notice')); ?></a></li>
            <li class="active"><?php echo e(__('Details')); ?></li>
        </ol>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $__currentLoopData = $notices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">

        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b><?php echo e(__('Created At:')); ?> <br> <?php echo e(date("D d F Y h:ia", strtotime($notice['created_at']))); ?> </b> 
                        </li>
                        <li class="list-group-item">
                            <b><?php echo e(__('Created By:')); ?> <br> <?php echo e($notice['name']); ?> </b> 
                        </li>
                       
                    </ul>
                    
                 <strong><i class="fa fa-info-circle margin-r-5"></i> <?php echo e(__('Status')); ?></strong>

                 <p>
                    
                    <span class="label label-success"><?php echo e(__('notice')); ?></span>

                </p>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#job_details" data-toggle="tab" aria-expanded="true"><?php echo e(__('Notice')); ?></a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="job_details">

                    <!-- notice details -->
                    <table  class="table table-bordered table-striped">
                        <tbody id="myTable">
                            <tr>
                                <td><strong><?php echo e($notice['notice_title']); ?></strong></td>
                            </tr>
                            
                            <tr>
                                <td><?php echo e($notice['description']); ?></td>
                                
                            </tr>
                            
                            </tbody>
                        </table>
                        <!-- /.notice details -->
                    </div>
                  
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div>
            <?php echo e($notices->links()); ?>

        </div>

    </section>
    <!-- /.content -->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/hrm/notice/show_notice.blade.php ENDPATH**/ ?>