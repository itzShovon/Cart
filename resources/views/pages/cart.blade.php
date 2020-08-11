<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Products</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author, or any other
                            background context. Make it a few sentences long so folks can pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Contact</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Follow on Twitter</a></li>
                            <li><a href="#" class="text-white">Like on Facebook</a></li>
                            <li><a href="#" class="text-white">Email me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
                        viewBox="0 0 24 24" focusable="false">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" /></svg>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main role="main">
        <dir class="cart"></dir>
        {{-- <section class="jumbotron text-center">
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

                    <tbody>
                        @foreach (Cart::content() as $row)
                        <tr>
                            <td>
                                <button type="button" value="{{ $row->rowId }}" class="btn btn-danger btn-md remove">X</button>
                                <button type="button" value="{{ $row->rowId }}" class="btn btn-secondary btn-md update">+</button>
                            </td>
                            <td>
                                <p><strong>{{ $row->name }}</strong></p>
                            </td>
                            <td><input type="text" id="qty" name="qty" value="{{ $row->qty }}"></td>
                            <td>৳ {{ $row->price }}</td>
                            <td>৳ {{ $row->subtotal }}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>Subtotal</td>
                            <td>৳ <?php echo Cart::subtotal(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>Tax</td>
                            <td>৳ <?php echo Cart::tax(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">&nbsp;</td>
                            <td>Total</td>
                            <td>৳ <?php echo Cart::total(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <button type="button" class="btn btn-danger btn-md btn-block destroy">Cancel</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section> --}}

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="bd-placeholder-img card-img-top"
                                    src="{{ asset('storage/products/default.jpg') }}" alt="Thumbnail" srcset="">
                                <div class="card-body">
                                    <p class="text-right font-weight-lighter">{{ $product->size }}</p>

                                    <p class="card-text">{{ $product->description }}.</p>
                                    <div class="d-flex justify-content-between align-items-center font-weight-light">
                                        <div class="btn-group">
                                            <button type="button" value="{{$product->id}}" class="btn btn-success add">Add</button>
                                        </div>
                                        <p class="text-muted">৳ {{ $product->price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $products->links() }}
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a
                    href="/docs/4.5/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        $(document).ready(function(){
            if('{{Cart::content()}}'){
                $.ajax({
                    url     :   '{{ route('cart.display') }}',
                    data    :   {  },
                    method  :   'GET',
                    success :   function(data){
                        $('.cart').html(data);
                    }
                });
            }

            $('button.add').click(function(){
                var id = $(this).val();
                $.ajax({
                    url     :   '{{ route('cart.add') }}',
                    data    :   { id : $(this).val() },
                    method  :   'GET',
                    success :   function(data){
                        $('.cart').html(data);
                    }
                });
            });

            $(document).on('change', 'input.update', function(){
                var rowId = $(this).attr("row");
                var qty = $(this).val();
                $.ajax({
                    url     :   '{{ route('cart.update') }}',
                    data    :   { rowId : rowId, qty : qty },
                    method  :   'GET',
                    success :   function(data){
                        $('.cart').html(data);
                    }
                });
            });

            $(document).on('click', 'button.remove', function(){
                var rowId = $(this).val();
                $.ajax({
                    url     :   '{{ route('cart.remove') }}',
                    data    :   { rowId : $(this).val() },
                    method  :   'GET',
                    success :   function(data){
                        $('.cart').html(data);
                    }
                });
            });

            $(document).on('click', 'button.destroy', function(){
                $.ajax({
                    url     :   '{{ route('cart.destroy') }}',
                    data    :   {  },
                    method  :   'GET',
                    success :   function(data){
                        $('.cart').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>
