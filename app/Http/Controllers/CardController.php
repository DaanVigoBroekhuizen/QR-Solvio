<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // hier probeerde ik een foto te maken van het kaartje en die mee te sturen naar de qr code maar helaas is dat mij niet gelukt.

//        $html = "<div class='ping'>Pong ✅</div>";
//        $css = ".ping { padding: 20px; font-family: 'sans-serif'; }";
//
//        $client = new \GuzzleHttp\Client();
//        // Retrieve your user_id and api_key from https://htmlcsstoimage.com/dashboard
//        $res = $client->request('POST', 'https://hcti.io/v1/image', [
//            'auth' => ['000f0b94-1946-4168-a3ec-806610a02c62', 'b1e4d353-3545-48d2-93a9-0c025f81f3cd'],
//            'form_params' => ['html' => $html, 'css' => $css]
//        ]);
//
//        dd($res->getBody());







        //view("generatePicture", compact("request"))
//        $photo = Browsershot::url('https://example.com')
//            ->select('.front-side')
//            ->windowSize(320, 240)
//            ->save("public/images/test.png");

//        $test = Browsershot::html('
//        <style>
//            .front-side {
//                width: 390px;
//                height: 220px;
//                display: grid;
//                grid-template-columns: 2% 96% 2%;
//                grid-template-rows: 4% 92% 4%;
//                position: relative;
//                margin: 20px auto;
//                overflow: hidden;
//                box-shadow: 2px 5px 15px 0px #17161694;
//                background-color: #122529;
//            }
//            .color-grid {
//                display: grid;
//                grid-template-columns: repeat(3, 150px);
//                grid-template-rows: repeat(8, 50px);
//                grid-gap: 8px;
//                width: 150px;
//                height: 400px;
//                transform: rotate(-45deg);
//            }
//            .black {
//                background-color: #343536;
//                grid-column: 2 / span 2;
//                grid-row: 1 / span 3;
//            }
//            .red1 {
//                background-color: #e45e4f;
//                grid-row: 2 / span 5;
//            }
//            .red2 {
//                background-color: #e45e4f;
//                grid-column: 2 / span 2;
//                grid-row: 4/7;
//            }
//            .green {
//                background-color: #007e67;
//                grid-column: 2/4;
//                grid-row: 7/9;
//            }
//
//            .info-grid {
//                grid-column: 2/3;
//                grid-row: 2/3;
//                z-index: 2;
//                width: 100%;
//                height: 100%;
//                background-color: rgba(255, 255, 255, 0.363);
//                box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.432);
//                border-radius: 6px;
//                font-size: 0.7rem; /*12px;*/
//                display: grid;
//                grid-template-columns: 15px repeat(3, 1fr) 15px;
//                grid-template-rows: repeat(3, 1fr);
//                line-height: 1px;
//            }
//            .info-grid .name {
//                grid-column: 2 / span 2;
//                grid-row: 1 / span 1;
//                font-size: 1.2em;
//                letter-spacing: .1rem;
//                margin-top: 8px;
//            }
//            .info-grid .name h5{
//                font-weight: unset;
//            }
//            .info-grid .addr {
//                grid-column: 2 / span 2;
//                grid-row: 3;
//            }
//
//            .info-grid .phoneNo {
//                grid-column: 3 / span 2;
//                grid-row: 2;
//                text-align: end;
//            }
//            .info-grid .emailId {
//                grid-column: 3 / span 2;
//                grid-row: 3;
//                text-align: end;
//                font-size: 1.1em;
//            }
//            .name-tag h1,h3{
//                margin: 2px;
//                font-weight: unset;
//            }
//        </style>
//
//        <div class="front-side" id="front-side">
//            <div class="color-grid">
//                <div class="black"></div>
//                <div class="red1"></div>
//                <div class="red2"></div>
//                <div class="green"></div>
//            </div>
//            <div class="info-grid">
//                <div class="name">
//                    <h2> {{ $request->name }} </h2>
//                </div>
//
//                <div class="addr">
//                    <p>1/2 Street,
//                        <strong> City</strong>, State,
//                        <strong> Country</strong>
//                    </p>
//                </div>
//
//                <div class="phoneNo">
//                    <p>+000
//                    <strong>1234</strong> 4567 7896</p>
//                </div>
//
//                <div class="emailId">
//                    <p class="email">yourusername@
//                        <strong>email</strong>.com</p>
//                    <p class="web">
//                        <strong>www</strong>.yourwebsite.
//                        <strong>com</strong>
//                    </p>
//                </div>
//            </div>
//        </div>')->save("/resources/images/test.png");

        $array = json_encode($request->all('name', 'email', 'residence', 'adres', 'jobTitle'));

        return view("seeCard", compact("request", "array"));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return view("generatePicture", compact("request"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
