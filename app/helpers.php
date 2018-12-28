<?php
use Jenssegers\Agent\Agent;

function getOutdatedBrowsers() {
    return Config::get('browsers');
}

function getCurrentBrowser() {
    $agent = new Agent();
    $browser = $agent->browser();
    $version = $agent->version($browser);

    if (strpos($version, '.') !== false) { 
        $numversion = explode ( '.', $version )[0];
    } else {
        $numversion = $version;
    }

    return ['browser' => $browser, 'version' => $numversion, 'fullVersion' => $version];
}

function isOutdatedBrowser() {
    $browsers = getOutdatedBrowsers();
    $cb = getCurrentBrowser();

    foreach($browsers as $browser => $bv) {
        if( $browser ===  data_get($cb, 'browser', '') ) {
            if($bv === "*") {
                return true;
            } else {
                if( starts_with($bv, '<=') ) {
                    $bv = str_replace_first('<=', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) <= intval($bv) ) {
                        return true;
                    }
                } else if( starts_with($bv, '>=') ) {
                    $bv = str_replace_first('>=', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) >= intval($bv) ) {
                        return false;
                    }
                } else if( starts_with($bv, '<') ) {
                    $bv = str_replace_first('<', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) < intval($bv) ) {
                        return true;
                    }
                } else if( starts_with($bv, '>') ) {
                    $bv = str_replace_first('>', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) > intval($bv) ) {
                        return false;
                    }
                } else {
                    if( intval(data_get($cb, 'version', 0)) == intval($bv) ) {
                        return true;
                    }
                }
            }
        }
    }

    return false;
} 

function lang_url($url) {
    if(App::getLocale() != config("app.fallback_locale")) {
        if(!starts_with($url, "/".App::getLocale())) {
            $url = App::getLocale().$url;
        }
    }
    return url($url);
}

/*function change_lang($lang = 'default') {
    if($lang === 'default') $lang = config('app.fallback_locale');
    $path = Request::path();
    if(Request::segment(1) === $lang) return url($path);
    foreach(array('es', 'en') as $locale) {
        if($locale === $lang) continue;
        if($locale === Request::segment(1)) $path = str_replace_first($locale, $lang, $path);
    }
    if(!starts_with($path, $lang)) $path = $lang."/".$path;
    if(starts_with($path, config("app.fallback_locale"))) $path = str_replace_first(config("app.fallback_locale"), "", $path);
    return url($path);
}*/

function change_lang($lang = 'default') {
    if($lang === 'default') $lang = config('app.fallback_locale');
    $path = Request::path();
    if(Request::segment(1) === $lang) return url($path);
    foreach(array('es', 'en') as $locale) {
        if($locale === $lang) continue;
        if($locale === Request::segment(1)) $path = str_replace_first($locale, $lang, $path);
    }
    if(!starts_with($path, $lang)) $path = $lang."/".$path;
    if(starts_with($path, config("app.fallback_locale"))) $path = str_replace_first(config("app.fallback_locale"), "", $path);
    return url('/');
}