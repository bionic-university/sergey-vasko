<?php

namespace BionicUniversity\SergeyVasko\JobmagazineBundle\Utils;

class Jobmagazine
{
    static public function slugify($text)
    {
        $text = self::translit($text);
        
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);
 
        // trim and lowercase
        $text = strtolower(trim($text, '-'));
 
        return $text;
    }
    
    protected static function translit($str)
    {
        $result = "";

        $compliances = array("а"=>"a", "б"=>"b","в"=>"v", "г"=>"g", "д"=>"d", "е"=>"e", "ё"=>"yo","ж"=>"zh", "з"=>"z", "и"=>"i", "й"=>"j", "к"=>"k", "л"=>"l", "м"=>"m", "н"=>"n","о"=>"o","п"=>"p", "р"=>"r", "с"=>"s", "т"=>"t", "у"=>"u", "ф"=>"f", "х"=>"h","ц"=>"c", "ч"=>"ch", "ш"=>"sh", "щ"=>"sh", "ы"=>"y", "ь"=>"'", "ю"=>"ju", "я"=>"ja", "э"=>"e", 
        "А"=>"A", "Б"=>"B","В"=>"V", "Г"=>"G", "Д"=>"D", "Е"=>"E", "Ё"=>"Yo","Ж"=>"Zh", "З"=>"Z", "И"=>"I", "Й"=>"J", "К"=>"K", "Л"=>"L", "М"=>"M", "Н"=>"N","О"=>"O","П"=>"P", "Р"=>"R", "С"=>"S", "Т"=>"T", "У"=>"U", "Ф"=>"F", "Х"=>"H","Ц"=>"C", "Ч"=>"Ch", "Ш"=>"Sh", "Щ"=>"Sh", "Ы"=>"Y", "Ь"=>"'", "Ю"=>"Ju", "Я"=>"Ja", "Э"=>"E");
        $strlen = mb_strlen($str,'UTF-8');
        
        for ($i = 0; $i < $strlen; $i++) {
            $char = mb_substr($str,$i,1,'UTF-8');
            $result .= isset($compliances[$char]) ? $compliances[$char] : $char;
        }
        
        return $result;
    }
}