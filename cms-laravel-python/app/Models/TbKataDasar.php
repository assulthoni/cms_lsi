<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TbKataDasar
 * 
 * @property int $id_katadasar
 * @property string $katadasar
 * @property string $tipe_katadasar
 *
 * @package App\Models
 */
class TbKataDasar extends Model
{
	protected $table = 'tb_kata_dasar';
	protected $primaryKey = 'id_katadasar';
	public $timestamps = false;

	protected $fillable = [
		'katadasar',
		'tipe_katadasar'
	];
}
