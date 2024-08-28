<x-layout>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    All task
    <div class="mt-6 text-gray-500">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio provident ducimus
         quo quis voluptatibus, iste quas quam accusantium ratione quos reprehenderit? Est 
         quidem asperiores culpa doloremque impedit quasi incidunt illum? Modi commodi 
         repellat exercitationem, libero nobis quidem corrupti similique ad! 
    </div>
<!-- atituku just display anar jonno new hoyeche -->
 @if($showToolbar)
     <p>
        totol task {{count($task)}}
    </p>
     <x-task-status : status="{{request()->get('status')}}"/>
    </div>
    @else
    <a href="{{route('task.index')}}"
                class="my-5 inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 mr-2">
                All task
    </a>
   @endif
    
    <div class="container mx-auto ml-10 mb-10" >
        @foreach($task as $tasks)
        
         <x-task :$tasks/>
        @endforeach
        </div>
</x-layout>
