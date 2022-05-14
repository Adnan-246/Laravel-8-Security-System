
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('All Classes') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                <a href="" class="btn btn-sm btn-primary" style="float:right;">Add New </a>
               <table class="table table-responsive table-stripe">
                 <thead>
                   <tr>
                     <td>SL</td>
                     <td>Class Name</td>
                     <td>Action</td>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     @foreach($class as $key=>$row)
                      <td>{{ ++$key }}</td>
                      <td>{{ $row->class }}</td>
                      <td>
                        <a href="" class="btn btn-sm btn-info">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                </tr>
                     @endforeach
                 </tbody>
               </table>
               
              </div>
             
          </div>
      </div>
  </div>
  
</x-app-layout>
