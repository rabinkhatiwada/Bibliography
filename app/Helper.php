<?php

namespace App;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class Helper{
    public static function getSetting($key){
        //Cache::rememberForever($key,function()use($key){
            $data= DB::table('settings')->where('key',$key)->first('value');
            if($data){
                return $data->value;
            }



            return '';
       // });
    }

    public static function setSetting($key,$value){
        $data=DB::table('settings')->where('key',$key)->first();
        if($data){
            DB::table('settings')->where('key',$key)->update(['value'=>$value]);
        }else{
           $setting=new Setting();
           $setting->key=$key;
           $setting->value=$value;
           $setting->save();
        }
        Cache::forget($key);
    }

    public static function getHomeSetting(){
        return (object)[
            'title' => self::getSetting('home_title') ?? '',
            'paragraph1' => self::getSetting('home_paragraph1') ?? '',
            'paragraph2' => self::getSetting('home_paragraph2') ?? '',
            'button_text' => self::getSetting('home_button_text') ?? '',
            'image' => self::getSetting('home_image') ?? '',
        ];
    }


    public static function getAboutSetting()
    {
        return (object)[
            'biography' => self::getSetting('about_biography') ?? '',
            'email' => self::getSetting('about_email') ?? '',
            'phone' => self::getSetting('about_phone') ?? '',
            'address' => self::getSetting('about_address') ?? '',
            'skills' => json_decode(self::getSetting('about_skills'), true) ?? [],
            'aboutimage' => self::getSetting('about_image') ?? '',
        ];
    }
    public static function getFooterSetting()
{
    return (object)[
        'footer_heading_logo' => self::getSetting('footer_heading_logo') ?? '',
        'footer_paragraph' => self::getSetting('footer_paragraph') ?? '',
        'facebook_link' => self::getSetting('facebook_link') ?? '',
        'instagram_link' => self::getSetting('instagram_link') ?? '',
        'linkedin_link' => self::getSetting('linkedin_link') ?? '',
        'youtube_link' => self::getSetting('youtube_link') ?? '',
    ];
}



}
