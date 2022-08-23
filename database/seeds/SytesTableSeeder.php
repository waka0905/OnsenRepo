<?php

use Illuminate\Database\Seeder;

class SytesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     // DB::table('テーブル名')->insert(['カラム名' => 'データ']);

    public function run()
    {
        DB::table('sytes')->insert([
            'name' => '天然温泉　スパジアムジャポン',
            'sauna' => '1',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'1',
            'url' => 'https://www.spajapo.com/',
            'prefecture' =>'東京都',
            'address' =>'東久留米市上の原2-7-7',
            'nearest' =>'田無駅、東久留米駅、志木駅、朝霞台駅',
            'price' =>'平日750円、休日850円',
            'time' =>'平日午前9時〜深夜１時、休日午前８時〜深夜１時',
            'close' =>'年中無休',
            'bus' =>'あり',
            'direction'=>'Tokyo_West',
        ]);
        DB::table('sytes')->insert([
            
            'name' => '東京新宿天然温泉テルマー湯',
            'sauna' => '1',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'0',
            'url' => 'https://thermae-yu.jp/',
            'prefecture' =>'東京都',
            'address' =>'新宿区歌舞伎町1-1-2',
            'nearest' =>'新宿駅、新宿三丁目駅',
            'price' =>'平日2405円、休日3285円',
            'time' =>'２４時間営業(深夜追加料金あり)',
            'close' =>'年中無休',
            'bus' =>'なし',
            'direction'=>'Tokyo_East',
        ]);
        DB::table('sytes')->insert([
          
            'name' => '東京ドーム天然温泉 スパラクーア',
            'sauna' => '1',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'1',
            'url' => 'https://www.laqua.jp/spa/',
            'prefecture' =>'東京都',
            'address' =>'文京区春日1-1-1',
            'nearest' =>'後楽園駅、水道橋駅',
            'price' =>'平日2900円、休日3450円',
            'time' =>'午前11時〜翌朝９時',
            'close' =>'年中無休',
            'bus' =>'なし',
            'direction'=>'Tokyo_East',
        ]);
        DB::table('sytes')->insert([
        
            'name' => 'お風呂の王様　花小金井店',
            'sauna' => '1',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'1',
            'url' => 'https://www.ousama2603.com/shop/hanakoganei/',
            'prefecture' =>'東京都',
            'address' =>'小平志花小金井金井南町3-9-10',
            'nearest' =>'花小金井駅',
            'price' =>'平日960円、休日1160円',
            'time' =>'午前９時〜午前０時',
            'close' =>'年中無休',
            'bus' =>'なし',
            'direction'=>'Tokyo_West',
        ]);
        DB::table('sytes')->insert([
        
            'name' => 'のだ温泉　ほのか',
            'sauna' => '1',
            'ganban' => '1',
            'tansan' =>'0',
            'restaurant' =>'1',
            'url' => 'https://yudokoro-honoka.jp/noda/',
            'prefecture' =>'千葉県',
            'address' =>'野田市花井1-1-2',
            'nearest' =>'梅郷駅',
            'price' =>'平日1400円、休日1600円',
            'time' =>'午前９時〜午前１時',
            'close' =>'年中無休',
            'bus' =>'あり',
            'direction'=>'Chiba_North',
        ]);
        DB::table('sytes')->insert([
            
            'name' => 'JFA夢フィールド　幕張温泉　湯楽の里',
            'sauna' => '1',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'1',
            'url' => 'https://www.yurakirari.com/makuhari/',
            'prefecture' =>'千葉県',
            'address' =>'千葉市美浜区美浜26',
            'nearest' =>'海浜幕張駅',
            'price' =>'平日1050円、平日1300円',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Chiba_North',
        ]);
        DB::table('sytes')->insert([
           
            'name' => 'スパメッツァ おおたか 竜泉寺の湯',
            'sauna' => '1',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'1',
            'url' => 'https://www.ryusenjinoyu.com/spametsaotaka/',
            'prefecture' =>'千葉県',
            'address' =>'流山市おおたかの森西1-15-1',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Chiba_North',
        ]);
        DB::table('sytes')->insert([
           
            'name' => '南総城山温泉 里見の湯',
            'sauna' => '1',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.satominoyu.com//',
            'prefecture' =>'千葉県',
            'address' =>'千葉県館山市下真倉305-1',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Chiba_South',
        ]);
        DB::table('sytes')->insert([
           
            'name' => '綱島源泉 湯けむりの庄',
            'sauna' => '0',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'1',
            'url' => 'https://www.yukemurinosato.com/tsunashima/',
            'prefecture' =>'神奈川県',
            'address' =>'横浜市港北区樽町3-7-61',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Kanagawa_east',
        ]);
        DB::table('sytes')->insert([
            
            'name' => 'RAKU SPA 鶴見',
            'sauna' => '0',
            'ganban' => '1',
            'tansan' =>'0',
            'restaurant' =>'1',
            'url' => 'https://www.rakuspa.com/tsurumi/',
            'prefecture' =>'神奈川県',
            'address' =>'横浜市鶴見区元宮2-1-39',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Kanagawa_east',
        ]);
        DB::table('sytes')->insert([
            
            'name' => '横濱スパヒルズ 竜泉寺の湯',
            'sauna' => '0',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'0',
            'url' => 'https://tsurugamine.ryusenjinoyu.com/',
            'prefecture' =>'神奈川県',
            'address' =>'横浜市旭区城根8-8',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Kanagawa_east',
        ]);
        DB::table('sytes')->insert([
          
            'name' => '箱根湯寮',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'1',
            'restaurant' =>'1',
            'url' => 'https://www.hakoneyuryo.jp/',
            'prefecture' =>'神奈川県',
            'address' =>'足柄下郡箱根町塔之澤4',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'あり',
            'direction'=>'Kanagawa_east',
        ]);
        DB::table('sytes')->insert([
      
            'name' => '西武秩父駅前温泉　祭りの湯',
            'sauna' => '0',
            'ganban' => '1',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.seibu-leisure.co.jp/matsuri/index.html',
            'prefecture' =>'埼玉県',
            'address' =>'秩父市野坂町1-16-15',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Saitama_west',
        ]);
        DB::table('sytes')->insert([
       
            'name' => '美楽温泉　SPA-HERBS',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'1',
            'restaurant' =>'0',
            'url' => 'https://spa-herbs.jp/',
            'prefecture' =>'埼玉県',
            'address' =>'さいたま市北区植竹町1-816-8',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Saitama_east',
        ]);
        DB::table('sytes')->insert([
         
            'name' => '熊谷天然温泉花湯スパリゾート',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'1',
            'url' => 'http://hanayuspa.jp/',
            'prefecture' =>'埼玉県',
            'address' =>'熊谷市上之1005',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Saitama_west',
        ]);
        DB::table('sytes')->insert([
          
            'name' => '秩父温泉　満願の湯',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.chichibuonsen.co.jp/',
            'prefecture' =>'埼玉県',
            'address' =>'秩父郡皆野町下日野沢4000',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Saitama_west',
        ]);
        DB::table('sytes')->insert([
          
            'name' => '黄金の湯館',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.itoenhotel.com/koganenoyu/',
            'prefecture' =>'群馬県',
            'address' =>'渋川市伊香保町伊香保550',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Gunma_North',
        ]);
        DB::table('sytes')->insert([
           
            'name' => '西の河原露天風呂',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'http://sainokawara.com/',
            'prefecture' =>'群馬県',
            'address' =>'吾妻郡草津町草津521-3',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Gunma_North',
        ]);
        DB::table('sytes')->insert([
           
            'name' => '京ヶ島天然温泉　湯都里',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.yu-tori.jp/',
            'prefecture' =>'群馬県',
            'address' =>'高崎市島野町890-3',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Gunma_South',
        ]);
        DB::table('sytes')->insert([

            'name' => '湯楽部　太田店',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://ota.yurabu.com/',
            'prefecture' =>'群馬県',
            'address' =>'太田市植木野町694-1',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Gunma_South',
        ]);
        DB::table('sytes')->insert([
       
            'name' => '栃木温泉由良の里',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.yurakirari.com/yura/tochigi/',
            'prefecture' =>'栃木県',
            'address' =>'栃木市大町22-70',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Tochigi_South',
        ]);
        DB::table('sytes')->insert([
          
            'name' => '宮の街道温泉 江戸遊',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.edoyu.com/utsunomiya/',
            'prefecture' =>'栃木県',
            'address' =>'宇都宮市インターパーク4-2-5',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Tochigi_South',
        ]);
        DB::table('sytes')->insert([
          
            'name' => 'ベルさくらの湯',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://bellsakuranoyu.com/',
            'prefecture' =>'栃木県',
            'address' =>'宇都宮市陽東6-5-31',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Tochigi_South',
        ]);
        DB::table('sytes')->insert([
            
            'name' => '自然浴 離れの湯 あけび',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'akebi-onsen.com',
            'prefecture' =>'栃木県',
            'address' =>'日光市小佐越原19-26',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Tochigi_North',
        ]);
        DB::table('sytes')->insert([
       
            'name' => 'ひたちなか温泉　喜楽里　別邸',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.yurakirari.com/kirari/hitachinaka/',
            'prefecture' =>'茨城県',
            'address' =>'ひたちなか市市毛640-2',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Ibaraki_North',
        ]);
        DB::table('sytes')->insert([
            
            'name' => '湯楽の里 日立店',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'https://www.yurakirari.com/yura/hitachi/',
            'prefecture' =>'茨城県',
            'address' =>'日立市河原子町1-1-6',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Ibaraki_North',
        ]);
        DB::table('sytes')->insert([
           
            'name' => 'きぬの湯',
            'sauna' => '0',
            'ganban' => '0',
            'tansan' =>'0',
            'restaurant' =>'0',
            'url' => 'きぬの湯',
            'prefecture' =>'茨城県',
            'address' =>'常総市内守谷町きぬの里1-5-6',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Ibaraki_South',
        ]);
        DB::table('sytes')->insert([
            
            'name' => '岩盤温浴リゾート　ココプララ',
            'sauna' => '1',
            'ganban' => '1',
            'tansan' =>'1',
            'restaurant' =>'1',
            'url' => 'https://www.cocoplala.jp/',
            'prefecture' =>'茨城県',
            'address' =>'東茨城郡茨城町桜の郷1100',
            'nearest' =>'',
            'price' =>'',
            'time' =>'',
            'close' =>'',
            'bus' =>'',
            'direction'=>'Ibaraki_North',
        ]);
    }
}
