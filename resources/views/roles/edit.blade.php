<x-app-layout>
    <x-sidebar />
    

    <div class="py-12">
        <div class="ml-80 mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg py-4">
                

<form class="max-w-md mx-auto" method="POST" action="{{route('roles.update', $roles->id)}}">
    @csrf
  
@foreach ($permissions as $permissions)


<div class=" w-full mb-5 group">
    <label for="floating_name" class="peer-focus:font-medium  text-sm text-white">{{$permissions->permission_name}}</label>
    <input type="checkbox" name="permission_id" value="{{$permissions->id}}" class="block py-2.5 px-0 rounded-sm "  />
   
</div>
@endforeach
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
  
            </div>
        </div>
    </div>
    
</x-app-layout>
