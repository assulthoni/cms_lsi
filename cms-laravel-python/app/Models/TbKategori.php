<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbKategori
 * 
 * @property int $id_kategori
 * @property string $kategori
 * 
 * @property TbKategoriTum $tb_kategori_tum
 *
 * @package App\Models
 */
class TbKategori extends Model
{
	protected $table = 'tb_kategori';
	protected $primaryKey = 'id_kategori';
	public $timestamps = false;

	protected $fillable = [
		'kategori'
	];

	public function tb_kategori_tum()
	{
		return $this->hasOne(TbKategoriTum::class, 'id_kategori');
	}
}
