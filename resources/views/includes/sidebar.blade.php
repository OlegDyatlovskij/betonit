<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Tools</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <!--USERS-->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Users
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'users', 'action' => 'create']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create new record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'users', 'action' => 'read']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read all records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'users', 'action' => 'update']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Update record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'users', 'action' => 'delete']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!---->
              <!--PRODUCTS-->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Products
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'products', 'action' => 'create']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create new record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'products', 'action' => 'read']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read all records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'products', 'action' => 'update']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Update record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'products', 'action' => 'delete']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!---->
              <!--ORDERS-->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Orders
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'orders', 'action' => 'create']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create new record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'orders', 'action' => 'read']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read all records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'orders', 'action' => 'update']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Update record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'orders', 'action' => 'delete']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!---->
              <!--ROLES-->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                  Roles
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'roles', 'action' => 'create']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create new record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'roles', 'action' => 'read']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read all records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'roles', 'action' => 'update']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Update record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'roles', 'action' => 'delete']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!---->
              <!--INFORMATION-->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Information
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'information', 'action' => 'create']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create new record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'information', 'action' => 'read']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read all records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'information', 'action' => 'update']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Update record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'information', 'action' => 'delete']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!---->
              <!--PERMISSIONS-->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>
                    Permissions
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'permissions', 'action' => 'create']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create new record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'permissions', 'action' => 'read']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read all records</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'permissions', 'action' => 'update']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Update record</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('table.action', ['table' => 'permissions', 'action' => 'delete']) }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Delete record</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!---->
            </ul>
          </li>
        </ul>
      </nav>