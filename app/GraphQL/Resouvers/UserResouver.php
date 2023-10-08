<?
namespace App\GraphQL\Resolvers;

use App\Models\User;

class UserResolver
{
    public function allUsers()
    {
        return User::all();
    }
}
