<?php
namespace Catalog\Http\Controllers;
use       Catalog\Model\Category;
use       Catalog\Model\Product;
use       Illuminate\Routing\Controller;

class ProductsController extends Controller {

    protected $models;

    public function __construct(Category $category, Product $product) {
        $this->models = ['category' => $category, 'product' => $product];
    }

    /**
     * @Get("/", as="root")
     */
    public function index() {

        $category_model = $this->getModel('category');
        $categories     = $category_model->all();

        return view('products.index', compact('categories'));
    }

    /**
     * @Get("/products/{id?}", as="products")
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id = null) {

        $category_model = $this->getModel('category');
        $product_model  = $this->getModel('product');
        $categories     = $category_model->all();
        $products       = $product_model->with('category')->orderByRaw("RAND()")->get();
        $default_filter = null;

        if (null !== $id) {
            $default_filter = $category_model->find($id);
        }

        return view('products.show', compact('categories', 'products', 'default_filter'));
    }

    /**
     * @param  $model string
     * @return \Illuminate\Database\Eloquent\Model
     */
    private function getModel($model) {
        return $this->models[$model];
    }
}