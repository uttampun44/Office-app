<aside>
    <div class="sidebar-panel h-full w-48  fixed top-0  bg-gray-800 px-4 py-8">
         <div class="sidebar-title">
              <h1 class="text-2xl font-bold text-white">Office Panel</h1>
         </div>

          <div class="sidebar-routes">
              <ul>
                <li>
                    @if(checkPermission('dashboard'))
                    <a href="{{route('dashboard')}}" class="text-white font-bold text-lg">Dashboard</a>
                    @endif
                </li>
                <li><a href="{{route('employees.index')}}" class="text-white font-bold text-lg">Employees</a></li>
                  <li><a href="{{route('roles.index')}}" class="text-white font-bold text-lg">Roles</a></li>
                  <li>
                    @if(checkPermission('permission.index'))
                    <a href="{{route('permission.index')}}" class="text-white font-bold text-lg">permissions</a>
                    @endif
                  </li>
              </ul>
          </div>
    </div>
</aside>