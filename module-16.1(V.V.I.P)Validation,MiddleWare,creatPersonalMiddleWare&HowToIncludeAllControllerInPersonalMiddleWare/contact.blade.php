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
        <input type="text" name=" name" value="{{old("name")}}"><!--akhane Value={{old("name")}} 
         korahoyeche karon jeno validatoin a kono error asle name field er data ti chole na jai avabe chaile 
         sob gulu input file a value diye {{old("name")}} set koredite pari-->

         <p>
            @error("name")
              {{ $message }} <!--INPUT FILER NICHE ERROR MESSAGE DEKHANOR JONNO AVABE BOLEDITE PARI-->
            @enderror
         </p>
         <!-- avabe amra protita field er niche error message dekhate pari avabe dile r @foreach($errors->all()as $errors) array lagbena
         
         @endforeach -->
<br>
        <label for="email">email</label>
        <input type="enamil" name="email" value = "{{old("email")}}">
        <!-- jodi price set kori tahole ki ki validation korte parbo seta dekhar jonno price niyeche module16class1 A -->
       <P>
        @error("email")
          {{ $message }} 
        @enderror
       </P>
       
        <br>
        <label for="price">price</label>
        <input type="number" name="price" value="{{old("price")}}">
        <label for="submit"></label>
        <button type="submit" name="submit">submit</button>
        <!-- <p>  {{session("success")}}</p>
        <p>  {{session("name")}}</p>
        <p>  {{session("email")}}</p> -->
        <!-- session er maddome data gulu k store koreche ai page a tai sessio akhane diyeche 
         success name o emai hocche key jar value bosbe  -->


         <!-- Module16 class 1  -->
         @if (session("success"))
          <p>{{session("success")}}</p>
          <p>{{session("name")}}</p>
          <p>{{session("email")}}</p>

         @endif

        <?php //akhane php niyeche comment newar jonno <?----> er comment a hocchilona error dekhacchilo tai

        //   jodi ki error hoyeche seta dekhate chai tahole @if($errors->any()) er vitore $errors->first()
        // OTHOBA foreach diye ekti loop chalabo @foreach($errors->all() as $error) <p>{{$errors}}</p>@endforeach kore $errors->all() k as er maddome $errors variablea a rekhe pore $errors k k niche bole dilei hobe seta <p>er moddeo dileo hobe na dileo hobe
        //  boledibo @endif jodi shudu ekti error dekhte chai tahole <p>{{$errors->first()</p>boledibo 
        //  tahole shudu ekti error e dekhabe joto error e thakuk na kno shudu prothom error e dekhabe
        //  (jemon name o required email o but amra konoti e na diye submit koreche form a tahole shudu name require error 
        //  e dekhabe email dekhabena karon first use koreche) r jodi @foreach($errors->all() as $error) bole dei tahole joto 
        //  error asbe sob dekhane
        
        ?>

        @if($errors->any())
        <!-- <p> {{$errors->first()}}</p> -->
        <!-- akhane name o email 2tai required kore konota na diye e submit koreche but error asche shudu name 
         er(errorOutput :The name field is required.) -->

        @foreach($errors->all() as $errors)
        <p>{{$errors}}</p><!--msg: The name field is required. The email field is required.-->
        
        @endforeach
        @endif
          
    </form>
