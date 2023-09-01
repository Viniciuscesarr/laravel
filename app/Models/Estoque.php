<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estoque
 * 
 * @property int $id
 * @property string $nome
 * @property int $produto_id
 * @property int|null $quantidade
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Produto $produto
 *
 * @package App\Models
 */
class Estoque extends Model
{
	protected $table = 'estoque';

	protected $casts = [
		'produto_id' => 'int',
		'quantidade' => 'int'
	];

	protected $fillable = [
		'nome',
		'produto_id',
		'quantidade'
	];

	public function produto()
	{
		return $this->belongsTo(Produto::class);
	}
}
