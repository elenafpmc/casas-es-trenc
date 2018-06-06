<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Mail\InfoRequest;
use Illuminate\Support\Facades\Mail;
class InfoRequestController extends Controller
{
    public function information(Request $request){
		$prepend=(null!==($request->{'modal_name'}))?'modal_':'hero_';
		$name=$prepend.'name';
		$prefijo=$prepend.'phone-prefix';
		$phone=$prepend.'phone';
		$mail=$prepend.'mail';
		$mensaje=$prepend.'message';
		$lega=$prepend.'lega';
		
		$params=[
			'name'=>$request->$name,
			'prefijo'=>$request->$prefijo,
			'phone'=>$request->$phone,
			'mail'=>$request->$mail,
			'mensaje'=>$request->$mensaje,
			'lega'=>$request->$lega,
		];
		$name='name';
		$prefijo='phone-prefix';
		$phone='phone';
		$mail='mail';
		$mensaje='mensaje';
		$lega='lega';
		/* 
		$this->validate($request, [
				[
					$name=>'required',
					$phone=>['required','numeric'],
					$lega=>'required',
					$mail=>['required','email'],
					$mensaje=>'required'
				],
				[
					$name.'.required'=>'NOMBRE_OBLIGATORIO',
					$phone.'.required'=>'TELEFONO_OBLIGATORIO',
					$phone.'.numeric'=>'TELEFONO_NUMERICO',
					$lega.'.required'=>'LEGAL_OBLIGATORIO',
					$mail.'.required'=>'EMAIL_OBLIGATORIO',
					$mail.'.email'=>'FORMATO_EMAIL',
					$mensaje.'.required'=>'MENSAJE_OBLIGATORIO'
				]
		]); */
		$validator = Validator::make($params,
				[
					$name=>'required',
					$phone=>['required','numeric'],
					$mail=>['required','email'],
					$mensaje=>'required',
					$lega=>'required',
				],
				[
					$name.'.required'=>'NOMBRE_OBLIGATORIO',
					$phone.'.required'=>'TELEFONO_OBLIGATORIO',
					$phone.'.numeric'=>'TELEFONO_NUMERICO',
					$mail.'.required'=>'EMAIL_OBLIGATORIO',
					$mail.'.email'=>'FORMATO_EMAIL',
					$mensaje.'.required'=>'MENSAJE_OBLIGATORIO',
					$lega.'.required'=>'LEGAL_OBLIGATORIO',
				]
			
         );

        if ($validator->fails()) {
            return redirect($request->session()->previousUrl())
                        ->withErrors($validator)
                        ->withInput();
        }else{
			$mail = new InfoRequest($params);
			$mail->build();
			Mail::to('elena@flyingpigs.es')->send($mail);
			if(count(Mail::failures()) > 0){
				return redirect($request->session()->previousUrl())->with('error','ERROR_MENSAJE');
			}else{
				return redirect($request->session()->previousUrl())->with('success','MENSAJE_ENVIADO');
			}
		}
	}
}
