<?php $__env->startSection('title', __('Add Employee')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo e(__(' EMPLOYEE')); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i><?php echo e(__('Dashboard')); ?> </a></li>
            <li><a href="<?php echo e(url('/people/employees')); ?>"><?php echo e(__('Employee')); ?></a></li>
            <li class="active"><?php echo e(__('Add Employee')); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo e(__('Add Employee')); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo e(url('people/employees/store')); ?>" method="post" name="employee_add_form">
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
                            <p class="text-yellow"><?php echo e(__('Enter team member details. All (*)field are required. (Default password for added user is 12345678)')); ?></p>
                            <?php endif; ?>
                        </div>
                        <!-- /.Notification Box -->

                        <?php 
                       

                      $users = \App\User::orderBy('id', 'desc')->first();
                             $sl=$users->id;

                        ?>

                        <div class="col-md-6">
                            <label for="employee_id"><?php echo e(__('ID')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('employee_id') ? ' has-error' : ''); ?> has-feedback">

                                <input type="hidden" name="employee_id" value="<?php echo e($sl); ?>">
                                <input type="text" class="form-control" value="<?php echo e(__('EMPID')); ?><?php echo e($sl); ?>" disabled>



                            </div>
                            <!-- /.form-group -->

                            <label for="name"><?php echo e(__('Name')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>" placeholder="<?php echo e(__('Enter name..')); ?>">
                                <?php if($errors->has('name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="father_name"><?php echo e(__('Fathers Name')); ?></label>
                            <div class="form-group<?php echo e($errors->has('father_name') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="father_name" id="father_name" class="form-control" value="<?php echo e(old('father_name')); ?>" placeholder="<?php echo e(__('Enter fathers name..')); ?>">
                                <?php if($errors->has('father_name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('father_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="mother_name"><?php echo e(__('Mothers Name')); ?> </label>
                            <div class="form-group<?php echo e($errors->has('mother_name') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="mother_name" id="mother_name" class="form-control" value="<?php echo e(old('mother_name')); ?>" placeholder="<?php echo e(__('Enter mothers name..')); ?>">
                                <?php if($errors->has('mother_name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('mother_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="spouse_name"><?php echo e(__('Spouse Name')); ?> </label>
                            <div class="form-group<?php echo e($errors->has('spouse_name') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="spouse_name" id="spouse_name" class="form-control" value="<?php echo e(old('spouse_name')); ?>" placeholder="<?php echo e(__('Enter spouse name..')); ?>">
                                <?php if($errors->has('spouse_name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('spouse_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="email"><?php echo e(__('Email')); ?> <span class="text-danger">*</span></label>
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

                            <label for="emergency_contact"><?php echo e(__('Emergency Contact')); ?></label>
                            <div class="form-group<?php echo e($errors->has('emergency_contact') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="emergency_contact" id="emergency_contact" class="form-control" value="<?php echo e(old('emergency_contact')); ?>" placeholder="<?php echo e(__('Enter emergency contact no..')); ?>">
                                <?php if($errors->has('emergency_contact')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('emergency_contact')); ?></strong>
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

                            <label for="datepicker4"><?php echo e(__('Joining Date')); ?><span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('joining_date') ? ' has-error' : ''); ?> has-feedback">
                                <div class="input-group date">
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    <input type="text" name="joining_date" class="form-control pull-right" id="datepicker4" placeholder="<?php echo e(__('yyyy-mm-dd')); ?>">
                                </div>
                                <?php if($errors->has('joining_date')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('joining_date')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-6">
                            <label for="present_address"><?php echo e(__('Present Address')); ?><span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('present_address') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="present_address" id="present_address" class="form-control" value="<?php echo e(old('present_address')); ?>" placeholder="<?php echo e(__('Enter present address..')); ?>">
                                <?php if($errors->has('present_address')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('present_address')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="permanent_address"><?php echo e(__('Permanent Address')); ?></label>
                            <div class="form-group<?php echo e($errors->has('permanent_address') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="permanent_address" id="permanent_address" class="form-control" value="<?php echo e(old('permanent_address')); ?>" placeholder="<?php echo e(__('Enter permanent address..')); ?>">
                                <?php if($errors->has('permanent_address')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('permanent_address')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <input type="hidden" name="home_district" value="None">

       
                            <!-- /.form-group -->

                            <label for="id_name"><?php echo e(__('ID Name')); ?></label>
                            <div class="form-group<?php echo e($errors->has('id_name') ? ' has-error' : ''); ?> has-feedback">
                                <select name="id_name" id="id_name" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <option value="1"><?php echo e(__('NID')); ?></option>
                                    <option value="2"><?php echo e(__('Passport')); ?></option>
                                    <option value="3"><?php echo e(__('Driving License')); ?></option>
                                </select>
                                <?php if($errors->has('id_name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('id_name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="id_number"><?php echo e(__('ID Number')); ?></label>
                            <div class="form-group<?php echo e($errors->has('id_number') ? ' has-error' : ''); ?> has-feedback">
                                <input type="text" name="id_number" id="id_number" class="form-control" value="<?php echo e(old('id_number')); ?>" placeholder="<?php echo e(__('Enter id number..')); ?>">
                                <?php if($errors->has('id_number')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('id_number')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="designation_id"><?php echo e(__('Designation')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('designation_id') ? ' has-error' : ''); ?> has-feedback">
                                <select name="designation_id" id="designation_id" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($designation['id']); ?>"><?php echo e($designation['designation']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('designation_id')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('designation_id')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="joining_position"><?php echo e(__('Department')); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('joining_position') ? ' has-error' : ''); ?> has-feedback">
                                <select name="joining_position" id="joining_position" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <?php $departments= \App\Department::all();?>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department['id']); ?>"><?php echo e($department['department']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('joining_position')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('joining_position')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                    <!-- /.form-group -->
                    <label for="joining_position"><?php echo e(__('Reference ')); ?><span class="text-danger">*</span></label>
                    <div class="form-group<?php echo e($errors->has('joining_position') ? ' has-error' : ''); ?> has-feedback">
                        <select name="reference" id="joining_position" class="form-control">
                            <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                            <?php $references = \App\User::where('access_label', 4)
                            ->where('deletion_status', 0)
                            ->select('id', 'name', 'present_address', 'contact_no_one', 'created_at', 'activation_status')
                            ->orderBy('id', 'DESC')
                            ->get()
                            ->toArray();?>
                            <?php $__currentLoopData = $references; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reference): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($reference['name']); ?>"><?php echo e($reference['name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                    <!-- /.form-group -->

                            <label for="marital_status"><?php echo e(__('Marital Status')); ?> </label>
                            <div class="form-group<?php echo e($errors->has('marital_status') ? ' has-error' : ''); ?> has-feedback">
                                <select name="marital_status" id="marital_status" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <option value="1"><?php echo e(__('Married')); ?></option>
                                    <option value="2"><?php echo e(__('Single')); ?></option>
                                    <option value="3"><?php echo e(__('Divorced')); ?></option>
                                    <option value="4"><?php echo e(__('Separated')); ?></option>
                                    <option value="5"><?php echo e(__('Widowed')); ?></option>
                                </select>
                                <?php if($errors->has('marital_status')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('marital_status')); ?></strong>
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

                            <label for="role"><?php echo e(__('Role')); ?><span class="text-danger">*</span></label>
                            <div class="form-group<?php echo e($errors->has('role') ? ' has-error' : ''); ?> has-feedback">
                                <select name="role" id="role" class="form-control">
                                    <option value="" selected disabled><?php echo e(__('Select one')); ?></option>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($role->name); ?>"><?php echo e($role->display_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('role')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('role')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <label for="academic_qualification"><?php echo e(__('Academic Qualification')); ?></label>
                            <div class="form-group<?php echo e($errors->has('academic_qualification') ? ' has-error' : ''); ?> has-feedback">
                                <textarea name="academic_qualification" id="academic_qualification" class="form-control textarea" placeholder="<?php echo e(__('Enter academic qualification..')); ?>"><?php echo e(old('academic_qualification')); ?></textarea>
                                <?php if($errors->has('academic_qualification')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('academic_qualification')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="professional_qualification"><?php echo e(__('Professional Qualification')); ?></label>
                            <div class="form-group<?php echo e($errors->has('professional_qualification') ? ' has-error' : ''); ?> has-feedback">
                                <textarea name="professional_qualification" id="professional_qualification" class="form-control textarea" placeholder="<?php echo e(__('Enter professional qualification..')); ?>"><?php echo e(old('professional_qualification')); ?></textarea>
                                <?php if($errors->has('professional_qualification')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('professional_qualification')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->

                            <label for="experience"><?php echo e(__('Experience')); ?></label>
                            <div class="form-group<?php echo e($errors->has('experience') ? ' has-error' : ''); ?> has-feedback">
                                <textarea name="experience" id="experience" class="form-control textarea" placeholder="<?php echo e(__('Enter experience..')); ?>"><?php echo e(old('experience')); ?></textarea>
                                <?php if($errors->has('experience')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('experience')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                       
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="<?php echo e(url('/people/employees')); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i><?php echo e(__('Cancel')); ?> </a>
                    <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo e(__('Add')); ?></button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['employee_add_form'].elements['gender'].value = "<?php echo e(old('gender')); ?>";
        document.forms['employee_add_form'].elements['id_name'].value = "<?php echo e(old('id_name')); ?>";
    document.forms['employee_add_form'].elements['designation_id'].value = "<?php echo e(old('designation_id')); ?>";
    document.forms['employee_add_form'].elements['role'].value = "<?php echo e(old('role')); ?>";
    document.forms['employee_add_form'].elements['joining_position'].value = "<?php echo e(old('joining_position')); ?>";
    document.forms['employee_add_form'].elements['marital_status'].value = "<?php echo e(old('marital_status')); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/people/employee/add_employee.blade.php ENDPATH**/ ?>