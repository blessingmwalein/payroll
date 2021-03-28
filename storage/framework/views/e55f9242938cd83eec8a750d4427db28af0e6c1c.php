<div id="mainMenu">
    <ul class="sidebar-menu" data-widget="tree">
        <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard text-purple"></i> <span><?php echo e(__('Dashboard')); ?></span></a></li>
        
        <?php if (\Entrust::can('people')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users text-purple"></i> <span><?php echo e(__('Employee Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                
               

                <?php if (\Entrust::can('manage-employee')) : ?>
                <li><a href="<?php echo e(url('/people/employees/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Employee')); ?></a></li>
                <li><a href="<?php echo e(url('/people/employees')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Employee')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-clients')) : ?>
                 <li><a href="<?php echo e(url('people/clients/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Customer')); ?></a></li>
                <li><a href="<?php echo e(url('/people/clients')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Clients')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-references')) : ?>
                
                <li><a href="<?php echo e(url('people/references/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Reference')); ?></a></li>
                <li><a href="<?php echo e(url('/people/references')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Manage References')); ?></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
      
        <?php if (\Entrust::can('payroll-management')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-dollar text-purple"></i> <span><?php echo e(__('Payroll Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (\Entrust::can('manage-salary')) : ?>
                <li><a href="<?php echo e(url('/hrm/payroll')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Salary')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('salary-list')) : ?>
                <li><a href="<?php echo e(url('/hrm/payroll/salary-list')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Salary List')); ?></a></li>
                <?php endif; // Entrust::can ?>

                <li><a href="<?php echo e(url('/hrm/payroll/increment/search')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Increment')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/payroll/increment/list')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Increment List')); ?></a></li>

                <?php if (\Entrust::can('make-payment')) : ?>
                <li><a href="<?php echo e(url('/hrm/salary-payments')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Make Payment')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('generate-payslip')) : ?>
                <li><a href="<?php echo e(url('/hrm/generate-payslips/')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__(' Generate Payslip')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-bonus')) : ?>
                <li><a href="<?php echo e(url('/hrm/bonuses')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Bonus')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('manage-deduction')) : ?>
                <li><a href="<?php echo e(url('/hrm/deductions')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Deduction')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('loan-management')) : ?>
                <li><a href="<?php echo e(url('/hrm/loans')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Loan Management')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('provident-fund')) : ?>
                <li><a href="<?php echo e(url('/hrm/provident-funds')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Provident Fund')); ?></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
        <?php if (\Entrust::can('attendance-management')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar text-purple"></i> <span><?php echo e(__('Attendance Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (\Entrust::can('manage-attendance')) : ?>
                <li><a href="<?php echo e(url('/hrm/attendance/manage')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Attendance')); ?> </a></li>


                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('attendance-report')) : ?>
                <li><a href="<?php echo e(url('/hrm/attendance/details/report/go')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Attendance Statement')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/attendance/report')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Attendance Report')); ?></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
       
       <?php if (\Entrust::can('manage-expense')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-minus text-purple"></i> <span><?php echo e(__('Expense Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (\Entrust::can('manage-expense')) : ?>
                <li><a href="<?php echo e(url('/hrm/expence/category/add')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Expense Category')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/expence/category/list')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Expense Category List')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/expence/add-expence')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Create Expense')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/expence/manage-expence')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Expense List')); ?></span></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
         <?php endif; // Entrust::can ?>
        <?php if (\Entrust::can('leave-application')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-send text-purple"></i> <span><?php echo e(__('Leave Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
             
                <?php if (\Entrust::can('manage-leave-application')) : ?>
                <li><a href="<?php echo e(url('/setting/leave_categories/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('New Leave Category')); ?></a></li>
                <li><a href="<?php echo e(url('/setting/leave_categories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Leave Category List')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/application_lists')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Leave Application List')); ?></span></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('my-leave-application')) : ?>
                <li><a href="<?php echo e(url('/hrm/leave_application/create')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Leave Application')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/leave_application')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Leave Application Manage')); ?></span></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('leave-reports')) : ?>
                <li><a href="<?php echo e(url('/hrm/leave-reports')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Leave Reports')); ?></span></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
         <?php if (\Entrust::can('manage-award')) : ?>
         <li class="treeview">
            <a href="#">
                <i class="fa fa-trophy text-purple"></i> <span><?php echo e(__('Award Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (\Entrust::can('manage-award')) : ?>
                <li><a href="<?php echo e(url('/hrm/employee-awards/create')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Award')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/employee-awards')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Manage Award')); ?></span></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
        <?php if (\Entrust::can('notice')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-bell text-purple"></i> <span><?php echo e(__('Notice Board')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
               
                <?php if (\Entrust::can('manage-notice')) : ?>
                 <li><a href="<?php echo e(url('hrm/notice/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('New Notice')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/notice')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Notice')); ?></a></li>
                <?php endif; // Entrust::can ?>
                <?php if (\Entrust::can('notice-board')) : ?>
                <li><a href="<?php echo e(url('/hrm/notice/show')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Notice list')); ?></span></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
       <?php if (\Entrust::can('file-upload')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cloud-upload text-purple"></i> <span><?php echo e(__('File Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <?php if (\Entrust::can('file-upload')) : ?>
                <li><a href="<?php echo e(url('/folders/create')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Upload')); ?></span></a></li>
                <li><a href="<?php echo e(url('/folders')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('File List')); ?></span></a></li>
                <?php endif; // Entrust::can ?>
           
            </ul>
         </li>
         <?php endif; // Entrust::can ?>
       <?php if (\Entrust::can('file-upload')) : ?>
        <li><a href="<?php echo e(url('/hrm/salary/statement/search')); ?>"><i class="fa fa-certificate"></i> <span><?php echo e(__('Salary Statement')); ?></span></a></li>
        <?php endif; // Entrust::can ?>

        <?php if (\Entrust::can('hrm-setting')) : ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cog text-purple"></i> <span><?php echo e(__('Configuration')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo e(url('/setting/client-types')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Client Types')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/departments')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Departments')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/designations')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Designations')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/leave_categories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Leave Categories')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/working-days')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Set Working Day')); ?></a></li>
                <li><a href="<?php echo e(url('/setting/holidays')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Holiday List')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/personal-events')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Personal Event')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/award_categories')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Award Categories')); ?></a></li>
                <?php if (\Entrust::can('role')) : ?>
                <li><a href="<?php echo e(route('setting.role.index')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Role')); ?></a></li>
                <?php endif; // Entrust::can ?>
            </ul>
        </li>
        <?php endif; // Entrust::can ?>
        
        <li><a href="<?php echo e(url('/profile/user-profile')); ?>"><i class="fa fa-user text-purple"></i> <span><?php echo e(__('Profile')); ?></span></a></li>
        <li><a href="<?php echo e(url('/profile/change-password')); ?>"><i class="fa fa-key text-purple"></i> <span><?php echo e(__('Change Password')); ?></span></a></li>
        <li>
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-lock text-purple"></i> <span><?php echo e(__('Logout')); ?></span></a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

            </form>
        </li>
    </ul>
</div><?php /**PATH C:\Users\USER\Downloads\Human-Resource-Management-System-And-Payroll-Laravel-Source-Code\resources\views/administrator/layouts/menu.blade.php ENDPATH**/ ?>