<x-app-layout>
    <x-sidebar />
    

    <div class="py-12 ml-80  ">
        <div class="sm:px-6 lg:px-8">
            <div class="roles-create">
                <a href="{{route('employees.create')}}" class="bg-blue-600 text-white p-2 rounded-md">Create Employee</a>
           </div>
            <div class="bg-gray-700 shadow-sm sm:rounded-lg">
               

                <div class="table w-full mt-4">
                  

<div class="overflow-x-auto">

    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-700 text-white">
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
                 <th scope="col" class="px-6 py-3">
                  Action
               </th>

            </tr>
        </thead>
        <tbody>
           @forelse ($employees as $employee)
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{$loop->iteration}}
            </td>
           
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$employee->name}}
             </td>
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$employee->email}}
             </td>
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
             @if($employee->gender == 1)
                 Male
                 @else
                 Female
             @endif
             </td>
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$employee->number}}
             </td>
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$employee->date_of_birth}}
             </td>
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               {{$employee->designation->roles_name}}
             </td>
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$employee->address}}
             </td>
             <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
               <a href="{{route('employees.edit', $employee->id)}}">Edit</a>
            </td>
        </tr>
     
           @empty
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td scope="row" class="px-6  col-span-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
