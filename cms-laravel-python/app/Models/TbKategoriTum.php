<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbKategoriTum
 * 
 * @property int $id_ta
 * @property int $id_kategori
 * 
 * @property TbKategori $tb_kategori
 * @property TbTugasAkhir $tb_tugas_akhir
 *
 * @package App\Models
 */
class TbKategoriTum extends Model
{
	protected $table = 'tb_kategori_ta';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_ta' => 'int',
		'id_kategori' => 'int'
	];

	protected $fillable = [
		'id_ta',
		'id_kategori'
	];

	public function tb_kategori()
	{
		return $this->belongsTo(TbKategori::class, 'id_kategori');
	}

	public function tb_tugas_akhir()
	{
		return $this->belongsTo(TbTugasAkhir::class, 'id_ta');
	}
}
