<?php
namespace Systems\Http\Controllers;

use Illuminate\Http\Request;
use Systems\Company;
use Systems\Http\Requests;
use Systems\ProductCategory;
use Systems\Product;
use Systems\Image;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::paginate(9);
        $products_cats = ProductCategory::get();

        $productCat = 0;
        $selected_products_cats = "كل المنتجات";

        return view('products.index', compact('products','products_cats','productCat' ,'selected_products_cats'));

    }

    public function show($id){
        
        $product = Product::find($id);
        $company = Company::find($product->company_id);
        preg_match_all('/<img\s*(?:class\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|src\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|alt\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|width\s*\=\s*[\'\"](.*?)[\'\"].*?\s*|height\s*\=\s*[\'\"](.*?)[\'\"].*?\s*)+.*?>/si',
            $product->other_images, $matches);

//        $products_images = Image::take(3)->get();
        $more = Product::where('product_categories_id', $product->productCategory->id)->where("id","!=",$product->id )->take(3)->get();

        // $companies = Product::where('company_id', $product->company_id);
        // $productDetail = Product::where('company_id',$id)->get();
        
        // $result = Product::join('companies', 'Product.company_id', '=', 'Company.id')->get();    
        

        return view('products.show', compact('product'  ,'matches','more','company'));
    }

    public function printPage($id){
        $post = Product::find($id);
        return view('products.print', compact('post'  ));
    }

    public function getResults(Request $request , $id)
    {
        $products_cats = ProductCategory::get();

//        $productCat = $request->productCategory;
        $productCat = $id;

        if($productCat == 0) {
            $products = Product::paginate(10);
            $selected_products_cats = "كل المنتجات";
        }
        else {
            $products = Product::where('product_categories_id', $productCat)
                ->paginate(10);
            $selected_products_cats = ProductCategory::where('id', $productCat)->pluck('name')->first();

        }
//        dd($selected_products_cats);

        return view('products.index', compact('products','products_cats', 'selected_products_cats', 'productCat'));

    }


    public function indexCat($id){
        $productCat = $id;
        $products_cats = ProductCategory::get();
        $selected_products_cats = ProductCategory::where('id', '=', $id)->pluck('name')->first();

        $products = Product::where("product_categories_id","=", $id)->paginate(10);
        return view('products.index', compact( 'products' , 'productCat' , 'products_cats','selected_products_cats'));

    }
    


}
