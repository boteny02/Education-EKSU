<div class="sidebar" data-color="orange" data-image="/assets/img/sidebar-1.jpg" >
            <div class="logo">
                <a class="simple-text">
                Faculty Of Education <br> Library
                </a>
            </div>
            <div class="sidebar-wrapper">
							<?php if(Route::has('login')): ?>
								<?php if(auth()->guard()->check()): ?>
                	<ul class="nav">

              <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('/dashboard')); ?>">
										<i class="fa fa-dashboard"></i>
                    
                    <p>Dashboard</p>
                    </a>
            </li>
                <li class="<?php echo e(Request::is('registration') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('registration')); ?>">
											<i class="fa fa-user-plus"></i>
                     
                    <p>New Registration</p>
                    </a>
                </li>
                <li class="<?php echo e(Request::is('members') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('members')); ?>">
											<i class="fa fa-users"></i>
                
                    <p>View Members</p>
                    </a>
                </li>
                <li class="<?php echo e(Request::is('books') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('books')); ?>">
											<i class="fa fa-book"></i>
                    
                    <p>View All Books</p>
                    </a>
                </li>
                <li class="<?php echo e(Request::is('issues')||Request::is('issues_not_returned') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('issues')); ?>">       
											<i class="fa fa-list"></i>                 
                    
                    <p>Issue List</p>
                    </a>
                </li>
                <li class="<?php echo e(Request::is('categories') ? 'active' : ''); ?>">
                    <a href="<?php echo e(url('categories')); ?>">                        
             
						 				<i class="fa fa-list-alt"></i> 
                    <p>Categories</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/admin')); ?>">  
										<i class="fa fa-user"></i>                      
             
                    <p>Librarian</p>
                    </a>
                </li>
                
                <li>
                    <a href="<?php echo e(route('logout')); ?>"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
												<i class="fa fa-sign-out"></i>
                        
                        <p> Logout</p>                       
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                    </form>
                </li>
                </ul>
								<?php else: ?> 
									<div class="text-center" style="color:#fff">
										<ul class="nav">
											<li>
												<img src="<?php echo e(URL::asset('assets/img/favicon.png')); ?>" height="200">
											</li>
											<li>
												<p>Welcome To The Faculty Of Education Library Management System. Ekiti State University </P>
											</li><br><br>
											<li>
												<a href="<?php echo e(url('/login')); ?>">
													<span><i class="fa fa-sign-in"></i>
													<p>Librarian Login</p></span>
												</a>
											</li>
										</ul>
									</div>	
								<?php endif; ?>
							<?php endif; ?>
            </div>
        </div>

        