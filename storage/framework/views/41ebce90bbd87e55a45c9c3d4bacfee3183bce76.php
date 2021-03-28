<?php $__env->startSection('title', __('Manage Salary')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     <?php echo e(__('PAYROLL')); ?> 
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__('Dashboard')); ?> </a></li>
      <li><a><?php echo e(__('Payroll')); ?></a></li>
      <li class="active"><?php echo e(__('Manage Salary')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- Default box -->
        <div class="box box-primary">
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
              <form class="form-horizontal" name="employee_select_form" action="<?php echo e(url('/hrm/payroll/go')); ?>" method="post">
                <?php echo e(csrf_field()); ?>


                <div class="form-group<?php echo e($errors->has('user_id') ? ' has-error' : ''); ?>">
                  <label for="user_id" class="col-sm-3 control-label"><?php echo e(__('Employee Name')); ?></label>
                  <div class="col-sm-6">
                    <select name="user_id" class="form-control" id="user_id">
                      <option selected disabled><?php echo e(__('Select One')); ?></option>
                      <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($employee['id']); ?>"><?php echo e($employee['name']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('user_id')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('user_id')); ?></strong>
                    </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="form-group<?php echo e($errors->has('basic_salary') ? ' has-error' : ''); ?>">
                  <div class=" col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-info btn-flat"><i class="icon fa fa-arrow-right"></i> <?php echo e(__('Go')); ?></button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /. end col -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer clearfix"></div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.end.col -->

      <form name="employee_salary_form" id="employee_salary_form" action="<?php echo e(url('/hrm/payroll/store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>


        <input type="hidden" name="user_id" value="<?php echo e($employee_id); ?>">

        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e(__('Salary Details')); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group<?php echo e($errors->has('employee_type') ? ' has-error' : ''); ?>">
                  <label for="employee_type" class="col-sm-3 control-label"><?php echo e(__('Employee Type')); ?></label>
                  <div class="col-sm-6">
                    <select name="employee_type" class="form-control" id="employee_type">
                      <option selected disabled><?php echo e(__('Select One')); ?></option>
                      <option value="1"><?php echo e(__('Provision')); ?></option>
                      <option value="2"><?php echo e(__('Permanent')); ?></option>
                      <option value="3"><?php echo e(__('Full Time')); ?></option>
                      <option value="4"><?php echo e(__('Part Time')); ?></option>
                      <option value="5"><?php echo e(__('Adhoc')); ?></option>
                    </select>
                    <?php if($errors->has('employee_type')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('employee_type')); ?></strong>
                    </span>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="form-group<?php echo e($errors->has('basic_salary') ? ' has-error' : ''); ?>">
                  <label for="basic_salary" class="col-sm-3 control-label"><?php echo e(__('Basic Salary')); ?></label>
                  <div class="col-sm-6">
                    <input type="number" name="basic_salary" class="form-control" id="basic_salary" value="<?php echo e(old('basic_salary')); ?>" placeholder="<?php echo e(__('Enter basic salary..')); ?>">
                    <?php if($errors->has('basic_salary')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('basic_salary')); ?></strong>
                    </span>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
        <!-- /.end.col -->
        <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e(__('Allowances')); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group<?php echo e($errors->has('house_rent_allowance') ? ' has-error' : ''); ?>">
                <label for="house_rent_allowance"><?php echo e(__('House Rent Allowance')); ?></label>
                <input type="number" name="house_rent_allowance" value="<?php echo e(old('house_rent_allowance')); ?>" class="form-control" id="house_rent_allowance" placeholder="<?php echo e(__('Enter house rent allowance..')); ?>">
                <?php if($errors->has('house_rent_allowance')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('house_rent_allowance')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <div class="form-group<?php echo e($errors->has('medical_allowance') ? ' has-error' : ''); ?>">
                <label for="medical_allowance"><?php echo e(__('Medical Allowance')); ?></label>
                <input type="number" name="medical_allowance" value="<?php echo e(old('medical_allowance')); ?>" class="form-control" id="medical_allowance" placeholder="<?php echo e(__('Enter medical allowance..')); ?>">
                <?php if($errors->has('medical_allowance')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('medical_allowance')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <div class="form-group<?php echo e($errors->has('special_allowance') ? ' has-error' : ''); ?>">
                <label for="special_allowance"><?php echo e(__('Special Allowance')); ?></label>
                <input type="number" name="special_allowance" value="<?php echo e(old('special_allowance')); ?>" class="form-control" id="special_allowance" placeholder="<?php echo e(__('Enter special allowance..')); ?>">
                <?php if($errors->has('special_allowance')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('special_allowance')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <div class="form-group<?php echo e($errors->has('provident_fund_contribution') ? ' has-error' : ''); ?>">
                <label for="provident_fund_contribution"><?php echo e(__('Provident Fund Contribution')); ?></label>
                <input type="number" name="provident_fund_contribution" value="<?php echo e(old('provident_fund_contribution')); ?>" class="form-control" id="provident_fund_contribution" placeholder="<?php echo e(__('Enter provident fund contribution..')); ?>">
                <?php if($errors->has('provident_fund_contribution')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('provident_fund_contribution')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <div class="form-group<?php echo e($errors->has('other_allowance') ? ' has-error' : ''); ?>">
                <label for="other_allowance"><?php echo e(__('Other Allowance')); ?></label>
                <input type="number" name="other_allowance" value="<?php echo e(old('other_allowance')); ?>" class="form-control" id="other_allowance" placeholder="<?php echo e(__('Enter other allowance..')); ?>">
                <?php if($errors->has('other_allowance')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('other_allowance')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.end.col -->
        <div class="col-md-6">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e(__('Deductions')); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group<?php echo e($errors->has('tax_deduction') ? ' has-error' : ''); ?>">
                <label for="tax_deduction"><?php echo e(__('Tax Deduction')); ?></label>
                <input type="number" name="tax_deduction" value="<?php echo e(old('tax_deduction')); ?>" class="form-control" id="tax_deduction" placeholder="<?php echo e(__('Enter tax deduction..')); ?>">
                <?php if($errors->has('tax_deduction')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('tax_deduction')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <div class="form-group<?php echo e($errors->has('provident_fund_deduction') ? ' has-error' : ''); ?>">
                <label for="provident_fund_deduction"><?php echo e(__('Provident Fund Deduction')); ?></label>
                <input type="number" name="provident_fund_deduction" value="<?php echo e(old('provident_fund_deduction')); ?>" class="form-control" id="provident_fund_deduction" placeholder="<?php echo e(__('Enter provident fund deduction..')); ?>">
                <?php if($errors->has('provident_fund_deduction')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('provident_fund_deduction')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <div class="form-group<?php echo e($errors->has('other_deduction') ? ' has-error' : ''); ?>">
                <label for="other_deduction"><?php echo e(__('Other Deduction')); ?></label>
                <input type="number" name="other_deduction" value="<?php echo e(old('other_deduction')); ?>" class="form-control" id="other_deduction" placeholder="<?php echo e(__('Enter other deduction..')); ?>">
                <?php if($errors->has('other_deduction')): ?>
                <span class="help-block">
                  <strong><?php echo e($errors->first('other_deduction')); ?></strong>
                </span>
                <?php endif; ?>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.end.col -->

        <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e(__('Provident Fund')); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label for="total_provident_fund"><?php echo e(__('Total Provident Fund')); ?></label>
                <input type="number" class="form-control" id="total_provident_fund" readonly>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.end.col -->

        <div class="col-md-offset-6 col-md-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo e(__('Total Salary Details')); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label for="gross_salary"><?php echo e(__('Gross Salary')); ?></label>
                <input type="number" disabled class="form-control" id="gross_salary">
              </div>
              <div class="form-group<?php echo e($errors->has('total_deduction') ? ' has-error' : ''); ?>">
                <label for="total_deduction"><?php echo e(__('Total Deduction')); ?></label>
                <input type="number" disabled class="form-control" id="total_deduction">
              </div>
              <div class="form-group">
                <label for="net_salary"><?php echo e(__('Net Salary')); ?></label>
                <input type="number" disabled class="form-control" id="net_salary">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-flat pull-right"><i class="fa fa-save"></i> <?php echo e(__('Save Details')); ?></button>
            </div>
          </div>
        </div>
        <!-- /.end.col -->

      </form>

    </div>
  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
  // For Kepp Data After Reload
  document.forms['employee_select_form'].elements['user_id'].value = "<?php echo e($employee_id); ?>";

  <?php if(!empty(old('employee_type'))): ?>
  document.forms['employee_salary_form'].elements['employee_type'].value = "<?php echo e(old('employee_type')); ?>";
  <?php endif; ?>

  $(document).ready(function(){
    calculation();
  });


  //For Calculation
  $(document).on("keyup", "#employee_salary_form", function() {
    calculation();
  });

  function calculation() {
    var sum = 0;
    var basic_salary = $("#basic_salary").val();
    var house_rent_allowance = $("#house_rent_allowance").val();
    var medical_allowance = $("#medical_allowance").val();
    var special_allowance = $("#special_allowance").val();
    var provident_fund_contribution = $("#provident_fund_contribution").val();
    var other_allowance = $("#other_allowance").val();
    var tax_deduction = $("#tax_deduction").val();
    var provident_fund_deduction = $("#provident_fund_deduction").val();
    var other_deduction = $("#other_deduction").val();

    var gross_salary = (+basic_salary + +house_rent_allowance + +medical_allowance + +special_allowance + +other_allowance);

    var total_deduction = (+tax_deduction + +provident_fund_deduction + +other_deduction);

    $("#total_provident_fund").val(+provident_fund_contribution + +provident_fund_deduction);

    $("#gross_salary").val(gross_salary);
    $("#total_deduction").val(total_deduction);
    $("#net_salary").val(+gross_salary - +total_deduction);
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/hrm/payroll/create_salary.blade.php ENDPATH**/ ?>