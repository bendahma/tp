<x-app-layout>
   <x-slot name="header" class="flex items-center ">
      <a href="{{url('/')}}" class="uppercase font-semibold text-sm hover:underline hover:text-black hover:font-bold"><i
            class="fas fa-home"> </i></a>
      <span class="text-base font-bold mx-1">/</span>
      <a href="{{route('users.index')}}"
         class="text-base font-semibold uppercase hover:underline hover:text-black hover:font-bold">{{ __("lang.Users")
         }}</a>
      <span class="text-base font-bold mx-1">/</span>
      <a href="{{route('users.show',$user->id)}}"
         class="text-base font-semibold uppercase hover:underline hover:text-black hover:font-bold">Profile</a>

   </x-slot>

   <div class="">
      <div class="">

         <div class="container mx-auto my-5 p-5">
            
            <div>
               <div class="md:flex no-wrap md:-mx-2 ">
                  <div class="w-full md:w-3/12 md:mx-2">
                     <form wire:submit.prevent="saveNewUser">
                        @csrf
                        <div>
                           <div class="py-3 center mx-auto">
                              <div class="bg-transparent px-4 py-5 rounded-lg text-center w-54">
                                 <div class="mb-4">
                                    <img class="w-auto mx-auto rounded-full object-cover object-center"
                                       src="{{is_null($user->image_url) ? 'https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg' : asset('storage/'.$user->image_url)}} "
                                       alt="user profile image" />
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
                  
                  <div class="w-full md:w-9/12 mx-2 h-64">
                        <div class="bg-white p-3 shadow-lg rounded-lg">
                           
                              <div class="text-gray-700">
                                 <div class="grid md:grid-cols-1 text-sm">
                                    <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Name</div>
                                       <div class="px-4 py-2 flex flex-col">
                                          <input type="text" class="w-full rounded-lg font-semibold px-4 py-2" readonly value="{{$user->name}}">            
                                       </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Username</div>
                                       <div class="px-4 py-2 flex flex-col">
                                          <input type="text" class="w-full rounded-lg font-semibold px-4 py-2" readonly value="{{$user->username}}">            
                                       </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">E-mail</div>
                                       <div class="px-4 py-2 flex flex-col">
                                          <input type="email" class="w-full rounded-lg font-semibold px-4 py-2" readonly value="{{$user->email}}" >            
                                       </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Password</div>
                                       <div class="px-4 py-2 flex flex-col">
                                          <input type="password" class="w-full rounded-lg font-semibold px-4 py-2" readonly value="**********">
                                       </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">{{__("lang.account")}}</div>
                                       <div class="px-4 py-2 flex flex-col">
                                          <div class="px-3 py-1 text-sm font-bold text-center rounded-full shadow-sm {{ $user->suspended ? 'bg-red-600 text-gray-100' : 'bg-blue-200 text-gray-900' }}">
                                             {{$user->suspended ? __("lang.suspended"): 'Active'}}
                                          </div>                                       </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                       <div class="px-4 py-2 font-semibold">Permissions</div>
                                       <div class="px-4 py-2 flex flex-wrap">
                                          @foreach ($user->permissions as $permission)
                                             <span class="bg-green-200 text-green-800 text-xs gap-y-2 text-center font-semibold mr-1 px-4 pt-1 pb-1.5 mt-1 rounded-full ">
                                                {{$permission->name}}
                                             </span>
                                          @endforeach
                                       </div>
                                    </div>
                                 </div>
                              </div> 
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            
            
         </div>
      </div>
   </div>

</x-app-layout>