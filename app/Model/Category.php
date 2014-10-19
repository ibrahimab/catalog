<?php
namespace Catalog\Model;
use       Catalog\Model\Product;
use       Illuminate\Database\Eloquent\Model as EloquentModel;

class Category extends EloquentModel {

    public function product() {
        return $this->hasMany('Catalog\Model\Product');
    }
}