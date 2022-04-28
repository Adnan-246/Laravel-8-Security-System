<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Change Your Password ') }}
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
  <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8">
       <div class="card">
       <div class="card-body">
        @if(session()->has('success'))
      <strong class="text-success">{{ session()->get('success') }}</strong>
      @endif

      @if (session()->has('error'))

      <strong class="text-danger">{{ session()->get('error') }}</strong>
        
      @endif

      <form action="{{ route('update.password') }}" method="POST">
        @csrf
        <div>
          <label>Current Password</label>
          <input type="password" name="old_password" class="form-control" required>
        </div>
        <br>
        <div>
          <label>New Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid
            
          @enderror" required>
        </div>
        <br>
        <div>
          <label>Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <br><br>
        <button type="submit" class="btn btn-info" >Change Password</button>
      </form>
       </div>
     </div>
   </div>
  </div>
</div>

  <div class="crad">
    <div class=" ml-4 card-body">
      {{-- <a href="#" class=" btn btn-sm btn-primary">Change Password</a><br><br> --}}
      {{-- <a href="{{ route('user.detail', Crypt::encrypt('1')) }}" class="btn btn-sm btn-primary">Himel Details</a>--}}
      
      {{-- <br><br><br>  --}}
      
    </div>
  </div>
  
</x-app-layout>
