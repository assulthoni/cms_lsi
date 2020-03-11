<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbIndexTum
 * 
 * @property int $id_ta
 * @property int $id_index
 * @property int $jumlah
 * 
 * @property TbTugasAkhir $tb_tugas_akhir
 * @property TbIndex $tb_index
 *
 * @package App\Models
 */
class TbIndexTum extends Model
{
	protected $table = 'tb_index_ta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_ta' => 'int',
		'id_index' => 'int',
		'jumlah' => 'int'
	];

	protected $fillable = [
		'id_ta',
		'id_index',
		'jumlah'
	];

	public function tb_tugas_akhir()
	{
		return $this->belongsTo(TbTugasAkhir::class, 'id_ta');
	}

	public function tb_index()
	{
		return $this->belongsTo(TbIndex::class, 'id_index');
	}
}
