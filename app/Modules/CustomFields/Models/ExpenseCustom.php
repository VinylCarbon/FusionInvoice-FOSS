<?php

/**
 * This file is part of FusionInvoiceFOSS.
 *
 *
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FI\Modules\CustomFields\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseCustom extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'expenses_custom';

    protected $primaryKey = 'expense_id';

    protected $guarded = [];
}