@extends('layouts.main')
@section('container')


<div class="flex mt-5 ml-5 items-start justify-start  container mx-auto">
    <!-- <img src="img3.jpeg" class="w-32 rounded-lg mb-5"> -->
    <div class="flex max-w-sm ml-8 mt-3 ">
    <button id="btn34" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
        </svg>
        Tambah Folder
    </button>
</div>
        <div id="modals" class="flex items-center justify-center hidden">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true">
                    <div class="flex flex-col mx-auto pt-28 ">
                <div class="w-full mx-auto max-w-sm p-4 bg-gray-900 border border-gray-200 rounded-[20px] justify-items-center">
                  <h5 class="text-xl font-medium text-white dark:text-white mb-4  text-center">MENAMBAHKAN  </h5>
                 <form class="space-y-2" action="/createFolder" method="POST">
                 @csrf 
                 <label for="username" class="block tecxt-sm font-medium text-white dark:text-white">Nama Folder :</label>
                 <div class="grid justify-items-center">
                         <input name="nama_folder" type="text" placeholder="username" class="h-9 form-input w-full bg-transparent border-yellow-600 py-3 px-3 rounded-lg outline-none text-white dark:text-white">
                     </div>
                    <!-- <label for="username" class="block text-sm font-medium text-white dark:text-white">role :</label> -->
                    
                         <input type="hidden" value="{{ session()->get('role') }}"  name="role">
                     
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Tambah
                    </button>
                    <a href="/" id="batals"  class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-white rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-red-600">Batal </a>
                     <!-- <button type="submit" class="w-20 h-8 font-bold bg-blue-600 rounded-lg py-3 ">login</button> -->
                     <!-- <button type="submit" class="items-center w-50 h-8 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login </button>    -->
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
</div>
</div>
</div>
</div>



<!-- Edit user modal -->
    

@endsection