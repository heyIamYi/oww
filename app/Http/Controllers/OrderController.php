<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\product;
use Ecpay\Sdk\Factories\Factory;
use Ecpay\Sdk\Services\UrlService;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function creditcard($id)
    {

        /*
         *待更新:
         *項目1:合併訂單
         *項目2:回傳網址
         */

        // require __DIR__ . '/../../vendor/autoload.php';

        // 測試
        // $desc =  UrlService::ecpayUrlEncode('交易描述範例');
        // dd($desc);

        // 先取得購物車資料,在取得購物車的產品資訊

        $Shoppingcartuser = Auth::id();
        $product = product::get();

        $order = Order::find($id);

        $fee = 100;

        // if (session()->get('deliver') == '1') {
        //     $fee = 150;
        // } else {
        //     $fee = 60;
        // }

        $total_price = session()->get('total_price');
        $factory = new Factory([
            'hashKey' => '5294y06JbISpM5x9',
            'hashIv' => 'v77hoKGq4kWxNNIS',
        ]);
        $autoSubmitFormService = $factory->create('AutoSubmitFormWithCmvService');

        // 測試卡號   4311-9522-2222-2222
        // 卡號安全碼 222

        $input = [
            'MerchantID' => '2000132',
            'MerchantTradeNo' => 'Test' . time(),
            'MerchantTradeDate' => date('Y/m/d H:i:s'),
            'PaymentType' => 'aio',
            'TotalAmount' => $total_price + $fee,
            'TradeDesc' => UrlService::ecpayUrlEncode('交易描述範例'),
            // 用#字號可以換行
            'ItemName' => '商品項目1' . '#' . '商品項目2',
            'ChoosePayment' => 'Credit',
            'EncryptType' => 1,

            // 付款完成回傳資料與資料處理
            'ReturnURL' => 'https://127.0.0.1:8000/show_order/' . $id,
            'PeriodReturnURL' => 'https://127.0.0.1:8000/show_order/' . $id,

            // 訂單完成後回傳網址
            'ClientBackURL' => 'https://127.0.0.1:8000/show_order/' . $order->id,

        ];
        $action = 'https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5';

        echo $autoSubmitFormService->generate($input, $action);

    }

}
