<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>1.understanding blade templet engine</h1>
    <p>in comment in blade karon ek e blade a 2ta route niye kaj korajaina</p>

    <!-- *****Value pass from controller to blade file -->
    <!-- controller a jeta property ba key seta blade file a ese variable hobe jemon ta akhane likheche -->
    <!-- akhane amra chaile double curly er vitore +,-,*,/ sob e korte perbo like -->
    <?php // <h2>2.ValueCatchFromController:{{$Result}}</h2>
   // <h2>ValueCatchFromController:{{100+200}}</h2> ?>

<h1>2.if else elseif endif in blade</h1>
    <!-- 3.****** if else in blade templet engine******** -->
     <?php // if ese condition apply korar jonno amader k @if() and @else() or @elseif @endif
     //--> use korte hobe shudu kono rokom {breaket chara} abong sokol condition apply kore 
     //-->last a bolte dite hibe @endif -->?>

    <h1>total make is:{{$mark}}</h1>
     @if($mark>80 && $mark<100)
    <h1>A+</h1>
    @elseif($mark>70 && $mark<80)
    <h1>A</h1>
    @elseif($mark>60 && $mark<70)
    <h1>B</h1>
    @elseif($mark>50 && $mark<60)
    <h1>C</h1>
    @elseif($mark>40 && $mark<50)
    <h1>D</h1>
    @else
    <h1>F</h1>
    @endif <?php //@if @else @endif ai things guluke attribute bole ?>
   
   <h1>4.asset binding to add img audio video ect in blade</h1>
   <?php 

//     4.**********asset binding***********{{asset()}} -->
// SOKOL LINK E ASSETES ER MADDOME USE KORBO SETA CSS JS IMG JAIHOKNA KNO TANAHOLE LIVE PROJECT A KHUJE PABONA
  ?>
    <img src="{{asset('.//public/64-photoRoom1.jpg')}}" alt="">

    <h1>5.switch case in blade</h1>
<?php 
//  5*****************switch case in blade********** -->
//  *.switch case use er khtreo @switch($variable) diye suru hobe then @case(value) then @break avabe sokol
//--> case comple kore @default diye @endswitch diye ses korte hobe  
// -->@if() @else @endif er poriborte chaile switch o use koraete pari as my wish

?>

   @switch($mark)
    @case(100)
    <h1>A+</h1>
    @break
    @case(80)
    <h1>A</h1>
    @break
    @case(70)
    <h1>B</h1>
    @break
    @case(60)
    <h1>C</h1>
    @break
    @case(50)
    <h1>D</h1>
    @break
    @case(40)
    <h1>D</h1>
    @break
    @default
    <h1>F</h1>
    @endswitch

    <h1>6.include for include pages in blade</h1>
    <!--6 ******************including blade templet engine ba blade subView**************** -->
<?php 
    // @include('folderName.blade.php') avabe amra ekadik blade file a amader page tike vag kore rekhe
    // -->ekti page a proyojonio blade gulu k ene ekti purnamgo rup dite pari atake bole componenet
    // @include('folderName.subfolderName.blade.php') use korahoi front-end er code gulu k ekjaigai rekhe
    // --> reuse korar jonno jeno ek e code bar bar likhte nahoi
    // ****ajonno view er vitoe ekti folder creat kori component name jar modde tinti blade file nibo 
    // -->1.index 2body 3footer abong ai blade file gulu k module16class2.blade.php file a bosiye jukto korbo
    ?>
    @include('componenets(Forinclude).index');
    @include('componenets(Forinclude).body');
    @include('componenets(Forinclude).footer');


    <h1>7.master layout in blade</h1>
    <!-- 7.****************master layout********** -->
<!-- controller a sokol kichu likha ache  -->

<h1>8.loop</h1>
<!-- 8.****************loop********** -->
 <!-- ajonno just ekti prperty nibo @for(tar vitore for loop we sokol property $i++) then curly 
  breaket er modde $id variable karn templete a sokol variable e double curly breaket er modde 
  bose{{$i}} then @endfor
  -->
 @for($i=0;$i<10;$i++)
 the value is : {{$i}}
 @endfor




</body>
</html>
