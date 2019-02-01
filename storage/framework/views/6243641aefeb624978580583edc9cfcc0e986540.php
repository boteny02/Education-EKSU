<?php $__env->startSection('search'); ?>
<div class="issuebooks-search collapse navbar-collapse">
  <form action="<?php echo e(Request::is('issues_not_returned')  ? 'issues_not_returned'  : ''); ?>"   method="POST" class="navbar-form navbar-right" role="search">
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
                                <div class="card-header" data-background-color="custom-issuebook">
                                    <h4 class="title">Issue List
<?php if($not_return_text == 1): ?>
                    <?php echo e('> Not Returned'); ?>

<?php endif; ?>
                                    </h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                        <thead>
                            <tr>
                                
                                <th><strong>Book Name</strong></th>
                                <th><strong>Author</strong></th>
                                <th><strong>Member Email</strong></th>
                                <th><strong>Borrower</strong></th>
                                <th><strong>Qty</strong></th>
                                <th><strong>Return Date</strong></th>
                                <th><strong>Actions</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                          
                                <td><?php echo e($issue->book_name); ?></td>
                                <td><?php echo e($issue->book_author); ?></td>                    
                                <td><?php echo e($issue->member_email); ?></td>                    
                                <td style="cursor: pointer;"  id="user_info_show" data-id="<?php echo e($issue->member_id); ?>" data-toggle="modal" data-target="#member_info_modal">
                                    <strong>  <?php echo e($issue->member_name); ?></strong> 
                                 </td>
                                <td><?php echo e($issue->issue_qty); ?></td>
                                <?php if($issue->return_date < now()): ?>
                                      <td class="add_fine"><?php echo e(date('d - M - Y', strtotime($issue->return_date))); ?></td>
                                      <td class="td-actions">
                                    <button type="button"  rel="tooltip" title="" class="return_book btn btn-danger btn-simple btn-xs" data-original-title="Return Book include Fine" data-qty="<?php echo e($issue->issue_qty); ?>" data-book_name="<?php echo e($issue->book_name); ?>" data-book_id="<?php echo e($issue->book_id); ?>" data-id="<?php echo e($issue->id); ?>" data-toggle="modal" data-target="#ReturnBook">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                </td>
                                  
                                  <?php else: ?>
                                  <td><?php echo e(date('d - M - Y', strtotime($issue->return_date))); ?></td>  
                                  <td class="td-actions">
                                    <button type="button" rel="tooltip" title="" class="return_book btn btn-success btn-simple btn-xs" data-original-title="Return Book" data-qty="<?php echo e($issue->issue_qty); ?>" data-book_name="<?php echo e($issue->book_name); ?>" data-book_id="<?php echo e($issue->book_id); ?>" data-id="<?php echo e($issue->id); ?>" data-toggle="modal" data-target="#ReturnBook">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                </td>             
                                <?php endif; ?>               
                                  
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                    </table>


                <?php if($links==1): ?>
                    <?php echo e($issues->links()); ?>

                <?php endif; ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php echo $__env->make('member.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('issue.return', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>