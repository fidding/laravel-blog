<?php
/**
 * User: 洪加煌<395455856@qq.com>
 */
use Illuminate\Database\Seeder;
class NavSeeder extends Seeder{

    public function run(){
        $nav = [
            [
                'sequence'=>1,
                'name'=>'关于我',
                'url'=>'/about'
            ],
            [
                'sequence'=>2,
                'name'=>'留言',
                'url'=>'/message'
            ],
        ];
        DB::table('navigation')->insert($nav);
    }

}
