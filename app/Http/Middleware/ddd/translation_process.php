<?php

function get_string_between3($str,$from,$to){

    $sub = substr($str, strpos($str,$from)+strlen($from),strlen($str));
    return substr($sub,0,strpos($sub,$to));
}



$folder_name = 'file:///D:/wamp64/www/foundation/resources';
$translation_file_blank = 'file:///D:/wamp64/www/foundation/app/Http/Middleware/ggg/translation_file_blank.blade.php';


$file_array = [];


$di = new \RecursiveDirectoryIterator($folder_name);
foreach (new \RecursiveIteratorIterator($di) as $file_name => $file) {

    if (is_file($file_name)) {

        $file_array[] = $file_name;

    }

}


// $file_array = [$file_name];



// dd($file_array);




$exclude_words = [];

foreach ($file_array as $key => $file_name) {


    $from = '>';
    $to = '</';

    $lines = file($file_name);
// Store true when the text is found
    $found = false;
    foreach($lines as $line)
    {


    if(strpos($line, $from) !== false && strpos($line, $to) !== false && strpos($line, 'trans') == false && strpos($line, "__(") == false &&  strpos($line, "{{") == false)
    {

        $found = true;

        $linez = $line;

        // $line = substr($line, strpos($line,$from)+strlen($from),strlen($line));

        // $line = substr($line,0,strpos($line,$to));

        $line = get_string_between3($linez,$from,$to);

        // if(strpos($line, $from) !== false && strpos($line, $to) !== false){

        //     $line = get_string_between3($line,$from,$to);

        // }
        // $line = get_string_between3($line,$from,$to);

        if($line != ''){

            $translation_lines = file($translation_file_blank);

            $translation_found = false;

            foreach($translation_lines as $translation_line)
            {

              if(stripos($translation_line, "'" . $line . "'") !== false)
              {

                // dd($line);

                $translation_found = true;

                // file_put_contents($translation_file, str_replace(trim($translation_line), $kkk, file_get_contents($translation_file)));
            }

            }

            if (! $translation_found) {

                $kkk = "'" .$line . "'" . ',';

                $data = $kkk.PHP_EOL;

                $fp = fopen($translation_file_blank, 'a');
                    fwrite($fp, $data);
                    fclose($fp);
            }

        }


        // $ttt = explode(' ', $line);

        // $ttt = strtolower(implode('_', $ttt));

        // $ttt = "{{trans('middle_east_office." . $ttt . "')}}";

        // $result = str_replace($line,$ttt,$linez);




        // file_put_contents($file_name, str_replace(trim($linez), trim($result), file_get_contents($file_name)));

        // dd($line);

    }

}


}


?>