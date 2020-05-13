<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class SavoirFaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('savoir_faires')->insert(
            [
               [
                   
                  'title'=>'UI Design',
                  'describe'=>'<p><span style="color: #000000; font-family: roboto, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></p>',
                  'icone'=>'fa',
                  'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
  
               ],
               [
                   
                  'title'=>'Développement Web',
                  'describe'=>'<p><span style="color: #000000; font-family: roboto, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></p>',
                  'icone'=>'fa',
                  'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
               ],
               [
                   
                  'title'=>'Développement mobile',
                  'describe'=>'<p><span style="color: #000000; font-family: roboto, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span></p>',
                  'icone'=>'fa',
                  'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                   'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
               ]
          ]);
    }
}
