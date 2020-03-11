<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbIndex
 * 
 * @property int $id_index
 * @property string $kata
 * 
 * @property TbIndexTum $tb_index_tum
 *
 * @package App\Models
 */
class TbIndex extends Model
{
	protected $table = 'tb_index';
	protected $primaryKey = 'id_index';
	public $timestamps = false;

	protected $fillable = [
		'kata'
	];

	public function tb_index_tum()
	{
		return $this->hasOne(TbIndexTum::class, 'id_index');
	}
}
