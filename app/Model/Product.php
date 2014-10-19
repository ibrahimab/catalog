<?php
namespace Catalog\Model;
use       Catalog\Model\Category;
use       Illuminate\Database\Eloquent\Model as EloquentModel;

class Product extends EloquentModel {

    public function category() {
        return $this->belongsTo('Catalog\Model\Category');
    }
}