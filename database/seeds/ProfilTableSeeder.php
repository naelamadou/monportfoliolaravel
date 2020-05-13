<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ProfilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('profils')->insert(
            [
               [
                   
                   'libelle'=>'Développeur Web',
                   'nom_rue'=>'15, Cite mame Rhane',
                   'ville'=>'DAKAR',
                   'email2'=>'nayel121@hotmail.com',
                   'phone1'=>'(+221) 77-502-58-38',
                   'phone2'=>'(+221) 77-144-57-49',
                   'describe'=>'htmlentities(<p>Je recherche id&eacute;alement un poste responsabilisant et motivant afin de mettre en pratique mes comp&eacute;tences ainsi que mon exp&eacute;rience tout en acqu&eacute;rant de nouvelles..</p>
                   <div id="gtx-trans" style="position: absolute; left: -49px; top: -14px;">
                   <div class="gtx-trans-icon">&nbsp;</div>
                   </div>)',
                   'cv'=>'[{"download_link":"profils\\May2020\\Bwz5SbdQaS0EfIxKJLks.pdf","original_name":"Amadou gueye Nael cv 13032020.pdf"}]',
                   'user_id'=>1,
                   'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
  
               ]
          ]);
    }
}
