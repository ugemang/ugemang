<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //

    //ßprotected $fillable = ['title', 'content']; //=> it is okay not to check validataion ex. whitelist
    protected $guarded = []; //=> opossite as fillable ex. blacklist
}


/*
you can also create parent model class to make this process more comportable

<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //

    //ßprotected $fillable = ['title', 'content']; //=> it is okay not to check validataion ex. whitelist
    protected $guarded = []; //=> opossite as fillable ex. blacklist
}

and than other modals will extend this class


*/
