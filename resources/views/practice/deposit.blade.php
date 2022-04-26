<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Deposit Money Page') }}
      </h2>
  </x-slot>

  {{-- <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
               <a href="#">Deposit Now</a>
              </div>
          </div>
      </div>
  </div> --}}

  <div class="crad-header">
    <div class=" ml-4 card-body">
      <a href="#" class=" btn btn-sm btn-primary">Deposit Now</a><br><br>
      <a href="{{ route('user.detail', Crypt::encrypt('1')) }}" class="btn btn-sm btn-primary">Himel Details</a><br><br><br>
      <form action="{{ route('store.user') }}" method="POST">
        @csrf
        <div>
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <br><br>
        <button type="submit" class="btn btn-info" >Submit</button>
      </form>
    </div>
  </div>
  
</x-app-layout>
