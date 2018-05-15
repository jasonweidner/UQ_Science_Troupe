// commands/SeedController.php
namespace app\commands;

use yii\console\Controller;
use app\models\User;

class SeedController extends Controller
{
    public function actionIndex()
    {
        $faker = \Faker\Factory::create('en_AU');

        $user = new User();
        for ( $i = 1; $i <= 20; $i++ )
        {
            $user->setIsNewRecord(true);
            $user->id = i;
            $user->email = 1;
            $user->user_category = 1;
            $user->password = '123456';
            $user->username = $faker->username;
            $user->date_entered = $faker->iso8601();
            $user->phone_number = $faker->phoneNumber;
            $user->authKey = i;
            $user->accessToken = i;
            $user->save();
        }

    }
}

