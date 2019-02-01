<div class="sidebar" data-color="orange" data-image="/assets/img/sidebar-1.jpg" >
            <div class="logo">
                <a class="simple-text">
                Faculty Of Education <br> Library
                </a>
            </div>
            <div class="sidebar-wrapper">
							@if(Route::has('login'))
								@auth
                	<ul class="nav">

              <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="{{ url('/dashboard') }}">
										<i class="fa fa-dashboard"></i>
                    {{--  <i class="material-icons">dashboard</i>  --}}
                    <p>Dashboard</p>
                    </a>
            </li>
                <li class="{{ Request::is('registration') ? 'active' : '' }}">
                    <a href="{{ url('registration') }}">
											<i class="fa fa-user-plus"></i>
                     {{--  <i class="material-icons">content_paste</i>  --}}
                    <p>New Registration</p>
                    </a>
                </li>
                <li class="{{ Request::is('members') ? 'active' : '' }}">
                    <a href="{{ url('members') }}">
											<i class="fa fa-users"></i>
                {{--  <i class="material-icons">view_list</i>  --}}
                    <p>View Members</p>
                    </a>
                </li>
                <li class="{{ Request::is('books') ? 'active' : '' }}">
                    <a href="{{ url('books') }}">
											<i class="fa fa-book"></i>
                    {{--  <i class="material-icons">library_books</i>  --}}
                    <p>View All Books</p>
                    </a>
                </li>
                <li class="{{ Request::is('issues')||Request::is('issues_not_returned') ? 'active' : '' }}">
                    <a href="{{ url('issues') }}">       
											<i class="fa fa-list"></i>                 
                    {{--  <i class="material-icons">list</i>  --}}
                    <p>Issue List</p>
                    </a>
                </li>
                <li class="{{ Request::is('categories') ? 'active' : '' }}">
                    <a href="{{ url('categories') }}">                        
             {{--  <i class="material-icons">dns</i>  --}}
						 				<i class="fa fa-list-alt"></i> 
                    <p>Categories</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin') }}">  
										<i class="fa fa-user"></i>                      
             {{--  <i class="material-icons">accessible</i>  --}}
                    <p>Librarian</p>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
												<i class="fa fa-sign-out"></i>
                        {{--  <i class="material-icons">&#xE879;</i>  --}}
                        <p> Logout</p>                       
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </li>
                </ul>
								@else 
									<div class="text-center" style="color:#fff">
										<ul class="nav">
											<li>
												<img src="{{URL::asset('assets/img/favicon.png')}}" height="200">
											</li>
											<li>
												<p>Welcome To The Faculty Of Education Library Management System. Ekiti State University </P>
											</li><br><br>
											<li>
												<a href="{{ url('/login') }}">
													<span><i class="fa fa-sign-in"></i>
													<p>Librarian Login</p></span>
												</a>
											</li>
										</ul>
									</div>	
								@endauth
							@endif
            </div>
        </div>

        