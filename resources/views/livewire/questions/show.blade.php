<div>
   <div class="flex gap-x-3">

      @foreach ($questions as $partie)
      <div class="w-full bg-white rounded-lg shadow-lg px-6 py-4 ">
         <span class="text-xl font-bold "> Partie {{$loop->iteration}} : </span>
         @foreach ($partie as $question)
         <span class=" flex justify-between items-center text-md font-semibold text-gray-700">
            {{$question->name}}
            <div class="flex justify-center gap-x-2 mx-3 my-3 ">
               <a href=""><i class="fas fa-edit text-blue-600"></i></a>
               <form action="">
                  @csrf
                  <button class="" type="submit"><i class="fas fa-trash-alt text-red-500"></i></button>
               </form>
            </div>

         </span>
         @endforeach
      </div>
      @endforeach
   </div>
</div>