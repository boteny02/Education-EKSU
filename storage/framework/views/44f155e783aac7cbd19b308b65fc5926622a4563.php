                <table class="table table-hover">
                    <thead>
                        <tr>                        	
                            <th><strong>Book Name</strong></th>
                            <th><strong>Author</strong></th>
                            <th><strong>Category</strong></th>
                            <th>
															<?php if(Route::has('login')): ?>
																<?php if(auth()->guard()->check()): ?>
																	<strong>Stock Qty</strong>
																	<?php else: ?>
																	<strong>Call Mark</strong>	
																<?php endif; ?>
															<?php endif; ?>
														</th>
                            <th class="text-center"><strong>Availibility</strong></th>
                            <th class="text-center">
															<?php if(Route::has('login')): ?>
																<?php if(auth()->guard()->check()): ?>
																	<strong>Actions</strong>
																	<?php else: ?>
																	<strong>Stock Qty</strong>	
																<?php endif; ?>
															<?php endif; ?>
														</th>
                        </tr>

                    </thead>
                    <tbody id="ins">

                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                        <tr id="book-<?php echo $book->id; ?>">
                            <td class="text-center d-none"> <?php echo $book->id; ?> </td>
                            <td> <?php echo $book->book_name; ?> </td>
                            <td><?php echo $book->book_author; ?> </td>
                            <td><?php echo $book->name; ?> </td>
                            <td>
															<?php if(Route::has('login')): ?>
																<?php if(auth()->guard()->check()): ?>
																	<?php echo $book->stock_qty - $book->borrow_qty; ?> out of <?php echo $book->stock_qty; ?>

																<?php else: ?>
																	<?php echo $book->call_mark; ?>

																<?php endif; ?>
															<?php endif; ?>
														</td>
                            <?php if($book->stock_qty - $book->borrow_qty == 0): ?>
                            <td class="text-center"><button type="button" rel="tooltip" class="label label-warning btn btn-xs" data-original-title="Not Available">Not Available</button></td>
                            <?php elseif($book->stock_qty - $book->borrow_qty < 0): ?>
                            <td class="text-center"><button type="button" rel="tooltip" class="label label-danger btn btn-xs" data-original-title="Illigal Issues Here">Something is wrong here</button></td>

                            <?php else: ?>
                            <td class="text-center"><button type="button" rel="tooltip" class="label label-success btn btn-xs" data-original-title="Available">Available</button></td>

                            <?php endif; ?>
                            <td class="text-center">                               
                        </button>
												<?php if(Route::has('login')): ?>
													<?php if(auth()->guard()->check()): ?>
														<?php if($book->stock_qty - $book->borrow_qty > 0): ?>
														<button type="button" rel="tooltip" class="btn btn-warning btn-simple btn-xs" data-toggle="modal" data-target="#IssueModal " data-book_name="<?php echo $book->book_name; ?>" data-id="<?php echo $book->id; ?>" data-book_author="<?php echo $book->book_author; ?>" id="issue" data-original-title="Issue This Book">
																	
																	<i class="fa fa-gavel"></i>
														</button>
														<?php endif; ?>
														<button type="button" rel="tooltip" class="btn btn-success btn-simple btn-xs" data-toggle="modal" id="update" data-id="<?php echo $book->id; ?>" data-target="#UpdateBook" data-original-title="Update Information">
															<i class="fa fa-edit"></i>
                        		</button>
														<button type="button" rel="tooltip" class="delete btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#DeleteBook" data-id="<?php echo $book->id; ?>" data-book_name="<?php echo $book->book_name; ?>" data-original-title="Delete This Book"> 
																<i class="fa fa-times"></i>  
														<div class="ripple-container"></div></button>
													<?php else: ?>
														<?php echo $book->stock_qty - $book->borrow_qty; ?> out of <?php echo $book->stock_qty; ?>

												<?php endif; ?>
											<?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php if($links==1): ?>
                    <?php echo $books->links(); ?>

                <?php endif; ?>
