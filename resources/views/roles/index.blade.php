<x-app-layout>
    <x-sidebar />
    

    <div class="py-12">
        <div class="ml-80  sm:px-6 lg:px-8">
            <div class="roles-create">
                <a href="{{route('roles.create')}}" class="bg-blue-600 text-white p-2 rounded-md">Create Roles</a>
           </div>
            <div class="dark:bg-gray-700 shadow-sm sm:rounded-lg">
               

                <div class="table w-full mt-4">
                  

<div class="overflow-x-auto">

    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    S.No
                </th>
                <th scope="col" class="px-6 py-3">
                    Role Name
                 </th>
               
                <th scope="col" class="px-6 py-3">
                   Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($roles as $role )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$loop->iteration}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$role->roles_name}}
                 </td>

                 <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <a href="{{route('roles.edit', $role->id)}}">Edit</a>
                 </td>
            </tr>
            @empty
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 col-span-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    No Data Available
                </td>
            </tr>
            @endforelse
           
        
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
