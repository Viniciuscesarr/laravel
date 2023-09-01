<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ContaCliente
 * 
 * @property int $id
 * @property int $cliente_id
 * @property int $produto_id
 * @property float $valor
 * @property bool $pago
 * @property Carbon $data_pagamento
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Cliente $cliente
 * @property Produto $produto
 *
 * @package App\Models
 */
class ContaCliente extends Model
{
	protected $table = 'conta_clientes';

	protected $casts = [
		'cliente_id' => 'int',
		'produto_id' => 'int',
		'valor' => 'float',
		'pago' => 'bool',
		'data_pagamento' => 'datetime'
	];

	protected $fillable = [
		'cliente_id',
		'produto_id',
		'valor',
		'pago',
		'data_pagamento'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class);
	}

	public function produto()
	{
		return $this->belongsTo(Produto::class);
	}
}
