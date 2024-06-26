<x-app-layout>
    <x-sidebar />
    

    <div class="py-12">
        <div class="ml-80 mx-auto sm:px-6 lg:px-8">
            <div class=" bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg py-4">
                

<form class="max-w-sm mx-auto" method="POST" action="{{route('roles.store')}}">
    @csrf
    <div class="mb-5">
      <label for="roles" class="block mb-2 text-sm font-medium text-white dark:text-white">Role</label>
      <input type="text" name="roles" id="roles" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required />
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
            </div>
        </div>
    </div>
</x-app-layout>
