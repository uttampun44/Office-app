<x-app-layout>
    <x-sidebar />
    

    <div class="py-12">
        <div class="ml-80  sm:px-6 lg:px-8">
            <div class="permission-create">
                <a href="{{route('permission.create')}}" class="bg-blue-600 text-white p-2 rounded-md">Create Permission</a>
           </div>
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="table w-full mt-4">
                  

<div class="overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    S.No
                </th>
                <th scope="col" class="px-6 py-3">
                    Permission Name
                 </th>
               
                <th scope="col" class="px-6 py-3">
                   Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($permissions as $permission )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{$loop->iteration}}
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$permission->permission_name}}
                 </td>

                 <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$permission->permission_name}}
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
