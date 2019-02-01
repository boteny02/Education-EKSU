 
<?php $__env->startSection('content'); ?>

<div class="row text-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header" data-background-color="custom-book">
                <h4 style="display: inline;" class="title">Categories</h4>
                <a style="cursor: pointer;" type="button" rel="tooltip" title="" class="add_book pull-right" data-toggle="modal" data-target="#CreateCategory" data-original-title="Add New Category">   
									<i class="fa fa-plus"></i>
                 
                </a>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
         <thead>
                            <tr>
                               <th class="text-center"><strong>ID</strong></th>
                                <th><strong>Category Name</strong></th>
                                <th><strong>Actions</strong></th>

                            </tr>
                        </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                        <tr>
                          <td class="text-center">
                            <?php echo e($category->id); ?>

                          </td>
                            <td class="text-left"> 
                               <?php echo e($category->name); ?> 
                            </td>
                            <td class="text-center"> 
        
                  <button type="button" rel="tooltip" class="btn btn-success btn-simple btn-xs" data-toggle="modal" id="UpdateCategory" data-id="<?php echo e($category->id); ?>" data-name="<?php echo e($category->name); ?>" data-target="#updateCat" data-original-title="Edit">
                  <i class="fa fa-edit"></i>
                  </button> 
             
                 <button type="button" rel="tooltip" title="" class="delete_category btn btn-danger btn-simple btn-xs" data-original-title="Delete" data-id="<?php echo e($category->id); ?>" data-toggle="modal" data-target="#memberDelete">  
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

<?php echo $__env->make('category.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('category.update', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('category.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('book.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>