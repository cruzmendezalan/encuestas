<?php

namespace encuestas\Http\Controllers;

use Illuminate\Http\Request;

use encuestas\Http\Requests;
use encuestas\Http\Controllers\Controller;

class PDFController extends Controller
{
    public function reporteEncuestaEgresados() 
        {
            $data = $this->getData();
            $date = date('Y-m-d');
            $invoice = "3222";
            $view =  \View::make('pdf.reporteEncuestaEgresados', compact('data', 'date', 'invoice'))->render();
            // return \View::make('pdf.reporteEncuestaEgresados', compact('data', 'date', 'invoice'))->render();
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view);
            return $pdf->stream('invoice');
        }
    public function reporteEncuestaEmpleadores(){
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "3222";
        $view =  \View::make('pdf.reporteEncuestaEmpleadores', compact('data', 'date', 'invoice'))->render();
        // return \View::make('pdf.reporteEncuestaEmpleadores', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }

    public function getData() {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
