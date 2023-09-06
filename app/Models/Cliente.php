<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property string $nome
 * @property string|null $endereco
 * @property string|null $apelido
 * @property string|null $telefone
 * @property int $empresa_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Empresa $empresa
 * @property Collection|ContaCliente[] $conta_clientes
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'cliente';

	protected $casts = [
		'empresa_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'endereco',
		'apelido',
		'telefone',
		'empresa_id'
	];

	public function empresa()
	{
		return $this->belongsTo(Empresa::class);
	}

	public function conta_clientes()
	{
		return $this->hasMany(ContaCliente::class);
	}
}
