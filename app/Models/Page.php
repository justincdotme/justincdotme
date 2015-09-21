<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * Query scope to filter results by page name.
     *
     * @param $query
     * @param $page
     * @return mixed
     */
    public function scopeGetPageData($query, $page)
    {
        return $query->where('name', $page);
    }
}
