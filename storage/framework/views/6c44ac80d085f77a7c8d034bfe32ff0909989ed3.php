<?php $__env->startSection('search'); ?>
<div class="collapse navbar-collapse">
    <form method="POST" action="members" class="navbar-form navbar-right" role="search">
      <?php echo e(csrf_field()); ?>

        <div class="form-group  is-empty">
            <input type="text" class="form-control" name="search_input" placeholder="Search...">
            <span class="material-input"></span>
        </div>
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
            
						<i class="fa fa-search"></i>
            <div class="ripple-container"></div>
        </button>
    </form>
</div>
<?php $__env->stopSection(); ?> 
   <?php $__env->startSection('content'); ?> 
<div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header" data-background-color="custom-bookrequisition">
                  <h4 class="title">Members Information</h4>
              </div>
              <div class="card-content table-responsive">
                  <table class="table table-hover">
      <thead>
          <tr>
              <th class="text-center"><strong>Matric No</strong></th>
              <th class="text-center"><strong>Member Name</strong></th>
							<th class="text-center"><strong>Faculty</strong></th>
              <th class="text-center"><strong>Department</strong></th>
              <th class="text-center"><strong>Mobile</strong></th>
              <th class="text-center"><strong>Member Since</strong></th>
              <th><strong>Actions</strong></th>
          </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td class="text-center"><?php echo e($member->member_mat_no); ?></td>
             <td class="text-center" style="cursor: pointer;"  id="user_info_show" data-id="<?php echo e($member->member_id); ?>" data-toggle="modal" data-target="#member_info_modal">
              <strong><?php echo e($member->member_name); ?></strong> 
             </td>
						 <td class="text-center"><?php echo e($member->member_fac); ?></td>
              <td class="text-center"><?php echo e($member->member_dept); ?></td>
              <td class="text-center">+234 - <?php echo e($member->member_contact); ?></td>
              <td class="text-center"><?php echo e($member->created_at->diffForHumans()); ?></td>
              <td class="td-actions" > 
                <form>
                <?php echo e(csrf_field()); ?>

                <input type="hidden" id="member_id" name="member_id" value="<?php echo e($member->member_id); ?>" >
                </form>     
                  <button type="button" rel="tooltip" class="btn btn-success btn-simple btn-xs" data-toggle="modal" id="updateMember" data-id="<?php echo e($member->member_id); ?>" data-target="#UpdateMember" data-original-title="Update Member Information">
                  <i class="fa fa-edit"></i>
                  </button>      
                 <button type="button" rel="tooltip" title="" class="delete_member btn btn-danger btn-simple btn-xs" data-original-title="Remove This Member" data-toggle="modal" data-target="#memberDelete">  
                <i class="fa fa-times"></i>  
                   </button>
            
               
              </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
  </table>
              </div>
          </div>
      </div>

  </div>
   <?php echo $__env->make('member.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('member.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('member.update', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <?php echo $__env->make('book.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>