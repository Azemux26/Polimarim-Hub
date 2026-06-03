<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Announcment extends Model
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
        static::creating(function (Announcment $announcment) {
            if (empty($announcment->slug)) {
                $announcment->slug = static::generateUniqueSlug($announcment->title);
            }
        });

        static::updating(function (Announcment $announcment) {
            if ($announcment->isDirty('title') && !$announcment->isDirty('slug')) {
                $announcment->slug = static::generateUniqueSlug($announcment->title, $announcment->id);
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
     * Pengumuman yang masih aktif.
     *
     * @param  Builder<Announcment>  $query
     * @return Builder<Announcment>
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->whereDate('end_date', '>=', now())
                     ->orderBy('start_date', 'asc');
    }

    /**
     * Pengumuman yang sudah lewat.
     *
     * @param  Builder<Announcment>  $query
     * @return Builder<Announcment>
     */
    public function scopeExpired(Builder $query): Builder
    {
        return $query->whereDate('end_date', '<', now())
                     ->orderBy('start_date', 'desc');
    }
}