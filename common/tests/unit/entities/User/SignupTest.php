<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 02.02.18
 * Time: 17:19
 */

namespace common\tests\unit\entities\User;


use Codeception\Test\Unit;
use common\entities\User;

class SignupTest extends Unit
{
    public function testSuccess()
    {
        $user = User::signup(
            $username = 'username',
            $email = 'email@site.com',
            $password = 'password'
        );

        $this->assertEquals($username, $user->username);
        $this->assertEquals($email, $user->email);
        $this->assertNotEmpty($user->password_hash);
        $this->assertNotEquals($password, $user->password_hash);
        $this->assertNotEmpty($user->created_at);
        $this->assertNotEmpty($user->auth_key);
        $this->assertTrue($user->isActive());
    }
}