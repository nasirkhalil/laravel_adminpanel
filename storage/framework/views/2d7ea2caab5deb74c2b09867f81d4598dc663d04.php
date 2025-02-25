<div class="sidebar">
    <nav class="sidebar-nav ps ps--active-y">

        <ul class="nav">
            <li class="nav-item">
                <a href="<?php echo e(route("admin.home")); ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt">

                    </i>
                    <?php echo e(trans('global.dashboard')); ?>

                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo e(route("admin.pages.index")); ?>" class="nav-link <?php echo e(request()->is('admin/pages') || request()->is('admin/pages/*') ? 'active' : ''); ?>">
                    <i class="fas fa-cogs nav-icon">

                    </i>
                    CMS
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle">
                    <i class="fas fa-users nav-icon">

                    </i>
                    <?php echo e(trans('global.userManagement.title')); ?>

                </a>
                <ul class="nav-dropdown-items">

                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.permissions.index")); ?>" class="nav-link <?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                            <i class="fas fa-unlock-alt nav-icon">

                            </i>
                            <?php echo e(trans('global.permission.title')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.roles.index")); ?>" class="nav-link <?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                            <i class="fas fa-briefcase nav-icon">

                            </i>
                            <?php echo e(trans('global.role.title')); ?>

                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route("admin.users.index")); ?>" class="nav-link <?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                            <i class="fas fa-user nav-icon">

                            </i>
                            <?php echo e(trans('global.user.title')); ?>

                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-sign-out-alt">

                    </i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 869px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 415px;"></div>
        </div>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div><?php /**PATH C:\xampp\htdocs\laraveldaily\resources\views/partials/menu.blade.php ENDPATH**/ ?>