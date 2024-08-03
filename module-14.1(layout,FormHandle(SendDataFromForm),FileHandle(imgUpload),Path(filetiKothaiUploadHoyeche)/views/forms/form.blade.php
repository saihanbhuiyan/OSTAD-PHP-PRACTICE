<x-layout>
    <x-slot:title>
        file handle
    </x-slot:title>
</x-layout>
<form enctype="multipart/form-data" action="{{route('form.post')}}" method="post">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name">
    <label for="email" name="email">email</label>
    <input type="email" name="email">
    <label for="profile-picture">profile-picture</label>
    <input type="file" name="profile-picture">
    <br>
    <button type="submit" name="submit">submit</button>

     <p>{{session("success")}}</p>
</form>