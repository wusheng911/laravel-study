<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alone;
use App\Models\GuestBoard;
use Illuminate\Support\Facades\Redirect;

class ViewController extends Controller
{
    //
    public function alone(Request $request)
    {
       $alones = Alone::where('id','>',0)->orderBy('created_at','desc')->get();
       return view('main.alone',['alone'=>$alones]); 
    }
    public function about(Request $request)
    {
        return view('main.about'); 
    }
    public function guestBoard(Request $request)
    {
        $guests = GuestBoard::where('status','0')->orderBy('created_at','desc')->get();
        return view('main.guestboard',['letters'=>$guests]);
    }
    public function addGuest(Request $request)
    {
        $letter = $request->input('letter');
        GuestBoard::create($letter);
        $guests = GuestBoard::where('status','0')->orderBy('created_at','desc')->get();
        return redirect()->route('guestboard',['letters'=>$guests]);
    }
    public function brother(Request $request)
    {
      $str = "保险业、采矿、能源、餐饮、宾馆、电讯业、房地产、服务、服装业、公益组织、广告业、航空航天、化学、健康、保健、建筑业、教育、培训、计算机、金属冶炼、警察、消防、军人、会计、美容、媒体、出版、木材、造纸、零售、批发、农业、旅游业、司法、律师、司机、体育运动、学术研究、演艺、医疗服务、艺术、设计、银行、金融、因特网、音乐舞蹈、邮政快递、运输业、政府机关、机械制造、咨询";
	  $list = explode('、', $str);
		return view('main.brother', ['list' => $list]);
    }
}
