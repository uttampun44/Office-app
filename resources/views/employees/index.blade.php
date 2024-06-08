<x-app-layout>
    <x-sidebar />
    

    <div class="py-12">
        <div class="ml-80  sm:px-6 lg:px-8">
            <div class="roles-create">
                <a href="{{route('employees.create')}}" class="bg-blue-600 text-white p-2 rounded-md">Create Employee</a>
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
                    Name
                 </th>
               
                <th scope="col" class="px-6 py-3">
                   Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Gender
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Number
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Date Of Birth
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Designation
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Address
                 </th>

            </tr>
        </thead>
        <tbody>
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                
                </td>
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                 </td>

                 <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  
                 </td>
            </tr>
         
        
           
        
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
