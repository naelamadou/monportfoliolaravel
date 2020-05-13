<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CompetenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competences')->insert(
            [
               [
                  'name'=>'php',
                  'pourcentage'=>90,
                  'comments'=>'<p>mon language pr&eacute;f&eacute;rer</p>',
                  'user_id'=>1,
                  'type_competence_id'=>1,
                  'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                  'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
               ],
               [
                'name'=>'java',
                'pourcentage'=>40,
                'comments'=>'htmlentities(<p>mon language pr&eacute;f&eacute;rer</p>)',
                'user_id'=>1,
                'type_competence_id'=>1,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
             ],
             [
                'name'=>'Vue js',
                'pourcentage'=>50,
                'comments'=>'htmlentities(<p>mon language pr&eacute;f&eacute;rer</p>)',
                'user_id'=>1,
                'type_competence_id'=>1,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
             ],
             [
                'name'=>'Communication',
                'pourcentage'=>86,
                'comments'=>'<p>mon language pr&eacute;f&eacute;rer</p>',
                'user_id'=>1,
                'type_competence_id'=>2,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
             ],
             [
                'name'=>'Créativité',
                'pourcentage'=>86,
                'comments'=>'<p>mon language pr&eacute;f&eacute;rer</p>',
                'user_id'=>1,
                'type_competence_id'=>2,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
             ],
             [
                'name'=>'Gestion De Projet	',
                'pourcentage'=>86,
                'comments'=>'<p>mon language pr&eacute;f&eacute;rer</p>',
                'user_id'=>1,
                'type_competence_id'=>2,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
             ],
             [
                'name'=>'Travail En Equipe',
                'pourcentage'=>86,
                'comments'=>'<p>mon language pr&eacute;f&eacute;rer</p>',
                'user_id'=>1,
                'type_competence_id'=>2,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
             ],
             [
                'name'=>'C#',
                'pourcentage'=>86,
                'comments'=>'<p>mon language pr&eacute;f&eacute;rer</p>',
                'user_id'=>1,
                'type_competence_id'=>1,
                'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
             ]
 
          ]);
    }
}
