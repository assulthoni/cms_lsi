<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbProgramStudi
 * 
 * @property int $id_prodi
 * @property string $nama_prodi
 * 
 * @property Collection|TbTugasAkhir[] $tb_tugas_akhirs
 *
 * @package App\Models
 */
class TbProgramStudi extends Model
{
	protected $table = 'tb_program_studi';
	protected $primaryKey = 'id_prodi';
	public $timestamps = false;

	protected $fillable = [
		'nama_prodi'
	];

	public function tb_tugas_akhirs()
	{
		return $this->hasMany(TbTugasAkhir::class, 'id_prodi');
	}
}
