<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function display(){
        $data = null;
        if(Cart::count()){
            $data = '<section class="jumbotron text-center">
                        <div class="container">
                            <table class="table table-hover table-dark h-25">
                                <thead>
                                    <tr>
                                        <th>...</th>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Rate</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>';
            foreach (Cart::content() as $row) {
                $data .= '<tr>
                            <td>
                                <button type="button" value="'. $row->rowId .'" class="btn btn-danger btn-md remove">X</button>
                            </td>
                            <td>
                                <p><strong>' . $row->name . '</strong></p>
                            </td>
                            <td><input class="update" row="' . $row->rowId . '" type="text" name="qty" value="' . $row->qty . '"></td>
                            <td>৳ ' . $row->price . '</td>
                            <td>৳ ' . $row->subtotal . '</td>
                        </tr>';
            }
            $data .= '</tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>Subtotal</td>
                            <td>৳ ' . Cart::subtotal() . '</td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>Tax</td>
                            <td>৳ ' .  Cart::tax() . '</td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>Total</td>
                            <td>৳ ' .  Cart::total() . '</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <button type="button" class="btn btn-danger btn-md btn-block destroy">Cancel</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>';
        }
        return $data;
    }

    public function products()
    {
        // dd(Cart::count());
        // return Storage::download('products/default.jpg');
        // dd(Storage::url('products/default.jpg'));
        // dd(asset('storage/products/default.jpg'));
        $products = DB::table('products')->distinct()->paginate(12); //->appends('group', $group_id);

        // dd(Cart::content());

        return view('pages.cart')->with('products', $products);
    }

    public function add(Request $request)
    {
        $id = $request->get('id');

        $product = Product::find($id);

        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        Cart::add($product->id, $product->title, 1, $product->price);

        return $this->display();
    }

    public function remove(Request $request)
    {
        $rowId = $request->get('rowId');
        Cart::remove($rowId);

        return $this->display();
    }

    public function update(Request $request)
    {
        $rowId = $request->get('rowId');
        $qty = $request->get('qty');
        Cart::update($rowId, $qty);

        return $this->display();
    }

    public function destroy()
    {
        Cart::destroy();

        return $this->display();
    }
}
