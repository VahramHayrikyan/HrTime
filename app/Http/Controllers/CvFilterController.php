<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use Smalot\PdfParser\Parser;

class CvFilterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('filter.index');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Exception
     */
    public function cvFilter(Request $request)
    {
        $files = $request->file('cv_file');
        $keywords = $request->keywords;

        $keywords = explode(',', $keywords);
        $total = count($keywords);

        $result = [];
        $parser = new Parser();

        for($j = 0; $j < count($files); $j++){
            $match   = 0;
            $noMatch = 0;
            $file = $files[$j];
            $fileName = $file->getClientOriginalName();
            $result[$fileName]['noMatch'] = [];
            $pdf    = $parser->parseFile($file);
            $text   = $pdf->getText();
            $text   = strtolower(str_replace(' ', '', $text));
            for($i = 0; $i < $total; $i++){
                $word = trim(strtolower($keywords[$i]));
                if($word){
                    if(strpos($text, $word) !== false) {
                        $match++;
                        $count = preg_match_all('|'.$word.'|', $text);
                        $result[$fileName]['match'][$word] = $count;
                    }
                    else{
                        $noMatch++;
                        array_push($result[$fileName]['noMatch'], $word);
                    }
                }
            }
            $percentage = $match*100/$total;
            $result[$fileName]['percentage'] = number_format(round($percentage));
        }

        $result = $this->sortResult($result);

        return view('filter.result', ['result' => $result]);
    }

    protected function sortResult($result)
    {

        $perc = array_column($result, 'percentage');
        array_multisort($perc, SORT_DESC, $result);

        return $result;
    }

    /**
     * Not used function, that parses pdf to text
     *
     * @throws \Exception
     */
    public function pdfParser()
    {
        $parser = new Parser();
        $pdf    = $parser->parseFile('vahramhayrikyan.pdf');
        $text   = $pdf->getText();
        $text   = strtolower(str_replace(' ', '', $text));

        if (strpos($text, 'vahramhayrikyan') !== false) {
            echo 'true';
        }
    }
}



