<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TbTugasAkhir
 * 
 * @property int $id_ta
 * @property string $judul
 * @property string $penulis
 * @property Carbon $tahun
 * @property int $id_pembimbing
 * @property int $id_prodi
 * @property boolean $abstract
 * @property string $nama_file
 * 
 * @property TbPembimbing $tb_pembimbing
 * @property TbProgramStudi $tb_program_studi
 * @property TbIndexTum $tb_index_tum
 * @property TbKategoriTum $tb_kategori_tum
 *
 * @package App\Models
 */
class TbTugasAkhir extends Model
{
	protected $table = 'tb_tugas_akhir';
	protected $primaryKey = 'id_ta';
	public $timestamps = false;

	protected $casts = [
		'id_pembimbing' => 'int',
		'id_prodi' => 'int'
	];

	protected $dates = [
		
	];

	protected $fillable = [
		'judul',
		'penulis',
		'tahun',
		'id_pembimbing',
		'id_prodi',
		'abstract',
		'nama_file'
	];

	public function tb_pembimbing()
	{
		return $this->belongsTo(TbPembimbing::class, 'id_pembimbing');
	}

	public function tb_program_studi()
	{
		return $this->belongsTo(TbProgramStudi::class, 'id_prodi');
	}

	public function tb_index_tum()
	{
		return $this->hasOne(TbIndexTum::class, 'id_ta');
	}

	public function tb_kategori_tum()
	{
		return $this->hasOne(TbKategoriTum::class, 'id_ta');
	}
}
