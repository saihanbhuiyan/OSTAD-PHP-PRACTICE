<x-layout >
    <x-slot:title>
        this is a con form
</x-slot:title>
    <h1>this is a contact form</h1>
    
</x-layout>
<!-- akhene action a post hoyeche karon data form theke send hobe  -->
<form action="{{route("contact.post")}}" method="post">
        @csrf
        <label for="name">name</label>
        <input type="text" name=" name">
        <label for="email">email</label>
        <input type="enamil" name="email">
        <label for="submit"></label>
        <button type="submit" name="submit">submit</button>
        <p>  {{session("success")}}</p>
        <p>  {{session("name")}}</p>
        <p>  {{session("email")}}</p>
        <!-- session er maddome data gulu k store koreche ai page a tai sessio akhane diyeche 
         success name o emai hocche key jar value bosbe  -->
         
    </form>
