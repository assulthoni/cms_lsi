<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbStopword
 * 
 * @property int $id_stopword
 * @property string $stopword
 *
 * @package App\Models
 */
class TbStopword extends Model
{
	protected $table = 'tb_stopword';
	protected $primaryKey = 'id_stopword';
	public $timestamps = false;

	protected $fillable = [
		'stopword'
	];
}
