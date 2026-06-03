<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Agenda extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'author',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'location',
        'contact_person',
        'media',
        'theme',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    // ── Auto-generate slug ───────────────────────────────────────────────────

    protected static function booted(): void
    {
        static::creating(function (Agenda $agenda) {
            if (empty($agenda->slug)) {
                $agenda->slug = static::generateUniqueSlug($agenda->title);
            }
        });

        static::updating(function (Agenda $agenda) {
            if ($agenda->isDirty('title') && !$agenda->isDirty('slug')) {
                $agenda->slug = static::generateUniqueSlug($agenda->title, $agenda->id);
            }
        });
    }

    private static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($title);
        $slug     = $baseSlug;
        $counter  = 2;

        $query = static::where('slug', $slug);
        if ($ignoreId) {
            $query->where('id', '!=', $ignoreId);
        }

        while ($query->exists()) {
            $slug    = "{$baseSlug}-{$counter}";
            $counter++;

            $query = static::where('slug', $slug);
            if ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            }
        }

        return $slug;
    }

    // ── Scopes ───────────────────────────────────────────────────────────────

    /**
     * Agenda yang akan datang atau sedang berlangsung.
     *
     * @param  Builder<Agenda>  $query
     * @return Builder<Agenda>
     */
    public function scopeUpcoming(Builder $query): Builder
    {
        return $query->whereDate('end_date', '>=', now())
                     ->orderBy('start_date', 'asc');
    }

    /**
     * Agenda yang sudah lewat.
     *
     * @param  Builder<Agenda>  $query
     * @return Builder<Agenda>
     */
    public function scopePast(Builder $query): Builder
    {
        return $query->whereDate('end_date', '<', now())
                     ->orderBy('start_date', 'desc');
    }
}