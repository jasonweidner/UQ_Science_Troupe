<?php
// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;
use app\models\User;

class SeedController extends Controller
{
    public function actionIndex()
    {
    
    // delete old User table data, but leave the table structure
    User::deleteAll();

    // define the database connection
    $connection = \Yii::$app->db;
    // reset the index AUTO_INCREMENT
    $model = $connection->createCommand('ALTER TABLE user AUTO_INCREMENT =1');
    $model -> execute();

    // WRITE NEW SQL DATA

    // Create faker object so faker data can be used. Pass en_AU for Australian context.
    $faker = \Faker\Factory::create('en_AU');

    $categories = array("community", "club", "officer");
        
        // CREATE 20 CLUB_MEMBERS
        for ( $i = 1; $i <= 20; $i++ )
        {
            $user = new User();
            // $user->setIsNewRecord(true);
            $user->email = $faker->freeEmail;
            // $user->email = "some@email.com";
            $user->user_category = "club_member";
            // array_rand($categories);
            $user->password = "123456";
            $user->username = $faker->username;
            // $user->username = "just_a_name";
            $user->date_entered = $faker->date($format = 'Y-m-d', $max = 'now');
            // $user->date_entered = "1";
            $user->phone_number = "123234345";
            $user->authKey = "2";
            $user->accessToken = "3";
            $user->save();
        }

    }
}

