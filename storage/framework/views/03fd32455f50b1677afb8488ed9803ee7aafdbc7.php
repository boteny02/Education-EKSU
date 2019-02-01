<?php $__env->startSection('content'); ?>

<div class="col-lg-8 col-md-12">
    <div class="card">
        <div class="card-header" data-background-color="custom-registration">
            <h4 class="title">Librarian Profile</h4>            
        </div>
        <div class="card-content">
					<?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form class="login100-form validate-form" method="POST" action="/adminUpdate">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-md-12">
                       <div class="wrap-input100 validate-input form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
												<label class="control-label">Name</label>
												<input id="name" type="text" class="input100 form-control" name="name" value="<?php echo e($admin->name); ?>" required autofocus>
												<?php if($errors->has('name')): ?>
													<span class="help-block">
														<strong><?php echo e($errors->first('name')); ?></strong>
													</span>
												<?php endif; ?> 
											</div>
                    </div>
                </div>
								<div class="row">
                    <div class="col-md-12">
                      <div class="wrap-input100 validate-input form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
												<label class="control-label">Email</label>
												<input id="email" type="email" class="input100 form-control" name="email" value="<?php echo e($admin->email); ?>" autofocus>
												<?php if($errors->has('email')): ?>
												<span class="help-block">
														<strong><?php echo e($errors->first('email')); ?></strong>
												</span>
											<?php endif; ?>
											</div>
                    </div>
                </div>
                <div class="row">
									<div class="col-md-6">
										<div class="wrap-input100 validate-input form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" data-validate="Enter password">
											<label class="control-label">Password</label>
											<input id="password" type="password" class="input100 form-control" name="password" required>
											<?php if($errors->has('password')): ?>
												<span class="help-block">
														<strong><?php echo e($errors->first('password')); ?></strong>
												</span>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-md-6">
										<div class="wrap-input100 validate-input form-group" data-validate="Enter password">
											<label class="control-label">Confirm Password</label>
											<input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required>
										</div>
									</div>
                </div>
                <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <p class="error text-center alert alert-danger d-none"></p>
                <button class="btn btn-primary pull-right" type="submit">Update</button>
                <div class="clearfix"></div>
            </form>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

		
</div>



<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>