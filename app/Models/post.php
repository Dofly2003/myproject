<?php

namespace App\Models;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{
    use HasFactory;
    protected $with =['kategori'];
    protected $fillable = ['title','user_id', 'slug', 'type', 'harga','image'];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function kategori():BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function scopeFilter(Builder $query, array $filters):void
    {
    //     $query->when($filters['search'] ?? false, 
    //     function($query, $search){
    //     $query->where('title', 'like', '%' . request('search'). '%');}
    
    // );
        $query->when($filters['search'] ?? false, 
        fn($query, $search)=> 
        $query->where('title' , 'like' , '%' . $search .'%')
    
    );
        $query->when($filters['kategori'] ?? false,
        fn($query, $kategori)=>
        $query->whereHas('kategori' ,fn ($query)=>
        $query->where('slug', $kategori))
    
    );
        //  Post::where('title', 'like', '%' . request('search'). '%');
    }
}