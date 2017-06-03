<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    //cara ini hanya wajib jika nama model tidak sama dengan versi plural dari tabel
    //misal petition bukan petitions
    protected $table = 'petitions';

    protected $fillable = ['title', 'body']; //defenisikan yang bisa di ubah atau post


    //public function kapanDibuat(){
        //return $this->created_at->diffForHumans();//masih salah | rumus perhitungan waktu
    //}

    public function comments(){
        return $this->HasMany(Comment::class);
    }

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
