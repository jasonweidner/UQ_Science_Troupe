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
    // $faker = \Faker\Factory::create('en_AU');
        
        // UPDATE USER TABLE    
        // CREATE 20 CLUB_MEMBERS, 5 CLUB_OFFICERS and 10 COMMUNITY_MEMBERS
        for ( $i = 1; $i <= 1; $i++ ){
            $user = new User();
            $user->email = 'jweidner@gmail.com'; //$faker->freeEmail;
                
            // if ($i <= 20 && $i % 5 === 0 ) {
            //     $user->user_category = "club_officer";
            // } elseif ($i <= 25 ) {
            //     $user->user_category = "club_member";
            // } else {
            //     $user->user_category = "community_member";
            // }

            $user->password_hash = "123456";
            $user->username = 'jweidner'; //$faker->username;
            //$user->date_entered = $faker->date($format = 'Y-m-d', $max = 'now');
            //$user->phone_number = "123234345";
            $user->auth_key = "authkey";
            //$user->accessToken = "accesstoken";
            $user->save();
        }

        // // UPDATE CLUB_MEMBERS TABLE    
        // // CREATE 20 CLUB_MEMBERS, 5 CLUB_OFFICERS
        // // get array of user ids 
        // // for each user, update the table
        // foreach ( $i = 1; $i <= 35; $i++ ){
        //     $club_members = new User();
        //     $club_members->email = $faker->freeEmail;
        //     $club_members->name = "123456";
        //     $club_members->join_date = $faker->username;
        //     $club_members->membership_payment_date = $faker->date($format = 'Y-m-d', $max = 'now');
        //     $club_members->membership_payment_amount = "123234345";
        //     $club_members->training_courses_passed = "2";
        //     $club_members->next_due_date = "3";
        //     $club_members->membership_status = "3";
        //     $club_members->save();
        // }

    }
}

