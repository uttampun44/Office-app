<x-app-layout>
    <x-sidebar />
    

    <div class="py-12">
        <div class="ml-80 mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg py-4">
             
                <div class="roles_permision px-4">
                    <h1 class="text-white text-lg font-bold"> Permissions</h1>
                   <form method="POST">
                    @foreach ($permissions as $permission)
                    <div class="title">
                        <label for="floating_name" class="peer-focus:font-medium  text-sm text-gray-50">{{ucfirst($permission->permission_name)}}</label>
                  </div>
                   <div class="role">
                    <input type="checkbox" value="{{$permission->id}}" name="roles_permission" id="roles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm" />
                   </div>
                    @endforeach
                   <div class="save_cancel my-4">
                       <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button> <a href="{{route('roles.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cancel</a>
                   </div>
                   </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
