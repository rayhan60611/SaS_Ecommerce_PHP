      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas " id="sidebar">
          <ul class="nav">
              <li class="nav-item nav-profile">
                  <div class="nav-link">
                      <div class="profile-image"> <img src="/images/faces/face4.jpg" alt="image" /> <span
                              class="online-status online"></span> </div>
                      <div class="profile-name">
                          <p class="name">Richard V.Welsh</p>
                          <p class="designation">Manager</p>
                          <div class="badge badge-teal mx-auto mt-3">Online</div>
                      </div>
                  </div>
              </li>
              <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}"><img class="menu-icon"
                          src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard</span></a>
              </li>
              {{-- <li class="nav-item"><a class="nav-link" href="pages/widgets.html"><img class="menu-icon" src="/images/menu_icons/02.png" alt="menu icon"><span class="menu-title">Widgets</span></a></li>
          <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html"><img class="menu-icon" src="/images/menu_icons/03.png" alt="menu icon"><span class="menu-title">Buttons</span></a></li>
          <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html"><img class="menu-icon" src="/images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Form</span></a></li>
          <li class="nav-item"><a class="nav-link" href="pages/charts/chartjs.html"><img class="menu-icon" src="/images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Charts</span></a></li>
          <li class="nav-item"><a class="nav-link" href="pages/tables/basic-table.html"><img class="menu-icon" src="/images/menu_icons/06.png" alt="menu icon"><span class="menu-title">Table</span></a></li>
          <li class="nav-item"><a class="nav-link" href="pages/icons/font-awesome.html"><img class="menu-icon" src="/images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Icons</span></a></li>
           --}}
              <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#manage-products" aria-expanded="false"
                      aria-controls="manage-products"> <img class="menu-icon" src="/images/menu_icons/05.png"
                          alt="menu icon"> <span class="menu-title">Manage Products</span><i class="menu-arrow"></i></a>
                  <div class="collapse" id="manage-products">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href="{{route('admin.products')}}"><i
                                      class="fas fa-table pr-2"></i><span class="menu-title">All Products</span></a>
                          </li>
                          <li class="nav-item"> <a class="nav-link" href="{{route('admin.create')}}"><i
                                      class="fas fa-cart-plus pr-2"></i><span class="menu-title">Add New
                                      Product</span></a></li>
                      </ul>
                  </div>
              </li>



              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#manage-category" aria-expanded="false"
                    aria-controls="manage-category"> <img class="menu-icon" src="/images/menu_icons/03.png"
                        alt="menu icon"> <span class="menu-title">Manage Category</span><i class="menu-arrow"></i></a>
                <div class="collapse" id="manage-category">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.category')}}"><i
                                    class="fas fa-table pr-2"></i><span class="menu-title">All Category</span></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.category.create')}}"><i
                                    class="fas fa-cart-plus pr-2"></i><span class="menu-title">Add New
                                      Category</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#manage-brand" aria-expanded="false"
                    aria-controls="manage-brand"> <img class="menu-icon" src="/images/menu_icons/03.png"
                        alt="menu icon"> <span class="menu-title">Manage brand</span><i class="menu-arrow"></i></a>
                <div class="collapse" id="manage-brand">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.brand')}}"><i
                                    class="fas fa-table pr-2"></i><span class="menu-title">All Brand</span></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.brand.create')}}"><i
                                    class="fas fa-cart-plus pr-2"></i><span class="menu-title">Add New
                                      Brand</span></a></li>
                    </ul>
                </div>
            </li>


          <li class="nav-item"><a class="nav-link" target="_blank" href="{{route('home')}}"><img class="menu-icon"
                      src="/images/menu_icons/02.png" alt="menu icon"> <span class="menu-title">Goto SaS Main Site</span></a>
          </li>
          </ul>
      </nav>
      <!-- partial -->