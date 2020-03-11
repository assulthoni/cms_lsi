<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $remember_token
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'password',
		'remember_token'
	];
}
