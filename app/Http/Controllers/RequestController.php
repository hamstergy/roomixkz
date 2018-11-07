<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\URL;
use Illuminate\Support\Facades\Mail;


class RequestController extends Controller
{

    public function getRequestForm(Request $request){
        $phoneFieldset = 'Телефон: ';
        $partsFieldset = "Запчасть: ";
        $cityFieldset = 'Город: ';
        $vinFieldset = 'VIN: ';
        $brandFieldset = 'Марка: ';
        $modelFieldset = 'Модель: ';
        $data = [
            $phoneFieldset => $request->get('telephone'),
            $partsFieldset => $request->get('parts'),
            $cityFieldset => $request->get('city'),
            $vinFieldset => $request->get('vin'),
            $brandFieldset => $request->get('brand'),
            $modelFieldset => $request->get('model')
        ];
        $token = "562848383:AAGv3O-b19HQivqydebF-QosXPElxte4uxA";
        $chat_id = "-1001332564662"; //159070437
        $txt = '';
        foreach($data as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };
        //    Mail::send('emails.test', $data, function($message){
       //         $message->to('info@roomix.kz', 'Yuruy')->subject('Заявка с сайта ROOMIX');
        //    });
        fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        return back()->with('message', 'Ваша заявка получена, ожидайте ответа. Спасибо!');

    }
    public function getRequestFormSpec(Request $request){
        $phoneFieldset = 'Телефон: ';
        $partsFieldset = "Запчасть: ";
        $typeFieldset = 'Тип спецтехники: ';
        $brandFieldset = 'Марка: ';
        $data = [
            $phoneFieldset => $request->get('telephone'),
            $partsFieldset => $request->get('parts'),
            $typeFieldset => $request->get('type'),
            $brandFieldset => $request->get('brand')
        ];
        $token = "548373919:AAFagyXtVE0zmuMWUNE9PHsyjR2dBg8DpQ8";
        $chat_id = "-241339519";
        $txt = '';
        foreach($data as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        //Mail::send('emails.spec', $data, function($message){
           // $message->to('manager@roomix.kz', 'Yuriy')->subject('Заявка с сайта ROOMIX');

       // });
        fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        return back()->with('message', 'Ваша заявка получена, ожидайте ответа. Спасибо!');

    }
	public function getRequestFormSpecService(Request $request){
        $phoneFieldset = 'Телефон: ';
        $partsFieldset = "Поломка: ";
        $typeFieldset = 'Тип заявки: ';
        $brandFieldset = '---- ';
        $data = [
            $phoneFieldset => $request->get('telephone'),
            $partsFieldset => $request->get('parts'),
            $typeFieldset => 'РЕМОНТ',
            $brandFieldset => '----'
        ];
        $token = "548373919:AAFagyXtVE0zmuMWUNE9PHsyjR2dBg8DpQ8";
        $chat_id = "-241339519";
        $txt = '';
        foreach($data as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        //Mail::send('emails.spec', $data, function($message){
           // $message->to('manager@roomix.kz', 'Yuriy')->subject('Заявка с сайта ROOMIX');

       // });
        fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        return back()->with('message', 'Ваша заявка получена, ожидайте ответа. Спасибо!');

    }
    public function getRequestFormSpecTyres(Request $request){
        $phoneFieldset = 'Телефон: ';
        $partsFieldset = "Размер: ";
        $typeFieldset = 'Тип спецтехники: ';
        $brandFieldset = 'Количество: ';
        $data = [
            $phoneFieldset => $request->get('telephone'),
            $partsFieldset => $request->get('parts'),
            $typeFieldset => $request->get('type'),
            $brandFieldset => $request->get('brand')
        ];
        $token = "548373919:AAFagyXtVE0zmuMWUNE9PHsyjR2dBg8DpQ8";
        $chat_id = "-241339519";
        $txt = '';
        foreach($data as $key => $value) {
            $txt .= "<b>".$key."</b> ".$value."%0A";
        };

        fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        return back()->with('message', 'Ваша заявка получена, ожидайте ответа. Спасибо!');

    }
}
