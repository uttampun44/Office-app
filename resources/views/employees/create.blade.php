<x-app-layout>
    <x-sidebar />
    

    <div class="py-12">
        <div class="ml-80 mx-auto sm:px-6 lg:px-8">
            <div class=" bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg py-4">
                
                

<form class="max-w-md mx-auto" method="POST" action="{{route('employees.store')}}">
    @csrf
    <div class=" w-full mb-5 group">
        <label for="floating_name" class="peer-focus:font-medium  text-sm text-gray-50">Name</label>
        <input type="text" name="name" id="floating_name" class="block text-white py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
       
    </div>
    <div class=" w-full mb-5 group">
        <label for="floating_email" class="peer-focus:font-medium  text-sm text-gray-50">Email address</label>
        <input type="email" name="email" id="floating_email" class="block text-white py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
       
    </div>
    <div class=" w-full mb-5 group">
        <label for="floating_email" class="peer-focus:font-medium  text-sm text-gray-50">Password</label>
        <input type="password" name="password" id="floating_email" class="block text-white py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
       
    </div>
    <div class=" w-full mb-5 group">
        <label for="gender" class="peer-focus:font-medium  text-sm text-gray-50">Gender</label><br>
        <select name="gender" class="w-full rounded-md">
            <option value="1" selected class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300">Male</option>
            <option value="0" class="block py-2.5 px-0 w-full text-sm text-gray-900 border-0 border-b-2 border-gray-300">Female</option>
        </select>
    </div>
    <div class=" w-full mb-5 group">
        <label for="number" class="peer-focus:font-medium  text-sm text-gray-50">Number</label>
        <input type="text" name="number" id="floating_email" class="block text-white py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
       
    </div>

    <div class=" w-full mb-5 group">
        <label for="date_of_birth" class="peer-focus:font-medium  text-sm text-gray-50">Date of birth</label>
        <input type="date" name="date_of_birth" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer text-white" placeholder=" " required />
       
    </div>

    <div class=" w-full mb-5 group">
        <label for="floating_email" class="peer-focus:font-medium  text-sm text-gray-50">Designation</label><br>
        <select name="designation" class="w-full rounded-md">
            @foreach($roles as $role )      
            <option value="{{$role->id}}" class="block  py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 ">{{$role->roles_name}}</option>
            @endforeach
          
        </select>
       
    </div>

    <div class=" w-full mb-5 group">
        <label for="floating_email" class="peer-focus:font-medium  text-sm text-gray-50">Address</label>
        <textarea name="address" class="block text-white py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 dark:text-white"></textarea>
       
    </div>


    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
            </div>
        </div>
    </div>
    
</x-app-layout>