<?php

define('OPENWEATHER_API_KEY', 'd2bae2af195bb3f8ecf16ab3e107132d');


function sakura_db_info(){
    
    $associative_array = array(
        "db_name" =>    "wellnoa_gs_kadai08_db1",               //データベース名
        "db_host" =>    'mysql3109.db.sakura.ne.jp', //DBホスト
        "db_id" =>      'wellnoa_gs_kadai08_db1',                  //アカウント名
        "db_pw" =>      'kadai08_db1'            //パスワード。さくらのDBのPW
    );

    return $associative_array;
}


?>