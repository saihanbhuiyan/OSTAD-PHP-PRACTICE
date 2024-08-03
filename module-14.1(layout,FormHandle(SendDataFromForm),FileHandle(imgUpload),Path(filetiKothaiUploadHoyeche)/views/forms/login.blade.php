<x-layout >
    <x-slot:title>
        this is a log form
</x-slot:title>
    <h1>this is a lofin form</h1>
    
</x-layout>

 <!-- ***********************FORM HANDLE************ -->
     
 <form action="{{route("login.php")}}" method="post">
        @csrf
        <label for="name">name</label>
        <input type="text" name=" name">
        <label for="email">email</label>
        <input type="enamil" name="email">
        <label for="submit"></label>
        <button type="submit" name="submit">submit</button>

        
    </form>
