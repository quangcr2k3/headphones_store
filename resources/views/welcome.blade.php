@extends('layouts.app')

@section('content')
    <style>
        .serch {
            display: flex;
            align-items: center;
        }

        .serch input {
            flex: 1;
            /* Để input chiếm hết chiều ngang còn lại */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            /* Bo góc trái của input */
        }

        .serch button {
            padding: 10px 20px;
            border: none;
            background-color: black;
            color: white;
            border-radius: 0 4px 4px 0;
            /* Bo góc phải của nút */
            cursor: pointer;
            font-size: 16px;
        }

        .list-group .active {
            background-color: black;
        }

        .sanpham {
            position: relative;
        }

        .sanpham:hover img {
            opacity: 0.4;
            transform: scale(1.05);
            transition: all 0.5s;
        }

        .sanpham .chi-tiet {
            position: absolute;
            transition: .5s ease;
            opacity: 0;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            font-family: "Roboto Condensed", sans-serif;
            border-radius: 5px;
            cursor: pointer;
        }

        .sanpham:hover .chi-tiet {
            opacity: 1;
            font-weight: bold;
            z-index: 1;
        }

        .sanpham .hang-moi {
            position: absolute;
            font-size: 12px;
            color: #fff;
            text-align: center;
            font-weight: 400;
            line-height: 26px;
            font-family: "Roboto Condensed", sans-serif;
            width: 80px;
            background: #f7941d;
            box-shadow: 0 3px 10px -5px #000;
            top: 10px;
            right: 10px;
            padding: 5px;
            border-radius: 5px;
        }
    </style>

    <div class="container mt-4">
        <h1 class="mb-4 text-center">Welcome to Seven Store</h1>

        <div class="row">
            <div class="col-md-3">
                <!-- Form tìm kiếm sản phẩm -->
                <form action="{{ route('products.search') }}" method="post">
                    @csrf
                    <div class="serch mb-3">
                        <input type="text" placeholder="Tìm kiếm sản phẩm..." name="keywords" class="form-control">
                        <button type="submit" name="search-keywords" class="btn btn-primary">
                            <i class="fa fa-search" style="font-size:20px;color:white;"></i> 
                        </button>
                    </div>
                </form>

                {{-- Danh mục --}}
                <ul class="list-group mb-4">
                    <li class="list-group-item active text-center">DANH MỤC</li>
                    @foreach ($categories as $category)
                        <a href="{{ route('products.byCategory', $category->id) }}" class="text-decoration-none">
                            <li class="list-group-item">{{ $category->name }}</li>
                        </a>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-9">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-light sanpham">
                                @if ($product->is_new)
                                    <div class="hang-moi">Hàng Mới</div>
                                @endif
                                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top"
                                    alt="{{ $product->name }}">
                                <div class="chi-tiet"
                                    onclick="window.location.href='{{ route('products.show', $product->id) }}'">Xem Chi Tiết
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">
                                        Giá: <strong
                                            class="text-danger">{{ number_format($product->price - ($product->price * $product->discount) / 100) }}
                                            VND</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Phần phân trang đẹp hơn -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                @if ($products->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->previousPageUrl() }}">Previous</a>
                    </li>
                @endif

                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    @if ($i == $products->currentPage())
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">{{ $i }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                        </li>
                    @endif
                @endfor

                @if ($products->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $products->nextPageUrl() }}">Next</a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endsection
