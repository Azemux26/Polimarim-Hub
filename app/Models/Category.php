<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    // ── Scopes ───────────────────────────────────────────────────────────────

    /**
     * Hanya kategori yang punya berita terpublikasi.
     *
     * @param  Builder<Category>  $query
     * @return Builder<Category>
     */
    public function scopeHasPublishedNews(Builder $query): Builder
    {
        return $query->whereHas('news', function (Builder $q): void {
            $q->where('is_published', true);
        });
    }

    // ── Relasi ───────────────────────────────────────────────────────────────

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}