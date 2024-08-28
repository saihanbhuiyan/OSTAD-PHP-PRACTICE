<!-- <div class = 'mt-10 , ml-10 , mb-10' > 
        <p>{{$tasks->title}}</p>
        <p>{{$tasks->description}}</p>
        <p>{{\carbon\carbon::parse($tasks->due_date)->diffForHumans()}}</p>
        <p>{{$tasks->status}}</p>
        {{$slot}}
</div> -->

<div class="mt-5 rounded-lg border bg-card text-card-foreground shadow-sm" data-id="7" data-v0-t="card">
    <div class="flex flex-col space-y-1.5 p-6" data-id="8">
        <div class="flex items-center justify-between" data-id="9">
            <div data-id="10">
                <a href="{{ route('task.show', $tasks) }}">
                    <h3 class="text-lg font-medium" data-id="11">
                      {{$tasks->id}} : {{ $tasks->title }}
                    </h3>
                </a>
                <p class="text-lg text-muted-foreground" data-id="12">
                    {{ \Carbon\Carbon::parse($tasks->due_date)->diffForHumans() }}
                </p>
            </div>
            <div class="inline-flex w-fit items-center whitespace-nowrap rounded-full border font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-2 py-1 text-xs"
                data-id="13" data-v0-t="badge">
                {{ $tasks->status }}
            </div>
        </div>
    </div>
    <div class="p-6" data-id="14">
        <p class="text-muted-foreground" data-id="15">
            {{ $tasks->description }}
        </p>
    </div>

    <div class="items-center p-6 flex justify-end" data-id="16">
        <form action="{{route('task.update',$tasks)}}" method="POST">
           @method ('PATCH')
           @csrf
            <input type="hidden" name="status" value="{{$tasks->status=='completed'?'pending':'completed'}}">
            <button type="submit"
                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 mr-2">
                Mark As {{ $tasks->status == 'completed' ? 'Pending' : 'Completed' }}
            </button>

        </form>
    </div>
   
</div>