<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>


    <style>
        .test{
            font-size: 25px;
            font-family: 'Courier New', Courier, monospace;
        }
        .myDiv {
           border: 5px outset red;
           background-color: lightblue;
           text-align: center;
         }
         .title{
             text-align: center;
             font-size: 12px;
             font-style: bold;
         }
         .font{
         font-family: DejaVu Sans;
        }
        p{
              font-family: DejaVu Sans;
            font-size: 10px;
            font-style: bold;
        }
        br {
           display: block;
           margin: 1px 0;
         }





         * {
         box-sizing: border-box;
         }

         /* Create two equal columns that floats next to each other */
         .column {
         float: left;
         width: 50%;
         padding: 10px;

         }
         .column3 {
         float: left;
         width: 33%;
         padding: 10px;
         }
         .column4 {
         float: left;
         width: 25%;
         padding: 10px;
         }

         /* Clear floats after the columns */
         .row:after {
         content: "";
         display: block;
         clear: both;

         }
         .row{
             display: block;

         }


         .right-fix{
         float: right;
         padding-right: 40px;
         }
         .row-empty{
                 display: block;
                 margin-top: 1px;
                 height:10px;
         }
         .row-empty2{
                 display: block;
                 margin-top: 1px;
                 height:20px;
         }
         .row-empty3{
                 display: block;
                 margin-top: 1px;
                 height:30px;
         }
         .column4-1 {
         float: left;
         width: 25%;
         padding: 10px;
         }
         .column4-3 {
         float: left;
         width: 75%;
         padding: 10px;
         }




         table {
            font-style: bold;
            font-family: DejaVu Sans;
            border-collapse:collapse;
            table-layout:fixed;
            width:100%;

         }

         table td {

             font-size: 10px;
             font-style: bold;
             font-family: DejaVu Sans;
             border:solid 0px #fab;

             height: 0.5cm;
             word-wrap:break-word;}

            table th {

             font-size: 10px;
             font-style: bold;
             font-family: DejaVu Sans;
             font-style: bold;
             font-family: DejaVu Sans;
             border:solid 0px #fab;
             width:100%;
             word-wrap:break-word;
         }

         .text-box{
             display: block;
             /* background-color:grey; */
             width:100%;
             height:2.5cm; width: 100%;
             /* background-color:grey */

        }
        .text-box-resource{
             padding: 2px,2px,2px,2px
             display: block;
             /* background-color:grey; */
             width:100%;
             height:8cm; width: 100%;


        }
        .text-box-table{
            text-align:left;
            padding-top:10px;
            padding-left:10px;
            padding-right:10px;
        }

     }

     .text-box-info{
        display: block;
             /* background-color:grey; */
             width:100%;
             height:6cm; width: 100%;


     }

     .text-box-fix{
             display: block;
             width:100%;
             height:4cm; width: 100%;
             /* background-color:grey */

        }


        .text-box-packs{
             padding: 2px,2px,2px,2px
             display: block;

             width:100%;
             height:11cm; width: 100%;
             /* background-color:grey */

        }



     }

 </style>


</head>
<body class="font">


    <img src="title_form_31.png" class="ui-icons ui-icons-retina-primary-logo-mobile" alt="Responsive image" width="705px">
    <br>
    <hr>



<div>



    <div >
        <table>
            <tr >
                <td width="15%"> Ad?? ve Soyad??:   </td>
                <td > {{$request->name_surname}}</td>
                <td width="35%"; style="text-align: center"> ????renci No: {{$request->student_no}}  </td>
            </tr>
            <tr>
              <td >Anabilim Dal??:    </td>
              <td >  {{$request->department_name }}  </td>
              <td  ></td>
          </tr>
          <tr>
            <td >Tez Dan????man??:       </td>
            <td >   {{$request->advisor_name}}  </td>
            <td style="text-align: center">Bilim Dal?? : {{$request->sub_department_name}} </td>
        </tr>
            <tr>
              <td >Program??:     </td>
              <td >Y??ksek Lisans  <input type="checkbox" name="a" value="yes" @if ($request->program=='y') {{'checked'}} @endif >
                Doktora    <input type="checkbox" name="a" value="yes" @if ($request->program=='d') {{'checked'}} @endif>
                B??t??nle??ik Doktora <input type="checkbox" name="a" value="yes" @if ($request->program=='b') {{'checked'}} @endif></td>
              <td  style="text-align: center"> </td>
              </tr>

             <tr >
                <td width="15%">  TEZ BA??LI??I:   </td>
                <td>  {{$request->tr_title}} </td>

            </tr>
            </table>
      </div>
<div class="row-empty"></div>
<hr>
<div class="row-empty"></div>

{{-- 3237 karakter var --}}
<div>
    <p> <b> 1-TEZ??N AMACI </b></p>
    <div class="row-empty"></div>
    <div class="row-empty"></div>
    <div  class="text-box">
        <div >
            <table>
                <tr>
                    <th class="text-box-table"> {{$request->purpose }} </th>
                </tr>
            </table>
        </div>
    </div>

    <div class="row-empty"></div>
    {{-- <hr> --}}
    {{-- SAYFA 1  --}}
    <div class="row-empty"></div>

    <div>
        <hr>
        <p><b>2.  ??ALI??MA GEREK??ES?? </b></p>
        <div class="row-empty"></div>
            <div style="padding: 1,1,1,1">
                <p> <b> <u> PROBLEM TANIMI; </u></b> </p>
                <div class="row-empty"></div>
                <div  class="text-box">
                    <div >
                        <table>
                            <tr>
                                <th class="text-box-table"> {{$request->requirement_1}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row-empty"></div>
                <p> <b> <u> H??POTEZLER;</b> </u></p>
                <div  class="text-box">
                    <div >
                        <table>
                            <tr>
                                <th class="text-box-table"> {{$request->requirement_2}} </th>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row-empty"></div>
                <p> <b> <u> YAPILAB??L??RL??K;</b> </u> </p>
                <div  class="text-box">
                    <div >
                        <table>
                            <tr>
                                <th class="text-box-table"> {{$request->requirement_3}} </th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row-empty3"></div>
<div class="row-empty2"></div>
<div class="row-empty1"></div>

{{-- sayfa 2 --}}
<div>
    <div class="row-empty"></div>
    <div>
        <p><b>3.  KONU ve KAPSAM</b></p>
        <div class="row-empty"></div>
            <div style="padding: 1,1,1,1">
                <p> <b> <u> KONU DETAYI; </u></b> </p>
                <div class="row-empty"></div>
                <div  class="text-box-info">
                    <div >
                        <table>
                            <tr>
                                <th class="text-box-table"> {{$request->subject_scope_1}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row-empty"></div>

                <p> <b> <u>  L??TERAT??R ??ZET??;</b> </u></p>
                <div  class="text-box-info">
                    <div >
                        <table>
                            <tr>
                                <th class="text-box-table"> {{$request->subject_scope_2}} </th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row-empty"></div>

                <p> <b> <u> KAYNAKLAR;</b> </u> </p>
                <div  class="text-box-resource">
                    <div >
                     
                        
            <table>           
                @php                
                    $index='response_';
                @endphp
                @for ($i = 1; $i <=15; $i++)
                            @php                
                            $index='response_'.$i;
                            @endphp
                <tr>                     
           
                            <td style="padding: padding: 2px,2px,2px,2px ; width:5%; text-align:center"> @if (isset($request->$index)) {{$i}} @endif </td>
                            <td style="padding: padding: 2px,2px,2px,2px   "> @if (isset($request->$index)) {{$request->$index}} @endif </td></td>                   
                    
                        </tr>                     
                            @php                
                            $index='response_';
                            @endphp
                @endfor 
        </table>    




                        {{-- <table>
                            @foreach ($request['calander'] as $key => $value)
                                    <tr>
                                        <td style="padding: padding: 2px,2px,2px,2px ; width:5%; text-align:center"> {{ $key}} </td>
                                        <td style="padding: padding: 2px,2px,2px,2px ">   {{$request->calander[$key]["packed"]}} </td>
                                        <td style="padding: padding: 2px,2px,2px,2px ; width:5% ">  {{$request->calander[$key]["begin"]}} </td>
                                        <td style="padding: padding: 2px,2px,2px,2px; width:5% "> {{$request->calander[$key]["end"]}} </td>
                                    </tr>
                            @endforeach            
                        </table> --}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

</div>

{{--sayfa3 ---}}
<div>
    <div class="row-empty"></div>
    <p> <b>4. Y??NTEM</b></p>
    <div class="row-empty"></div>
    <div class="row-empty"></div>
    <div  class="text-box-fix">
        <div >
            <table>
                <tr>
                    <th class="text-box-table">{{$request->method}}</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="row-empty"></div>
    <div class="row-empty"></div>
<hr>
    <p> <b>5.  ??ZG??N DE??ER</b></p>
    <div class="row-empty"></div>
    <div class="row-empty"></div>
    <div  class="text-box-fix">
        <div >
            <table>
                <tr>
                    <th class="text-box-table">{{$request->org_val}}</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="row-empty"></div>
    <div class="row-empty"></div>
<hr>
    <p> <b>6.  YAYGIN ETK??</b></p>
    <div class="row-empty"></div>
    <div class="row-empty"></div>
    <div  class="text-box-fix">
        <div >
            <table>
                <tr>
                    <th class="text-box-table">{{$request->effect}}</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="row-empty"></div>
    <div class="row-empty"></div>

    <hr>
    <p> <b>7.  KURUM DI??INA BA??IMLILIK</b></p>
    <div class="row-empty"></div>
    <div class="row-empty"></div>
    <div  class="text-box-fix">
        <div >
            <table>
                <tr>
                    <th class="text-box-table">{{$request->addicted}}</th>
                </tr>
            </table>
        </div>
    </div>
    <div class="row-empty"></div>
    <div class="row-empty"></div>

</div>

{{--Sayfa 4--}}
<div class="row-empty3"></div>
<div >
    <p><b>8.  ??ALI??MA TAKV??M??</b></p>
    {{-- <table>
        @foreach ($request['calander'] as $key => $value)
                <tr>
                    <td style="padding: padding: 2px,2px,2px,2px ; width:5%; text-align:center"> {{ $key}} </td>
                    <td style="padding: padding: 2px,2px,2px,2px ">   {{$request->calander[$key]["packed"]}} </td>
                    <td style="padding: padding: 2px,2px,2px,2px ; width:5% ">  {{$request->calander[$key]["begin"]}} </td>
                    <td style="padding: padding: 2px,2px,2px,2px; width:5% "> {{$request->calander[$key]["end"]}} </td>
                </tr>
        @endforeach

    </table> --}}
    <div  class="text-box-packs">
        <div >
   
            <table>
                <tr>  
                    <td style="padding: padding: 2px,2px,2px,2px ; width:5%; text-align:center"> NO </td>
                    <td style="padding: padding: 2px,2px,2px,2px ">??al????ma Paketi</td>
                    <td style="padding: padding: 2px,2px,2px,2px ; width:10% ">Ba??lang??c</td>
                    <td style="padding: padding: 2px,2px,2px,2px; width:10% ">Biti?? </td>
                </tr>        
                @php                
                    $index1='workname_';
                    $index2='start_';
                    $index3='end_';
                @endphp
                @for ($i = 1; $i <=10; $i++)
                            @php                
                                $index1='workname_'.$i;
                                $index2='start_'.$i;
                                $index3='end_'.$i;
                            @endphp
                <tr>             
                    
                    <td style="padding: padding: 2px,2px,2px,2px ; width:5%; text-align:center"> @if (isset($request->$index1)) {{$i}} @endif </td>
                    <td style="padding: padding: 2px,2px,2px,2px ">@if (isset($request->$index1)) {{$request->$index1}} @endif  </td>
                    <td style="padding: padding: 2px,2px,2px,2px ; width:10% ">@if (isset($request->$index2)) {{$request->$index2}} @endif </td>
                    <td style="padding: padding: 2px,2px,2px,2px; width:10% "> @if (isset($request->$index3)) {{$request->$index3}} @endif  </td>
                </tr>                     
                            @php                
                                    $index1='workname_';
                                    $index2='start_';
                                    $index3='end_';
                            @endphp
                @endfor 
        </table>    
            

            {{-- <table>
            //     @foreach ($request['resources'] as $key => $value)
            //         <tr>
            //             <td style="padding: padding: 2px,2px,2px,2px ; width:5%; text-align:center">{{$request->resources[$key]["resource"]}}</td>
            //             <td style="padding: padding: 2px,2px,2px,2px   "> + </td>
            //         </tr>
            //     @endforeach
            // </table> --}}

        </div>

    </div>


</div>
<div class="row-empty"></div>
<hr>
<div>
    <p><b>9. ENST??T?? ??STAT??ST??K AMA??LI SORULARI</b></p>
    <p>Dan????man Taraf??ndan Doldurulacakt??r! </p>
    <div>

    <table >
        <tr  >
        <td width="5%" >1</td>
        <td width="60%">????renci bir i?? yerinde ??al??????yor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%" colspan="2">Hay??r<input type="checkbox" name="a" value="no"></td>

        </tr>
        <tr>
        <td width="5%">2</p></td>
        <td width="60%">????rencinin Tez ??al????mas?? s??resince muhtemel ikamet ili </td>
        <td width="15%" colspan="2">Elaz????     <input type="checkbox" name="cinsiyet" value="erkek"><br></td>
        <td width="15%" colspan="2">Elaz???? d??????nda<input type="checkbox" name="cinsiyet" value="erkek"></td>

        </tr>
        <tr>
        <td width="5%">3</td>
        <td width="60%">??al????malar i??in Laboratuvar imkan?? yeterli mi? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"> (%.........)</td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">4</td>
        <td width="60%">??al????malar i??in il d??????na seyahat d??????n??l??yor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">5</td>
        <td width="60%">??niversite d??????ndan destek (i?? birli??i) al??nacak m???	</td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">6</td>
        <td width="60%">Proje ba??vurusu d??????n??l??yor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">7</td>
        <td width="60%">Tez ba??l?????? (T??rk??e ve ??ngilizce) internet ortam??nda tarand?? m??? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">8</td>
        <td width="60%">Ticari bir ??r??n ????kmas?? muhtemel mi? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">9</td>
        <td width="60%">Patent al??nmas?? muhtemel mi?	</td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes" >(%.........)</td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">10</td>
        <td width="60%">????renciye ait giri??imcilik (KOSGEB) sertifikas?? var m??? <</td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">11</td>
        <td width="60%">Tez konusuna d???? payda?? katk??s?? var m??? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">12</td>
        <td width="60%">Tez ??al????mas?? disiplinler aras?? nitelikte mi? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"</td>
        </tr>
        <tr>
        <td width="5%">13</td>
        <td width="60%">??kinci Dan????man atamas?? d??????n??l??yor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hay??r<input type="checkbox" name="a" value="no"></td>
        </tr>

        <tr>
        <td width="5%">14</td>
        <td width="60%" >????rencinin Tez ??al????mas?? i??in laboratuvar bilgi d??zeyi nedir?</td>
        <td width="20%"colspan="2"> K??t??<input type="checkbox" name="a" value="yes"> Orta<input type="checkbox" name="a" value="no"> ??yi<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Gerekmiyor<input type="checkbox" name="a" value="no"></td>
        </tr>



        <tr>
        <td>15</td>
        <td colspan="2">Destekleyen Kurum veya kurulu?? var m??? L??tfen belirtiniz................</td>
        <td>Belge: VAR <input type="checkbox" name="a" value="yes"></td>
        <td>YOK: <input type="checkbox" name="a" value="no"></td>
        </tr>



        <tr>
        <td>16</td>
        <td>??al????ma alan?? hangi sekt??r?? ilgilendiriyor? L??tfen belirtiniz</td>
        <td colspan="3">....................................   ...</td>
        </tr>
    </tbody>


    </table>







    </div>
</div>
<div class="row-empty"></div>

<div>
    <p><b>10. AKADEM??K ??ALI??MA BEYANNAMES??</b></p>
</div>
<hr>
<div style="padding: 15px, 15px,15px,15px">
    <p style="text-align: center; padding: 15px, 15px,15px,15px "><u> GEREK??E: 2547 say??l?? Kanunun (de??i??ik: 02/12/2016 ??? KHK ??? 6764/26-30) 53. Maddesi.</u></p>
    <p style="text-align: center ;padding-top:15px"> ????renci olarak imzalad??????m bu Tez Konusu ??nerisi ve Plan?????n?? a??a????da ad?? ve imzas?? bulunan dan????man??m??n g??zetiminde haz??rlad??????m??, bu Formda konu detaylar?? verilen ve ??al????ma plan?? sunulan tez konusunda ??al????maya istekli oldu??umu, resmi belgeye dayal?? herhangi bir sa??l??k, idari, hukuki veya maddi sebep bulunmad?????? s??rece dan????man??m??n tez konusu ile ilgili verece??i akademik g??revleri zaman??nda ve eksiksiz yerine getirmek i??in gayret edece??imi, 2547 say??l?? Y??ksek????retim Kanunu???nun Disiplin konulu 53. Maddesi ve devam??nda tan??mland?????? gibi; Tez ??al????malar??mdan elde edilecek sonu??lar??n herhangi bir bi??imde sapt??r??lmas??n??n veya eksiltilmesinin su?? oldu??unu bildi??imi, tez ??al????malar??mdan elde edilecek sonu??lar?? t??m d??r??stl??????mle toplumsal sorumluluk ve etik kurallar ??er??evesinde tezimde kullanaca????m??, ad?? ge??en Kanunla tan??mlanan di??er akademik su??lar??n neler oldu??unu okuyup anlad??????m??, bu beyanlar??m??n aksi tespit edilmesi halde Enstit?? Y??netim Kurulu taraf??ndan al??nacak t??m kararlara uyaca????m?? bildiririm.</p>
    <p style="text-align: center ;padding-top:15px">Tez Dan????man?? olarak, bu Tez Konusu ve Plan?? ??nerisi???nin sorumlu oldu??um b??l??mlerini titizlikle kontrol etti??imi; resmi belgeye dayal?? sa??l??k, idari veya hukuki bir problem bulunmad??????, ????renciye verece??im tez konusu ile ilgili akademik g??revleri zaman??nda ve eksiksiz yerine getirdi??i s??rece tez dan????manl?????? g??revimi etik kurallara ba??l?? olarak y??r??tece??imi, ????rencinin tez ??al????malar??n?? tamamlayabilmesi i??in gerekli ??al????ma ortam??n?? ve laboratuvar imkanlar??n?? sa??layaca????m??, 2547 say??l?? Kanun???un Disiplin konulu 53. Maddesinde yer alan t??m akademik su?? te??kil eden davran????lar?? okuyup anlad??????m?? ve bu su??lar hakk??nda toplumsal sorumlulu??um ile e??itimci sorumlulu??umun fark??nda olarak ????rencimi her f??rsatta bilin??lendirmek i??in ??aba sarf edece??imi, bu taahh??tlerimin aksi tespit edilirse Enstit?? Y??netim Kurulu taraf??ndan al??nacak t??m kararlara uyaca????m?? bildiririm.</p> <br>
    <p style="text-align: center; padding-top:15px"> Yukar??daki Akademik ??al????ma Beyannamesini okuyup onaylad??????m??z?? ve her t??rl?? hatadan ve yanl???? beyandan do??acak yasal sorumlulu??un bizlere ait oldu??unu beyan ederiz. </p>
</div>
<br>
<div>
    <table>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="text-align: center"> {{$request->test}}</td>
            <td></td>
            <td style="text-align: center">  ......./......./20....</td>
        </tr>
        <tr>
            <td> </td>
            <td></td>
            <td>  </td>
        </tr>
        <tr>
            <td style="text-align: center">  ??mza </td>
            <td></td>
            <td style="text-align: center">    ??mza</td>
        </tr>
    </table>

</div>

<div>
    <table>
        <tr>
           <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="text-align: center"> {{$request->name_surname}} </td>
            <td style="text-align: center">{{$request->advisor_name}}</td>
        </tr>
        <tr>
            <td style="text-align: center"> ????renci</td>
            <td style="text-align: center">Tez Dan????man??</td>
        </tr>
    </table>
</div>

</body>
</html>

