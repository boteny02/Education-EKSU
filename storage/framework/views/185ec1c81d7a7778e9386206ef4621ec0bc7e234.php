 

<?php $__env->startSection('search'); ?>

<?php if(session()->has('message')): ?>
    <div class="alert alert-success">
        <?php echo session()->get('message'); ?>

    </div>
<?php endif; ?>
<div class="collapse navbar-collapse">
  <div class="books-search navbar-form navbar-right" role="search">
      <?php echo csrf_field(); ?>

      <div class="form-group  is-empty">
             <input type="text" class="form-control" name="search_input" placeholder="Type & Search...">
            <span class="material-input"></span>
        </div>
        <button class="btn btn-white btn-round btn-just-icon">
            
						<i class="fa fa-search"></i>
            <div class="ripple-container"></div>
        </button>        
    </div>
</div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="custom-book">
                <h4 style="display: inline-block;" class="title">Book List</h4>
                  <a style="cursor: pointer;" type="button" rel="tooltip" title="" class="add_book pull-right" data-toggle="modal" data-target="#CreateBook" data-original-title="Add New Book">   
                 
								 <i class="fa fa-plus"></i>
                </a>
            </div>
            <div class="book_ajax_paginatable card-content table-responsive">
                <?php echo $__env->make('book.paginate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>              
            </div>
        </div>
    </div>
</div>

   <div class="clearfix"></div>
<?php echo $__env->make('book.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
              <div class="clearfix"></div>
<?php echo $__env->make('book.update', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
              <div class="clearfix"></div>
<?php echo $__env->make('book.delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
              <div class="clearfix"></div>
<?php echo $__env->make('book.cantdelete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
              <div class="clearfix"></div>              
<?php echo $__env->make('issue.create', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <div class="clearfix"></div>

<?php echo $__env->make('book.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>