<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function admin_update_products()
    {
        $product = Product::orderBy('created_at','DESC')->get();

        return view('admin_update_products', compact('product'));
    }

    public function user_products()
    {
        $product = Product::all();
        return view('user_products', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function admin_add_products()
    {
        return view('admin_add_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

/*    public function admin_add_products_store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_view_description' => 'required|string',
            'product_details' => 'required|string',
            'product_features' => 'required|string',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rules
        ]);

        // Generate unique filename (optional)

        $imageName = time() . '.' . $request->file('product_image')->getClientOriginalExtension();

        // Save the uploaded image to public directory (consider using storage facade in future)

        //$request->file('product_image')->storeAs('public', $imageName);

        $request->file('product_image')->move('product_images', $imageName);

        // Create product with image path
        $product = Product::create([
            'product_name' => $validatedData['product_name'],
            'product_view_description' => $validatedData['product_view_description'],
            'product_details' => $validatedData['product_details'],
            'product_features' => $validatedData['product_features'],
            'product_image' => $imageName, // Store filename in database
        ]);

        return redirect()->route('admin/admin_update_products')->with('success', 'Product Added Successfully.');
    }

    */

    public function admin_add_products_store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_view_description' => 'required|string',
            'product_details' => 'required|string',
            'product_features' => 'required|string',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('product_image')->getClientOriginalExtension();
        $request->file('product_image')->move('product_images', $imageName);

        // Create product with image path and associate with the authenticated user
        $product = new Product([
            'product_name' => $validatedData['product_name'],
            'product_view_description' => $validatedData['product_view_description'],
            'product_details' => $validatedData['product_details'],
            'product_features' => $validatedData['product_features'],
            'product_image' => $imageName,
        ]);

        $product->user()->associate(auth()->user());
        $product->save();

        return redirect()->route('admin/admin_update_products')->with('success', 'Product Added Successfully.');
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function admin_view_product($id)
    {
        $product = Product::findOrFail($id);

        return view('admin_view_product', compact('product'));
    }

    public function user_view_products($id)
    {
        $product = Product::findOrFail($id);

        return view('user_view_products', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function admin_edit_products(string $id)
    {
        $product = Product::findOrFail($id);

        return view('admin_edit_products', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'product_view_description' => 'required|string',
            'product_details' => 'required|string',
            'product_features' => 'required|string',
        ]);

        $product->fill($validatedData);

        if ($request->product_image !="") {

            try {

            // Delete old image

            File::delete('public/product_images/' . $product->product_image);

            // Store the new image using storage facade (recommended)

            $imageName = time() . '.' . $request->file('product_image')->getClientOriginalExtension();

            $request->file('product_image')->move('product_images', $imageName);

            // Update product with the new image name

            $product->product_image = $imageName;

            } catch (\Exception $e) {
            Log::error('Error uploading image: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error uploading image, please try again.');
            }

        }

        $product->save();

        return redirect()->route('admin/admin_update_products')->with('success', 'Product Updated Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin_update_products_delete($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin/admin_update_products')->with('success', 'Request Deleted Successfully!');
    }

}
