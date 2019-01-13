<div class="content"> 
    
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <!-- ==========================  Start Sidebar Navs  =============================  -->
            <div class="nav-side-menu">

              <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
              
              
              <div class="menu-list">
                  <!-- ===  Sidebar Navs  ====  -->
                  <ul id="menu-content" class="menu-content collapse out">

                      <!-- User Type Check  -->
                      <?php $role = Auth::user()->USER_TYPE; ?>
                      @if($role == 'A')
                          <h3 class="text-center">Admin Dashboard</h3>
                      @elseif($role == 'T')
                          <h3 class="text-center">Trainer Dashboard</h3>
                      @elseif($role == 'S')
                          <h3 class="text-center">Student Dashboard</h3>
                      @endif 
                      <!-- User Type Check  -->

					  <!-- ===  This is the different way of using can method  ====  -->
                      @if($role == 'T')
                      <!-- ===  Single Parent Navs  ====  -->
                      <li data-toggle="collapse" data-target="#resource" class="collapsed">
                        <a href="#"><span class="icon"><i class="far fa-folder-open fa-lg"></i></span> Resource <span class="arrow"></span></a>
                      </li>
                      <li>
                        <ul class="sub-menu collapse" id="resource">
                          <li><a href="/admin/resource/category">Resource Category</a></li>
                          <li><a href="/admin/resource/list">All Resource</a></li>
                          <li><a href="/admin/resource/create">Upload Resource</a></li>
                        </ul>
                      </li>
                      <!-- ===  Single Parent Navs  ====  -->

                      <!-- ===  Single Parent Navs  ====  -->
                      <li data-toggle="collapse" data-target="#classroom" class="collapsed">
                        <a href="#"><span class="icon"><i class="fa fa-globe fa-lg"></i></span> Classroom <span class="arrow"></span></a>
                      </li>
                      <li>
                        <ul class="sub-menu collapse" id="classroom">
                          <li><a href="/admin/classroom">Manage Class </a></li>
                          <!-- <li><a href="/admin/workshop/reg/list">Ongoing Workshop</a></li>-->
                        </ul>
                      </li>
                      <!-- ===  Single Parent Navs  ====  -->
                      @endif

					  
					  
					  <!-- ===  Only Admin can see this section  ====  -->
                      @can('isAdmin')
                      <!-- ===  Single Parent Navs  ====  -->
                      <li data-toggle="collapse" data-target="#user" class="collapsed">
                        <a href="#"><span class="icon"><i class="far fa-user fa-lg"></i></span> User <span class="arrow"></span></a>
                      </li>
                      <li>
                        <ul class="sub-menu collapse" id="user">
                          <li><a href="/admin/profile/list">All Users</a></li>
                        </ul>
                      </li>
                      <!-- ===  Single Parent Navs  ====  -->

                      <!-- ===  Single Parent Navs  ====  -->
                      <li data-toggle="collapse" data-target="#author" class="collapsed">
                        <a href="#"><span class="icon"><i class="fas fa-user-edit fa-lg"></i></span> Author <span class="arrow"></span></a>
                      </li>
                      <li>
                        <ul class="sub-menu collapse" id="author">
                          <li><a href="/admin/author/list">Author list</a></li>
                          <li><a href="/admin/author/create">Upload Author</a></li>
                        </ul>
                      </li>
                      <!-- ===  Single Parent Navs  ====  -->
                      @endcan
					  
					  
					  
					  <!-- ===  Only Student can see this section  ====  -->
					  @can('isStudent')
                      <!-- ===  Single Parent Navs  ====  -->
                      <li data-toggle="collapse" data-target="#user" class="collapsed">
                        <a href="#"><span class="icon"><i class="far fa-user fa-lg"></i></span> User <span class="arrow"></span></a>
                      </li>
                      <li>
                        <ul class="sub-menu collapse" id="user">
                          <li><a href="/admin/profile/list">All Users</a></li>
                        </ul>
                      </li>
                      <!-- ===  Single Parent Navs  ====  -->

                      <!-- ===  Single Parent Navs  ====  -->
                      <li data-toggle="collapse" data-target="#author" class="collapsed">
                        <a href="#"><span class="icon"><i class="fas fa-user-edit fa-lg"></i></span> Author <span class="arrow"></span></a>
                      </li>
                      <li>
                        <ul class="sub-menu collapse" id="author">
                          <li><a href="/admin/author/list">Author list</a></li>
                          <li><a href="/admin/author/create">Upload Author</a></li>
                        </ul>
                      </li>
                      <!-- ===  Single Parent Navs  ====  -->
                      @endcan

                  </ul>
                  <!-- ===  Sidebar Navs  ====  -->
              </div>
              

            </div>
            <!-- ==========================  End Sidebar Navs  =============================  -->
        </div>
        