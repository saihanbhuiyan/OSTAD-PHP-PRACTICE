<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\task;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
//task truncate korahoi db:seed use korle jeno protibar database empty kore only10ti data/row 
//e entry korbe database a(akhn jotobar e seed korina kno 10ti data e thakbe database a)
        task::truncate(); 

        //***********task model k use kore nite hobe
        //*********** database a taskSeeder k call korte hobe
       for($i=0;$i<10;$i++){
        task::create([
            //****akhane amra fake()->erpor ki cacche ta boledite hobe(like sentence date ect ect)
       //**** er modde amra length o boledite pari kototi character cacchelik 10,20,ect
       'title'=>fake()->sentence(5),
       'description'=>fake()->sentence(20),
       'due_date'=>now()->addDays(rand(1,7))
       //due_date direct(7) na diye jodi ek theke 7er modde jekono ekti use korte chai tahole
       //--->addDays(er vitore rand(1,7) rand use kore koto theke koto diner modde dekhte cahile ta bole dile)
       //--->protibar different different day asbe due_date
       //##database a protibar different different date asche(checked)
       ]);
       }
    }
}
//TASKSEEDER A AMRA KI KORBO?
        //1)use app\Models\task; TASK SEEDER A AMRA PROTHOMOTO task namok moder k add korbo,
        //2)trpr controller a ja creat ba jai korbo ta taskSeeder a run er vitore bosiye dibo
        //--->(jemon amra akhane creat koreche so task::create([])) areata bosiye diyeche
        //3)then ai taskSeeder k databaseSeeder.php te call korte hobe must