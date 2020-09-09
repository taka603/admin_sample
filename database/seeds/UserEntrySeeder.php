<?php

use Illuminate\Database\Seeder;

class UserEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Modelを利用した作成の場合、DatabaseSeeder.phpのcallをコメントアウトしないとdb:seedを実行した時にエラーになる
        UserEntry::create([
            'title' => 'UserEntryクラスで作成したtitle',
            'body' => 'UserEntryクラスで作成したbody',
        ]);
    
    }
}
