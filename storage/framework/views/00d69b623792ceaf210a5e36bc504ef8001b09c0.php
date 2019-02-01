                <table class="table table-hover">
                    <thead>
                        <tr>                        	
                            <th><strong>Book Name</strong></th>
                            <th><strong>Author</strong></th>
                            <th><strong>Category</strong></th>
														<th><strong>Call Mark</strong></th>
                            <th><strong>Stock Qty</strong></th>
                            <th class="text-center"><strong>Availibility</strong></th>
                        </tr>

                    </thead>
                    <tbody id="ins">

                        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                        <tr id="book-<?php echo $book->id; ?>">
                            <td class="text-center d-none"> <?php echo $book->id; ?> </td>
                            <td> <?php echo $book->book_name; ?> </td>
                            <td><?php echo $book->book_author; ?> </td>
                            <td><?php echo $book->name; ?> </td>
														<td><?php echo $book->name; ?></td>
                            <td><?php echo $book->stock_qty - $book->borrow_qty; ?> out of <?php echo $book->stock_qty; ?></td>
                            <?php if($book->stock_qty - $book->borrow_qty == 0): ?>
                            <td class="text-center"><button type="button" rel="tooltip" class="label label-warning btn btn-xs" data-original-title="Not Available">Not Available</button></td>
                            <?php elseif($book->stock_qty - $book->borrow_qty < 0): ?>
                            <td class="text-center"><button type="button" rel="tooltip" class="label label-danger btn btn-xs" data-original-title="Illigal Issues Here">Something is wrong here</button></td>

                            <?php else: ?>
                            <td class="text-center"><button type="button" rel="tooltip" class="label label-success btn btn-xs" data-original-title="Available">Available</button></td>

                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php if($links==1): ?>
                    <?php echo $books->links(); ?>

                <?php endif; ?>
