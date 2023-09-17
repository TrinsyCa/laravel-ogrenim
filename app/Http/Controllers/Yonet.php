<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Settings;

class Yonet extends Controller
{
    private $settings;
    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    public function site()
    {
        $data = $this->settings->Settings(); //Site Ayarları Çekme

        //Header
        $data["headerTitle"] = $data["SiteName"];
        $data["headerParagraph"] = "Web Siteme Hoşgeldin";
        $data["headerBtn"] = "Siteyi Keşfet";

        //About
        $data["aboutTitle"] = "Hakkımızda";
        $data["aboutParagraph"] = "YTÜ Teknopark Kampüsünde KLE Bilgi Teknolojileri A.Ş. Firmasında bir web yazılımcısıyım";
        $data["aboutBtn"] = "KLE Bilgi Teknolojileri Hakkında";

        //Contact
        $data["contactTitle"] = "Bizimle İletişime Geç !";
        $data["contactParagraph"] = "Bizimle çalışmak mı istiyorsun ? Mesaj göndererek veya telefondan arama yaparak bizimle iletişime geçebilirsin.";
        
        // Links
        $data["link_KLE"] = "https://www.kletech.com/"; //KLE WEBSITE


        return view('web',$data);
    }
}
