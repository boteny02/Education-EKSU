<?php $__env->startSection('title'); ?>
Create Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="limiter">
	<div class="container-login100">
    <div class="wrap-login100">
			<form class="login100-form validate-form" method="POST" action="<?php echo e(route('register')); ?>">
					<?php echo e(csrf_field()); ?>

					<span class="login100-form-title p-b-26">
						Register New Admin
					</span>
					<div class="wrap-input100 validate-input form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
						<input id="name" type="text" class="input100" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
						<span class="focus-input100" data-placeholder="Name"></span>
						<?php if($errors->has('name')): ?>
							<span class="help-block">
									<strong><?php echo e($errors->first('name')); ?></strong>
							</span>
					<?php endif; ?>
					</div>
					<div class="wrap-input100 validate-input form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" data-validate = "Valid email is: a@b">
						<input id="email" type="email" class="input100" name="email" value="<?php echo e(old('email')); ?>" required>
						<span class="focus-input100" data-placeholder="Email"></span>
						<?php if($errors->has('email')): ?>
						<span class="help-block">
								<strong><?php echo e($errors->first('email')); ?></strong>
						</span>
					<?php endif; ?>
					</div>
					<div class="wrap-input100 validate-input form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye-off"></i>
						</span>
						<input id="password" type="password" class="input100" name="password" required>
						<?php if($errors->has('password')): ?>
							<span class="help-block">
									<strong><?php echo e($errors->first('password')); ?></strong>
							</span>
						<?php endif; ?>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye-off"></i>
						</span>
						<input id="password-confirm" type="password" class="input100" name="password_confirmation" required>
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>
					<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" class="login100-form-btn">
										Register
								</button>
							</div>
					</div>
			</form>
		</div>
	</div>
</div>	

<div id="dropDownSelect1"></div>

<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>