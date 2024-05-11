<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Http\RedirectResponse;

class makebinarycontroller extends Controller
{
    public function makeexpress_3(Request $request)
    {

        $decimal = $request->input('decimal');
        $number = strval($decimal);

        for ($i = 0; $i < strlen($number); $i++) {

            switch ($number[$i]) {
                case '1':
                    $number[$i] = '4';
                    break;
                case '2':
                    $number[$i] = '5';
                    break;
                case '3':
                    $number[$i] = '6';
                    break;
                case '4':
                    $number[$i] = '7';
                    break;
                case '5':
                    $number[$i] = '8';
                    break;
                case '6':
                    $number[$i] = '9';
                    break;
                case '7':
                    $number[$i] = 'A';
                    break;
                case '8':
                    $number[$i] = 'B';
                    break;
                case '9':
                    $number[$i] = 'C';
                    break;
            }

        }


        // ex
        for ($i = 0; $i < strlen($number); $i++) {

            switch ($number[$i]) {
                case '0':
                    $arr[$i] = '0000';
                    break;
                case '1':
                    $arr[$i] = '0001';
                    break;
                case '2':
                    $arr[$i] = '0010';
                    break;
                case '3':
                    $arr[$i] = '0011';
                    break;
                case '4':
                    $arr[$i] = '0100';
                    break;
                case '5':
                    $arr[$i] = '0101';
                    break;
                case '6':
                    $arr[$i] = '0101';
                    break;
                case '7':
                    $arr[$i] = '0111';
                    break;
                case '8':
                    $arr[$i] = '1000';
                    break;
                case '9':
                    $arr[$i] = '1001';
                    break;
                case 'A':
                    $arr[$i] = '1010';
                    break;
                case 'B':
                    $arr[$i] = '1011';
                    break;
                case 'C':
                    $arr[$i] = '1100';
                    break;
            }

        }




        return view('makeExccess-3', ['arr' => $arr, 'decimal' => $decimal]);

    }

    public function makeBCD(Request $request)
    {
        $validatedData = request()->validate([
            'number' => 'numeric',

        ], [
                'number.numeric' => 'Please enter a valid number',
            ]);

        $num = $request->input('number');
        $number = strval($num);

        for ($i = 0; $i < strlen($number); $i++) {
            // $arr[$i] = $number[$i];

            switch ($number[$i]) {
                case '0':
                    $arr[$i] = '0000';
                    break;
                case '1':
                    $arr[$i] = '0001';
                    break;
                case '2':
                    $arr[$i] = '0010';
                    break;
                case '3':
                    $arr[$i] = '0011';
                    break;
                case '4':
                    $arr[$i] = '0100';
                    break;
                case '5':
                    $arr[$i] = '0101';
                    break;
                case '6':
                    $arr[$i] = '0101';
                    break;
                case '7':
                    $arr[$i] = '0111';
                    break;
                case '8':
                    $arr[$i] = '1000';
                    break;
                case '9':
                    $arr[$i] = '1001';
                    break;
            }

        }
        // dd($arr);
        // $binary = decbin($number);
        // $bcd = '';

        // for ($i = 0; $i < strlen($binary); $i += 4) {
        //     $bcd .= bindec(substr($binary, $i, 4));
        // }

        // dd($bcd);
        return view('makeBCD', compact('number', 'arr'));
    }


    public function makeGray(Request $request)
    {

        $validatedData = request()->validate([
            'number' => 'numeric',

        ], [
            'number.numeric' => 'Please enter a valid number',
        ]);


        $num = $request->input('number');
        $binarynum = decbin($num);
        $number = strval($binarynum);
        $size = strlen($number);
        $arr = [];

        $arr[0] = intval($number[0]);

        for ($i = 0; $i < $size - 1; $i++) {
            $arr[$i + 1] = $number[$i] ^ $number[$i + 1] == 1 ? 1 : 0;


        }

        return view('makeGray', compact('number', 'arr', 'num'));
    }


    public function makeDes(Request $request)
    {

        // function grayCodeToDecimal($arr) {
        //     $size = count($arr);
        //     $dec = $arr[$size-1];
        //     for ($i=$size-2; $i>=0; $i--) {
        //         if ($arr[$i] != $arr[$i+1]) {
        //             $dec += pow(2, $size-$i-2);
        //         }
        //     }
        //     return $dec;
        // }

        $num = $request->input('number');
        $number = strval($num);
        $size = strlen($number);

        $arr = [];
        $arr[0] = intval($number[0]);

        for ($i = 0; $i < $size; $i++) {
            if (intval($number[$i]) > 1) {
                $error = "The number is not Gray code";
                return view('/makeDes', compact('error'));
            }
        }

        for ($i = 0; $i < $size - 1; $i++) {
            $arr[$i + 1] = $arr[$i] ^ intval($number[$i + 1]) == 1 ? 1 : 0;
        }
        // dd($arr[0]);

        $decimal = 0;
        $thissize = count($arr);
        for ($i = $thissize - 1; $i >= 0; $i--) {
            if ($arr[$i] == 1) {
                $decimal += pow(2, $thissize - $i - 1);
            }
        }

        // dd(var_dump($arr));
        // $dec = bindec($arr);
        return view('/makeDes', compact('num', 'arr', 'decimal'));
    }


    public function changeBase(Request $request)
    {

        $validatedData = request()->validate([
            'number' => 'numeric',

        ], [
                'number.numeric' => 'Please enter a valid number',
            ]);
        $num = $request->input('number');
        // size of input number
        $number = strval($num);
        $size = strlen($number);
        for ($i = 0; $i < $size; $i++) {
            switch ($number[$i]) {
                case '1':
                    $number[$i] = '1';
                    break;
                case '2':
                    $number[$i] = '2';
                    break;
                case '3':
                    $number[$i] = '3';
                    break;
                case '4':
                    $number[$i] = '4';
                    break;
                case '5':
                    $number[$i] = '5';
                    break;
                case '6':
                    $number[$i] = '6';
                    break;
                case '7':
                    $number[$i] = '7';
                    break;
                case '8':
                    $number[$i] = '8';
                    break;
                case '9':
                    $number[$i] = '9';
                    break;
            }
        }


        //from 
        $witchfrom = $request->from;
        switch ($witchfrom) {
            case '1':
                $witchfromfinal = 1;
                break;
            case '2':
                $witchfromfinal = 2;
                break;
            case '3':
                $witchfromfinal = 3;
                break;
            case '4':
                $witchfromfinal = 4;
                break;
            case '5':
                $witchfromfinal = 5;
                break;
            case '6':
                $witchfromfinal = 6;
                break;
            case '7':
                $witchfromfinal = 7;
                break;
            case '8':
                $witchfromfinal = 8;
                break;
            case '9':
                $witchfromfinal = 9;
                break;
            case '10':
                $witchfromfinal = 10;
                break;
            // case '11':
            //     $witchfromfinal = 11;
            //     break;
            // case '12':
            //     $witchfromfinal = 12;
            //     break;
            // case '13':
            //     $witchfromfinal = 13;
            //     break;
            // case '14':
            //     $witchfromfinal = 14;
            //     break;
            // case '15':
            //     $witchfromfinal = 15;
            //     break;
            // case '16':
            //     $witchfromfinal = 16;
            //     break;
        }


        // to
        $witchto = $request->to;
        switch ($witchto) {
            case '1':
                $witchtofanal = 1;
                break;
            case '2':
                $witchtofanal = 2;
                break;
            case '3':
                $witchtofanal = 3;
                break;
            case '4':
                $witchtofanal = 4;
                break;
            case '5':
                $witchtofanal = 5;
                break;
            case '6':
                $witchtofanal = 6;
                break;
            case '7':
                $witchtofanal = 7;
                break;
            case '8':
                $witchtofanal = 8;
                break;
            case '9':
                $witchtofanal = 9;
                break;
            case '10':
                $witchtofanal = 10;
                break;
            case '11':
                $witchtofanal = 11;
                break;
            case '12':
                $witchtofanal = 12;
                break;
            case '13':
                $witchtofanal = 13;
                break;
            case '14':
                $witchtofanal = 14;
                break;
            case '15':
                $witchtofanal = 15;
                break;
            case '16':
                $witchtofanal = 16;
                break;
        }


        for ($i = 0; $i < strlen($number); $i++) {
            if (intval($number[$i]) >= $witchfromfinal) {
                // dd(var_dump($witchfromfinal));
                $error = 'عدد با مبنا سازگار نیست';
                return view('/base', ['to' => $witchtofanal, 'error' => $error]);
            }
        }
        // dd($number);


        if ($witchfromfinal == 10) {

            $arr = [];
            $man = 0;
            $numberfinal = intval($num);

            if ($witchtofanal >= 11) {
                while ($numberfinal >= $witchtofanal) {
                    $check = $numberfinal % $witchtofanal;
                    if ($check >= 10) {
                        switch ($check) {
                            case 10:
                                $check = 'A';
                                break;
                            case 11:
                                $check = 'B';
                                break;
                            case 12:
                                $check = 'C';
                                break;
                            case 13:
                                $check = 'D';
                                break;
                            case 14:
                                $check = 'E';
                                break;
                            case 15:
                                $check = 'F';
                                break;
                        }
                        $arr[] = $check;
                    } else {
                        $arr[] = $check;
                    }
                    $numberfinal = intval($numberfinal / $witchtofanal);
                }

            }

            while ($numberfinal >= $witchtofanal) {
                $arr[] = $numberfinal % $witchtofanal;
                $numberfinal = intval($numberfinal / $witchtofanal);
            }

            $arr[] = $numberfinal; // Add the final quotient to the array

            // Reverse the array:
            $arrfinal = array_reverse($arr);


        } elseif ($witchfromfinal != 10 && $witchtofanal == 10) {
            $man = 0;
            $sizex = $size;

            for ($i = 0; $i < $sizex; $i++) {
                $man += intval($number[$i]) * pow($witchfromfinal, $size - 1);
                $size -= 1;
            }
        } elseif ($witchfromfinal != 10 && $witchtofanal != 10) {
            $man = 0;
            $sizex = $size;

            for ($i = 0; $i < $sizex; $i++) {
                $man += intval($number[$i]) * pow($witchfromfinal, $size - 1);
                $size -= 1;
            }

            // Convert $man to base $witchtofanal
            $arr = [];

            while ($man > 0) {
                $arr[] = $man % $witchtofanal;
                $man = intval($man / $witchtofanal);
            }

            // Reverse the array:
            $arrfinal = array_reverse($arr);
        }

        return view('/base', ['man' => $man, 'to' => $witchtofanal, 'arrfinal' => isset($arrfinal) ? $arrfinal : []]);



    }


    public function karnaugh_two(Request $request)
    {
        $ziro_ziro = $request->first;
        $ziro_one = $request->secend;
        $one_ziro = $request->third;
        $one_one = $request->forth;

        if ($ziro_ziro == 1) {
            $ziro_ziro = '1';
        } else {
            $ziro_ziro = '0';
        }

        if ($ziro_one == 1) {
            $ziro_one = '1';
        } else {
            $ziro_one = '0';
        }

        if ($one_ziro == 1) {
            $one_ziro = '1';
        } else {
            $one_ziro = '0';
        }

        if ($one_one == 1) {
            $one_one = '1';
        } else {
            $one_one = '0';
        }

        // all
        if ($ziro_ziro == '1' && $ziro_one == '1' && $one_ziro == '1' && $one_one == '1')
            $function = '1';

        if ($ziro_ziro == '0' && $ziro_one == '0' && $one_ziro == '0' && $one_one == '0')
            $function = '0';



        //just one 
        if ($ziro_ziro == '1' && $ziro_one == '0' && $one_ziro == '0' && $one_one == '0')
            $function = '~A~B';

        if ($ziro_ziro == '0' && $ziro_one == '1' && $one_ziro == '0' && $one_one == '0')
            $function = '~AB';


        if ($ziro_ziro == '0' && $ziro_one == '0' && $one_ziro == '1' && $one_one == '0')
            $function = 'A~B';

        if ($ziro_ziro == '0' && $ziro_one == '0' && $one_ziro == '0' && $one_one == '1')
            $function = 'AB';



        // 2 of all 
        if ($ziro_ziro == '1' && $ziro_one == '1' && $one_ziro == '0' && $one_one == '0')
            $function = '~A';

        if ($ziro_ziro == '0' && $ziro_one == '0' && $one_ziro == '1' && $one_one == '1')
            $function = 'A';

        // none 
        if ($ziro_ziro == '1' && $ziro_one == '0' && $one_ziro == '1' && $one_one == '0')
            $function = '~B';

        if ($ziro_ziro == '0' && $ziro_one == '1' && $one_ziro == '0' && $one_one == '1')
            $function = 'B';


        if ($ziro_ziro == '1' && $ziro_one == '0' && $one_ziro == '0' && $one_one == '1')
            $function = '~A~B + AB';

        if ($ziro_ziro == '0' && $ziro_one == '1' && $one_ziro == '1' && $one_one == '0')
            $function = 'AB + ~A~B';



        return view('karnaugh-two', [
            'ziro_ziro' => $ziro_ziro,
            'ziro_one' => $ziro_one,
            'one_ziro' => $one_ziro,
            'one_one' => $one_one,
            'function' => $function,
        ]);
    }

    public function karnaugh_three(Request $request)
    {
        $ziro_ziro_ziro = $request->first;
        $ziro_ziro_one = $request->secend;
        $ziro_one_ziro = $request->third;
        $ziro_one_one = $request->forth;
        $one_ziro_ziro = $request->five;
        $one_ziro_one = $request->six;
        $one_one_ziro = $request->seven;
        $one_one_one = $request->eight;

        if ($ziro_ziro_ziro == 1) {
            $ziro_ziro_ziro = '1';
        } else {
            $ziro_ziro_ziro = '0';
        }

        if ($ziro_ziro_one == 1) {
            $ziro_ziro_one = '1';
        } else {
            $ziro_ziro_one = '0';
        }

        if ($ziro_one_ziro == 1) {
            $ziro_one_ziro = '1';
        } else {
            $ziro_one_ziro = '0';
        }

        if ($ziro_one_one == 1) {
            $ziro_one_one = '1';
        } else {
            $ziro_one_one = '0';
        }

        if ($one_ziro_ziro == 1) {
            $one_ziro_ziro = '1';
        } else {
            $one_ziro_ziro = '0';
        }

        if ($one_ziro_one == 1) {
            $one_ziro_one = '1';
        } else {
            $one_ziro_one = '0';
        }

        if ($one_one_ziro == 1) {
            $one_one_ziro = '1';
        } else {
            $one_one_ziro = '0';
        }

        if ($one_one_one == 1) {
            $one_one_one = '1';
        } else {
            $one_one_one = '0';
        }

        // // all
        // if($ziro_ziro_ziro == '0' && $ziro_ziro_one == '0' && $ziro_one_one == '0' && $ziro_one_ziro == '0' 
        // && $one_ziro_ziro == '0' && $one_ziro_one == '0' && $one_one_one == '0' && $one_one_ziro == '0')
        // {
        //     $function = '0';
        // }

        // if($ziro_ziro_ziro == '1' && $ziro_ziro_one == '1' && $ziro_one_one == '1' && $ziro_one_ziro == '1' 
        // && $one_ziro_ziro == '1' && $one_ziro_one == '1' && $one_one_one == '1' && $one_one_ziro == '1')
        // {
        //     $function = '1';
        // }

        // // 2 
        // // 4
        // if($ziro_ziro_ziro == '1' && $ziro_ziro_one == '1' && $ziro_one_one == '1' && $ziro_one_ziro == '1' 
        // && $one_ziro_ziro == '0' && $one_ziro_one == '0' && $one_one_one == '0' && $one_one_ziro == '0')
        // {
        //     $function = '~A';
        // }
        // if($ziro_ziro_ziro == '0' && $ziro_ziro_one == '0' && $ziro_one_one == '0' && $ziro_one_ziro == '0' 
        // && $one_ziro_ziro == '1' && $one_ziro_one == '1' && $one_one_one == '1' && $one_one_ziro == '1')
        // {
        //     $function = 'A';
        // }
        // if($ziro_ziro_ziro == '1' && $ziro_ziro_one == '1' && $ziro_one_one == '0' && $ziro_one_ziro == '0' 
        // && $one_ziro_ziro == '1' && $one_ziro_one == '1' && $one_one_one == '0' && $one_one_ziro == '0')
        // {
        //     $function = '~B';
        // }
        // if($ziro_ziro_ziro == '0' && $ziro_ziro_one == '0' && $ziro_one_one == '1' && $ziro_one_ziro == '1' 
        // && $one_ziro_ziro == '0' && $one_ziro_one == '0' && $one_one_one == '1' && $one_one_ziro == '1')
        // {
        //     $function = 'B';
        // }
        // if($ziro_ziro_ziro == '0' && $ziro_ziro_one == '1' && $ziro_one_one == '1' && $ziro_one_ziro == '0' 
        // && $one_ziro_ziro == '0' && $one_ziro_one == '1' && $one_one_one == '1' && $one_one_ziro == '0')
        // {
        //     $function = 'C';
        // }

        // // divar
        // if($ziro_ziro_ziro == '1' && $ziro_ziro_one == '0' && $ziro_one_one == '0' && $ziro_one_ziro == '1' 
        // && $one_ziro_ziro == '1' && $one_ziro_one == '0' && $one_one_one == '0' && $one_one_ziro == '1')
        // {
        //     $function = '~C';
        // }
        // if($ziro_ziro_ziro == '1' && $ziro_ziro_one == '0' && $ziro_one_one == '0' && $ziro_one_ziro == '1' 
        // && $one_ziro_ziro == '0' && $one_ziro_one == '0' && $one_one_one == '0' && $one_one_ziro == '0')
        // {
        //     $function = '~A~C';
        // }
        // if($ziro_ziro_ziro == '0' && $ziro_ziro_one == '0' && $ziro_one_one == '0' && $ziro_one_ziro == '0' 
        // && $one_ziro_ziro == '1' && $one_ziro_one == '0' && $one_one_one == '0' && $one_one_ziro == '1')
        // {
        //     $function = 'A~C';
        // }
        // if($ziro_ziro_ziro == '1' && $ziro_ziro_one == '0' && $ziro_one_one == '0' && $ziro_one_ziro == '0' 
        // && $one_ziro_ziro == '0' && $one_ziro_one == '0' && $one_one_one == '0' && $one_one_ziro == '1')
        // {
        //     $function = '~A~B~C + AB~C';
        // }
        // if($ziro_ziro_ziro == '0' && $ziro_ziro_one == '0' && $ziro_one_one == '0' && $ziro_one_ziro == '1' 
        // && $one_ziro_ziro == '1' && $one_ziro_one == '0' && $one_one_one == '0' && $one_one_ziro == '0')
        // {
        //     $function = 'A~B~C + ~AB~C';
        // }
        // // none


        return view('karnaugh-three', [
            'ziro_ziro_ziro' => $ziro_ziro_ziro,
            'ziro_ziro_one' => $ziro_ziro_one,
            'ziro_one_ziro' => $ziro_one_ziro,
            'ziro_one_one' => $ziro_one_one,
            'one_ziro_ziro' => $one_ziro_ziro,
            'one_ziro_one' => $one_ziro_one,
            'one_one_ziro' => $one_one_ziro,
            'one_one_one' => $one_one_one,
            // 'function' => $function,
        ]);
    }

    public function karnaugh_four(Request $request)
    {
        $ziro_ziro_ziro_ziro = $request->first;
        $ziro_ziro_ziro_one = $request->secend;
        $ziro_ziro_one_one = $request->third;
        $ziro_ziro_one_ziro = $request->forth;
        $ziro_one_ziro_ziro = $request->five;
        $ziro_one_ziro_one = $request->six;
        $ziro_one_one_one = $request->seven;
        $ziro_one_one_ziro = $request->eight;
        $one_one_ziro_ziro = $request->nine;
        $one_one_ziro_one = $request->ten;
        $one_one_one_one = $request->eleven;
        $one_one_one_ziro = $request->twoelve;
        $one_ziro_ziro_ziro = $request->thirteen;
        $one_ziro_ziro_one = $request->fourteen;
        $one_ziro_one_one = $request->fifteen;
        $one_ziro_one_ziro = $request->sixteen;


        if ($ziro_ziro_ziro_ziro == 1) {
            $ziro_ziro_ziro_ziro = '1';
        } else {
            $ziro_ziro_ziro_ziro = '0';
        }

        if ($ziro_ziro_ziro_one == 1) {
            $ziro_ziro_ziro_one = '1';
        } else {
            $ziro_ziro_ziro_one = '0';
        }

        if ($ziro_ziro_one_one == 1) {
            $ziro_ziro_one_one = '1';
        } else {
            $ziro_ziro_one_one = '0';
        }

        if ($ziro_ziro_one_ziro == 1) {
            $ziro_ziro_one_ziro = '1';
        } else {
            $ziro_ziro_one_ziro = '0';
        }

        if ($ziro_one_ziro_ziro == 1) {
            $ziro_one_ziro_ziro = '1';
        } else {
            $ziro_one_ziro_ziro = '0';
        }

        if ($ziro_one_ziro_one == 1) {
            $ziro_one_ziro_one = '1';
        } else {
            $ziro_one_ziro_one = '0';
        }

        if ($ziro_one_one_one == 1) {
            $ziro_one_one_one = '1';
        } else {
            $ziro_one_one_one = '0';
        }

        if ($ziro_one_one_ziro == 1) {
            $ziro_one_one_ziro = '1';
        } else {
            $ziro_one_one_ziro = '0';
        }
        if ($one_one_ziro_ziro == 1) {
            $one_one_ziro_ziro = '1';
        } else {
            $one_one_ziro_ziro = '0';
        }

        if ($one_one_ziro_one == 1) {
            $one_one_ziro_one = '1';
        } else {
            $one_one_ziro_one = '0';
        }

        if ($one_one_one_one == 1) {
            $one_one_one_one = '1';
        } else {
            $one_one_one_one = '0';
        }

        if ($one_one_one_ziro == 1) {
            $one_one_one_ziro = '1';
        } else {
            $one_one_one_ziro = '0';
        }

        if ($one_ziro_ziro_ziro == 1) {
            $one_ziro_ziro_ziro = '1';
        } else {
            $one_ziro_ziro_ziro = '0';
        }

        if ($one_ziro_ziro_one == 1) {
            $one_ziro_ziro_one = '1';
        } else {
            $one_ziro_ziro_one = '0';
        }

        if ($one_ziro_one_one == 1) {
            $one_ziro_one_one = '1';
        } else {
            $one_ziro_one_one = '0';
        }

        if ($one_ziro_one_ziro == 1) {
            $one_ziro_one_ziro = '1';
        } else {
            $one_ziro_one_ziro = '0';
        }




        return view('karnaugh-four', [
            'ziro_ziro_ziro_ziro' => $ziro_ziro_ziro_ziro,
            'ziro_ziro_ziro_one' => $ziro_ziro_ziro_one,
            'ziro_ziro_one_one' => $ziro_ziro_one_one,
            'ziro_ziro_one_ziro' => $ziro_ziro_one_ziro,
            'ziro_one_ziro_ziro' => $ziro_one_ziro_ziro,
            'ziro_one_ziro_one' => $ziro_one_ziro_one,
            'ziro_one_one_one' => $ziro_one_one_one,
            'ziro_one_one_ziro' => $ziro_one_one_ziro,
            'one_one_ziro_ziro' => $one_one_ziro_ziro,
            'one_one_ziro_one' => $one_one_ziro_one,
            'one_one_one_one' => $one_one_one_one,
            'one_one_one_ziro' => $one_one_one_ziro,
            'one_ziro_ziro_ziro' => $one_ziro_ziro_ziro,
            'one_ziro_ziro_one' => $one_ziro_ziro_one,
            'one_ziro_one_one' => $one_ziro_one_one,
            'one_ziro_one_ziro' => $one_ziro_one_ziro,

            // 'function' => $function,
        ]);

    }

    public function decoder(Request $request)
    {
        $count = $request->input('count');
        $m1 = $request->input('m1');
        $m2 = $request->input('m2');
        $active = $request->active;
        $output = $count * $count;
        // dd($active);

        if ($active == 'active-high') {


        } else {

        }

        return view('/decoder', ['count' => $count, 'output' => $output]);
    }

    public function addition(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $operation = $request->operation;
        $base = $request->base;
        $base = intval($base);


        //get size of numbers
        $newnumber1 = strval($number1);
        $newnumber2 = strval($number2);

        $sizeofnumber1 = strlen($newnumber1);
        $sizeofnumber2 = strlen($newnumber2);
        $sizeofnumber1--;
        $sizeofnumber2--;

        $number3 = $number1 + $number2;
        $strnumber3 = strval($number3);
        $size = strlen($strnumber3);
        $size -= 1;
        // dd($size);

        for ($i = $sizeofnumber1; $i >= 0; $i--) {

            if (intval($newnumber1[$i]) >= $base) {
                $error = 'The numbers and base dont match';
                return view('addsub', ['error' => $error]);
            }
        }

        for ($i = $sizeofnumber2; $i >= 0; $i--) {

            if (intval($newnumber2[$i]) >= $base) {
                $error = 'The numbers and base dont match';
                return view('addsub', ['error' => $error]);
            }
        }



        $numarr = [];
        for ($i = $size; $i >= 0; $i--) {
            $arrnum[$i] = intval($strnumber3[$i]);
        }

        $m = 0;
        $m--;
        for ($i = $size; $i >= 0; $i--) {
            if (isset($next) && $next == true) {
                $arrnum[$i]++;
                $next = false;
            }
            if ($arrnum[$i] >= $base) {
                $arrnum[$i] = $base - $arrnum[$i];
                $next = true;

            }

        }
        // dd($arrnum);
        $arrnum = array_reverse($arrnum);

        return view('addsub', ['arrnum' => $arrnum, 'base' => $base, 'operation' => $operation]);


    }
}