    @extends('template.template')


    @section('pageTitle')
        訂單第一頁
    @endsection


    @section('css')
        <link rel="stylesheet" href="./css/checkedout1.css">
    @endsection

    @section('main')
        <div class="banner .container-fluid">
            <form class="list-detail" method="post" action="/checkedout2">
                @csrf
                <!-- 上方進度條 -->
                <div id="section1" class="container-xxl">
                    <!-- 購物車標題 -->
                    <div class="shop-car">
                        <h3>購物車</h3>
                    </div>
                    <!-- 進度表 -->
                    <div class="progress-container">
                        <div class="progress">
                            <div class="box1">
                                <div class="box1-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step1 d-flex ">1</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box1-b">
                                    <li>確認購物車</li>
                                </div>
                            </div>
                            <div class="box2">
                                <div class="box2-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step2 d-flex ">2</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box2-b">
                                    <li>付款與運送方式</li>
                                </div>
                            </div>
                            <div class="box3">
                                <div class="box3-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step3 d-flex ">3</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box3-b">
                                    <li>填寫資料</li>
                                </div>
                            </div>
                            <div class="box4">
                                <div class="box4-t d-flex">
                                    <div class="l-line"></div>
                                    <div class="step4 d-flex ">4</div>
                                    <div class="r-line"></div>
                                </div>
                                <div class="box4-b">
                                    <li>完成訂購</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 中間訂單資訊 -->
                <div id="section2">
                    <!-- 訂單明細 -->
                    <div class="list-title">
                        <h4>訂單明細</h4>
                    </div>
                    <!-- 訂單內容 -->
                    <div class="order-list">
                        {{-- {{$ShoppingCart->product}} --}}
                        @foreach ($ShoppingCart as $gogo)
                            <div id="list-info{{ $gogo->id }}">

                                <div class="first-item d-flex justify-content-between">
                                    <!-- 訂單內容左方區塊 -->
                                    <div class="l-box d-flex">
                                        <!-- 商品照 -->
                                        <div class="goods-img">
                                            <img src="{{ $gogo->product->img }}" alt="Goods-Photo">
                                        </div>


                                        <!-- 商品名稱&訂單編號 -->
                                        <div class="goods-info d-flex justify-content-center align-items-start">
                                            <div class="name">{{ $gogo->product->name }}</div>
                                            <div class="number" data-product_qty="{{ $gogo->product->quantity }}"
                                                data-product_price="{{ $gogo->product->price }}"
                                                ></div>
                                            {{-- {!! $gogo->product->price !!} --}}
                                        </div>
                                    </div>

                                    <!-- 訂單內容右方區塊 -->
                                    <div class="r-box d-flex align-items-center">
                                        <!-- 商品數量與商品價格 -->
                                        <div  class="quantity">
                                            <i class="fa-solid fa-minus"></i>
                                            <input class="qty" type="number" min="0" name="qty[]" value="{{ $gogo->quantity }}" readonly>
                                            <i class="fa-solid fa-plus"></i>
                                        </div>


                                        <div class="sum-price">
                                            ${{ $gogo->quantity * $gogo->product->price }}</div>
                                    </div>
                                    {{-- 刪除按鈕 --}}

                                    <div class="r-button" style="display: flex; "><button type="button"
                                            onclick="deleteList('{{ $gogo->id }}')" class="btn btn-danger">刪除</button>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
                <!-- 下方價格 -->
                <div id="section3">
                    <div class="name-no-idea">
                        <!-- 價格明細 -->
                        <div class="price-box d-flex">
                            <div class="quantity d-flex justify-content-between">
                                <h5>訂單筆數:</h5>
                                <span>

                                    {{ count($ShoppingCart) }}

                                </span>
                            </div>
                            <div class="subtotal d-flex justify-content-between">
                                <h5>小計:</h5>
                                <span>

                                    {{ $total_price }}

                                </span>
                            </div>
                            <div class="shipping-fee d-flex justify-content-between">
                                <h5>運費:</h5>
                                <span>$　100</span>
                            </div>
                            <div class="total d-flex justify-content-between">
                                <h5>總計:</h5>
                                <span>
                                    {{ $total_price + 100 }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 底部按鈕 -->
                <div id="section4">
                    <!-- 功能按鈕 -->
                    <div class="button-box d-flex justify-content-between">
                        <div class="l-button"><a class="btn btn-primary" href="/" role="button"><i
                                    class="fa-solid fa-arrow-left"></i>返回購物</a>

                        </div>
                        <div class="r-button"><button type="submit" class="btn btn-primary">下一步</button></div>
                    </div>
                </div>
            </form>
        @endsection

        @section('Js')
            {{-- 計算 --}}
            <script>
                const minus = document.querySelectorAll('.fa-minus');
                const plus = document.querySelectorAll('.fa-plus');
                const qty = document.querySelectorAll('.qty');
                const sum_price = document.querySelectorAll('.sum-price');
                const number = document.querySelectorAll('.number');

                const subtotal = document.querySelector('.subtotal span');
                // console.log(subtotal);
                const total = document.querySelector('.total span')
                // console.log(total);

                // console.log(plus, minus, qty);
                // console.log(minus.length);


                for (let i = 0; i < minus.length; i++) {

                    // console.log(qty[i].value);
                    // console.log(parseInt(number[i].dataset.product_price));
                    // console.log( typeof (parseInt(number[i].dataset.product_price) * (qty[i].value)) );


                    minus[i].onclick = function(){
                        if (parseInt(qty[i].value)> 1) {
                            qty[i].value = parseInt(qty[i].value) - 1;
                            // console.log(typeof (parseInt(number[i].dataset.product_price) * (qty[i].value)));

                            sum_price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))

                        }

                        get_total();


                    }

                    plus[i].onclick = function(){
                        if (parseInt(qty[i].value) < parseInt(number[i].dataset.product_qty)) {
                            qty[i].value = parseInt(qty[i].value) + 1;
                            sum_price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value))
                        }

                        get_total();
                    }


                    function get_total(){
                        var sum = 0;
                        for (let j = 0; j < minus.length; j++) {
                            sum += (parseInt(number[j].dataset.product_price) * parseInt(qty[j].value))
                        }

                        subtotal.innerHTML = '$' + sum
                        total.innerHTML = '$' + (sum + 100)
                    }
                }
            </script>

            <script>
                const a = document.querySelector('#a');
                // console.log(a);
                function deleteList(id) {
                    let formData = new FormData();


                    formData.append('_method', 'post');
                    formData.append('_token', '{!! csrf_token() !!}');

                    fetch('/deleteList/' + id, {
                            method: 'POST',
                            body: formData
                        })

                        .then(function(response) {
                            let element = document.querySelector('#list-info' + id)
                            element.parentNode.removeChild(element);
                        })


                }
            </script>
        @endsection
