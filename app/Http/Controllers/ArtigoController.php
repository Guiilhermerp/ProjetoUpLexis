<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ixudra\Curl\Facades\Curl;

class ArtigoController extends Controller
{
    public function retornarTelaCaptura(){//retorna a tela para fazer a pesquisa
        return view('uplexis.captura');
    }

    public function postCapturar(Request $request){//faz o get no blog e retorna se deu certo ou errado

        // Send a GET request to: http://www.foo.com/bar
        $parametro = preg_replace('/\s/', '+',$request->get('cap_text'));//substitui espaços por +

        $url ='https://www.uplexis.com.br/blog/?s='. $parametro; //cria url

        $response = Curl::to($url)->get(); //fazer o get no blog uplexis

        $ar =[]; // Array que receberá o título e o link
         preg_match_all("/title\".[\n\s\t]+.*[\n\s\t]+.*[\n\s\t]+.*class=\"btn-uplexis orange\">Continue Lendo/",
            $response,
            $ar, PREG_PATTERN_ORDER);

         if(count($ar[0])>0){
             $count = count($ar[0]);
             foreach ($ar as $key=>$a){//remover itens indesejados
                 $ar[$key] = preg_replace('/\s+/', ' ',$a); // remover espaços
                 $ar[$key] = preg_replace('/title"> /', '',$ar[$key]); // remover tag da classe title
                 $ar[$key] = preg_replace('/<.*a href="/', ' || ',$ar[$key]); //remover tag
                 $ar[$key] = preg_replace('/\".*Continue Lendo/', '',$ar[$key]);//remover palavras não necessárias
             }

             foreach ($ar[0] as $a){//salvar em banco
                $captura = explode(" || ", $a);
                $cap = Artigo::where('link','=',$captura[1])->where('titulo','=',$captura[0])->first();
                if(is_null($cap)){
                    $artigo = new Artigo([
                        'titulo' => $captura[0],
                        'link' => $captura[1]
                    ]);
                    $artigo->usuario()->associate(\Auth::user());
                    $artigo->save();
                }

             }
             return redirect('/capturar')->withSuccess(trans($count.' Artigo(s) capturado(s) com sucesso'));
         }else{
             return \Redirect::back()->withErrors( 'Nenhum artigo encontrado');
         }

    }

    public function consulta(){// Retorna tela de consulta com os artigos para exibição
        $artigos = Artigo::with('usuario')->get();
        return view('uplexis.consulta',['artigos'=>$artigos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $artigo = Artigo::find($id);
        if(!is_null($artigo)){
            $artigo->delete();
        }
        return \Illuminate\Support\Facades\Response::json(array(
            'code'      =>  200,
            'message'   =>  "Ok"
        ), 200);
    }
}
