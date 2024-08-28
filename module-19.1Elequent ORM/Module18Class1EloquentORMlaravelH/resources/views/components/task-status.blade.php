<div class="my-5">
   <select name="status" onChange="filterStatus()" id="task-status" class="bg-gray-50, border border-gray-300, text-gray">
       <option value="All" @if($status=='All')selected @endif>All</option>
       <option value="pending" @if($status=='pending')selected @endif>Pending</option>
       <option value="completed" @if($status=='completed')selected @endif>Completed</option>
   </select>
   <script >
       function filterStatus(){
        let status = document.getElementById('task-status')
            if(status=='All'){
               // location.href='/task'
         //atake amra route diye o ante pari(="route('tasks.index')") kore
         location.href="{{route('task.index')}}" //kaj koreche
            }else{
                location.href='/task?status='+status.value
            }
        }
       
   </script>
</div>