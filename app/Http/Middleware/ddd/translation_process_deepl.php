<?php 

function get_string_between3($str,$from,$to){

    $sub = substr($str, strpos($str,$from)+strlen($from),strlen($str));
    return substr($sub,0,strpos($sub,$to));
}

$home_file = 'file:///D:/wamp64/www/foundation/resources/views/front/home.blade.php';


$translation_file = 'file:///D:/wamp64/www/foundation/app/Http/Middleware/ddd/translation_file_blank.blade.php';
$translation_file_english = 'file:///D:/wamp64/www/foundation/app/Http/Middleware/ggg/translation_file_english.blade.php';
$translation_file_manual = 'file:///D:/wamp64/www/foundation/app/Http/Middleware/ggg/translation_file_manual.blade.php';


$folder_name = 'file:///D:/wamp64/www/foundation/resources/views/front';

$file_array = [];


$di = new \RecursiveDirectoryIterator($folder_name);
foreach (new \RecursiveIteratorIterator($di) as $file_name => $file) {

    if (is_file($file_name)) {

        $file_array[] = $file_name;

    }

}

$exclude_words = [];
$file_array = [$home_file];

// dd($file_array);

$translation_lines = file($translation_file);




// foreach($file_array as $key => $file){

foreach($translation_lines as $key => $translation_line){


$translation_line = trim($translation_line);
// $translation_line = str_replace('"', "", $translation_line);
// $translation_line = str_replace("'", "", $translation_line);
// $translation_line = str_replace(',', "", $translation_line);



$ttt = explode(' ', $translation_line);

$ttt = strtolower(implode('_', $ttt));

$result = "{{trans('middle_east_office." . $ttt . "')}}";



// $line = "fsf PROVIDING FOOD AND CLOTHINGS dfdf.";

// $fff = str_contains($line,$translation_line);

// if($translation_line =='Your have been successfully registered. Thank you!'){
// file_put_contents($file, str_replace(trim($translation_line), trim($result), file_get_contents($file)));
// dd(file_get_contents($file));
// }

    file_put_contents($translation_file_manual, $result);


    $kkk = "'" .$ttt . "'" . ' => ' . "'" . $translation_line . "'" . ',';



    // $data = $kkk.PHP_EOL;
    // $fp = fopen($translation_file_english, 'a');
    // fwrite($fp, $data);
    // fclose($fp);







            $translation_lines = file($translation_file_english);

            $translation_found = false;

            foreach($translation_lines as $translation_line)
            {

              if(stripos($translation_line, "'" . $ttt . "'") !== false)
              {

                // dd($line);

                $translation_found = true;

                // file_put_contents($translation_file, str_replace(trim($translation_line), $kkk, file_get_contents($translation_file)));
            }

            }

            if (! $translation_found) {

                $data = $kkk.PHP_EOL;
                $fp = fopen($translation_file_english, 'a');
                fwrite($fp, $data);
                fclose($fp);

            }

}

// }

?>