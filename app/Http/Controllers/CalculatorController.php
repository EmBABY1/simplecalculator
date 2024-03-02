<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate(Request $requset)
    {
        $operand1=$requset->input('operand1');
        $operand2=$requset->input('operand2');
        $operator=$requset->input('operator');     
       global $result;
        switch ($operator) {
            case 'add':
                $result = $operand1 + $operand2;
                $op='+';
                break;
            case 'subtract':
                $result = $operand1 - $operand2;
                $op='-';
                break;
            case 'multiply':
                $result = $operand1 * $operand2;
                $op='*';
                break;
            case 'divide':
                if ($operand2 != 0) {
                    $result = $operand1 / $operand2;
                    $op='/';
                } else {
                    $result = "Error! Division by zero.";
                }
                break;
            default:
                $result = "Invalid operation";
        }

      
         return view('welcome');
       
    }
 
}