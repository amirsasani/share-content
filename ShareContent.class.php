<?php
// Author: Amir Sasani
// Title: Share Content
// Description: Share web contents in web
class ShareContent{
    public static function facebook($url)
    {
        return "https://www.facebook.com/sharer/sharer.php?u=". $url;
    }

    public static function twitter($tweet)
    {
        return "https://twitter.com/home?status=". $tweet;
    }

    public static function googlePlus($url)
    {
        return "https://plus.google.com/share?url=". $url;
    }

    public static function linkedIn($url, $title, $summary = "", $source = "")
    {
        return "https://www.linkedin.com/shareArticle?mini=true&url=". $url ."&title=". $title ."&summary=". $summary ."&source=". $source;
    }

    public static function pinterest($image, $imageSource, $description)
    {
        return "https://pinterest.com/pin/create/button/?url=". $imageSource ."&media=". $image ."&description=". $description;
    }

    public static function whatsapp($text)
    {
        return "whatsapp://send?text=". $text;
    }

    public static function telegram($url)
    {
        return "https://telegram.me/share/url?url=". $url;
    }

    public static function email($recipient = "", $subject, $body)
    {
        return "mailto:". $recipient ."?&subject=". $subject ."&body=". $body;
    }
    
}
?>