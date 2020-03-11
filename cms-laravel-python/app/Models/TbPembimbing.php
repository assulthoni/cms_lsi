<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbPembimbing
 * 
 * @property int $id_pembimbing
 * @property string $nama_pembimbing
 * 
 * @property Collection|TbTugasAkhir[] $tb_tugas_akhirs
 *
 * @package App\Models
 */
class TbPembimbing extends Model
{
	protected $table = 'tb_pembimbing';
	protected $primaryKey = 'id_pembimbing';
	public $timestamps = false;

	protected $fillable = [
		'nama_pembimbing'
	];

	public function tb_tugas_akhirs()
	{
		return $this->hasMany(TbTugasAkhir::class, 'id_pembimbing');
	}
}
