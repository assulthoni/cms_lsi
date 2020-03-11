<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbUser
 * 
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $jenis_user
 *
 * @package App\Models
 */
class TbUser extends Model
{
	protected $table = 'tb_user';
	protected $primaryKey = 'id_user';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'jenis_user'
	];
}
