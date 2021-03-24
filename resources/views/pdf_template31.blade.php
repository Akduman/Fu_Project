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
                <td width="15%"> Adı ve Soyadı:   </td>
                <td > {{$request->name_surname}}</td>
                <td width="35%"; style="text-align: center"> Öğrenci No: {{$request->student_no}}  </td>
            </tr>
            <tr>
              <td >Anabilim Dalı:    </td>
              <td >  {{$request->department_name }}  </td>
              <td  ></td>
          </tr>
          <tr>
            <td >Tez Danışmanı:       </td>
            <td >   {{$request->advisor_name}}  </td>
            <td style="text-align: center">Bilim Dalı : {{$request->sub_department_name}} </td>
        </tr>
            <tr>
              <td >Programı:     </td>
              <td >Yüksek Lisans  <input type="checkbox" name="a" value="yes" @if ($request->program=='y') {{'checked'}} @endif >
                Doktora    <input type="checkbox" name="a" value="yes" @if ($request->program=='d') {{'checked'}} @endif>
                Bütünleşik Doktora <input type="checkbox" name="a" value="yes" @if ($request->program=='b') {{'checked'}} @endif></td>
              <td  style="text-align: center"> </td>
              </tr>

             <tr >
                <td width="15%">  TEZ BAŞLIĞI:   </td>
                <td>  {{$request->tr_title}} </td>

            </tr>
            </table>
      </div>
<div class="row-empty"></div>
<hr>
<div class="row-empty"></div>

{{-- 3237 karakter var --}}
<div>
    <p> <b> 1-TEZİN AMACI </b></p>
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
        <p><b>2.  ÇALIŞMA GEREKÇESİ </b></p>
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
                <p> <b> <u> HİPOTEZLER;</b> </u></p>
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
                <p> <b> <u> YAPILABİLİRLİK;</b> </u> </p>
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

                <p> <b> <u>  LİTERATÜR ÖZETİ;</b> </u></p>
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
    <p> <b>4. YÖNTEM</b></p>
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
    <p> <b>5.  ÖZGÜN DEĞER</b></p>
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
    <p> <b>6.  YAYGIN ETKİ</b></p>
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
    <p> <b>7.  KURUM DIŞINA BAĞIMLILIK</b></p>
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
    <p><b>8.  ÇALIŞMA TAKVİMİ</b></p>
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
                    <td style="padding: padding: 2px,2px,2px,2px ">Çalışma Paketi</td>
                    <td style="padding: padding: 2px,2px,2px,2px ; width:10% ">Başlangıc</td>
                    <td style="padding: padding: 2px,2px,2px,2px; width:10% ">Bitiş </td>
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
    <p><b>9. ENSTİTÜ İSTATİSTİK AMAÇLI SORULARI</b></p>
    <p>Danışman Tarafından Doldurulacaktır! </p>
    <div>

    <table >
        <tr  >
        <td width="5%" >1</td>
        <td width="60%">Öğrenci bir iş yerinde çalışıyor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%" colspan="2">Hayır<input type="checkbox" name="a" value="no"></td>

        </tr>
        <tr>
        <td width="5%">2</p></td>
        <td width="60%">Öğrencinin Tez çalışması süresince muhtemel ikamet ili </td>
        <td width="15%" colspan="2">Elazığ     <input type="checkbox" name="cinsiyet" value="erkek"><br></td>
        <td width="15%" colspan="2">Elazığ dışında<input type="checkbox" name="cinsiyet" value="erkek"></td>

        </tr>
        <tr>
        <td width="5%">3</td>
        <td width="60%">Çalışmalar için Laboratuvar imkanı yeterli mi? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"> (%.........)</td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">4</td>
        <td width="60%">Çalışmalar için il dışına seyahat düşünülüyor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">5</td>
        <td width="60%">Üniversite dışından destek (iş birliği) alınacak mı?	</td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">6</td>
        <td width="60%">Proje başvurusu düşünülüyor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">7</td>
        <td width="60%">Tez başlığı (Türkçe ve İngilizce) internet ortamında tarandı mı? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">8</td>
        <td width="60%">Ticari bir ürün çıkması muhtemel mi? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">9</td>
        <td width="60%">Patent alınması muhtemel mi?	</td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes" >(%.........)</td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">10</td>
        <td width="60%">Öğrenciye ait girişimcilik (KOSGEB) sertifikası var mı? <</td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">11</td>
        <td width="60%">Tez konusuna dış paydaş katkısı var mı? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>
        <tr>
        <td width="5%">12</td>
        <td width="60%">Tez Çalışması disiplinler arası nitelikte mi? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"</td>
        </tr>
        <tr>
        <td width="5%">13</td>
        <td width="60%">İkinci Danışman ataması düşünülüyor mu? </td>
        <td width="15%" colspan="2">Evet<input type="checkbox" name="a" value="yes">(%.........)</td>
        <td width="15%">Hayır<input type="checkbox" name="a" value="no"></td>
        </tr>

        <tr>
        <td width="5%">14</td>
        <td width="60%" >Öğrencinin Tez çalışması için laboratuvar bilgi düzeyi nedir?</td>
        <td width="20%"colspan="2"> Kötü<input type="checkbox" name="a" value="yes"> Orta<input type="checkbox" name="a" value="no"> İyi<input type="checkbox" name="a" value="yes"></td>
        <td width="15%">Gerekmiyor<input type="checkbox" name="a" value="no"></td>
        </tr>



        <tr>
        <td>15</td>
        <td colspan="2">Destekleyen Kurum veya kuruluş var mı? Lütfen belirtiniz................</td>
        <td>Belge: VAR <input type="checkbox" name="a" value="yes"></td>
        <td>YOK: <input type="checkbox" name="a" value="no"></td>
        </tr>



        <tr>
        <td>16</td>
        <td>Çalışma alanı hangi sektörü ilgilendiriyor? Lütfen belirtiniz</td>
        <td colspan="3">....................................   ...</td>
        </tr>
    </tbody>


    </table>







    </div>
</div>
<div class="row-empty"></div>

<div>
    <p><b>10. AKADEMİK ÇALIŞMA BEYANNAMESİ</b></p>
</div>
<hr>
<div style="padding: 15px, 15px,15px,15px">
    <p style="text-align: center; padding: 15px, 15px,15px,15px "><u> GEREKÇE: 2547 sayılı Kanunun (değişik: 02/12/2016 – KHK – 6764/26-30) 53. Maddesi.</u></p>
    <p style="text-align: center ;padding-top:15px"> Öğrenci olarak imzaladığım bu Tez Konusu Önerisi ve Planı’nı aşağıda adı ve imzası bulunan danışmanımın gözetiminde hazırladığımı, bu Formda konu detayları verilen ve çalışma planı sunulan tez konusunda çalışmaya istekli olduğumu, resmi belgeye dayalı herhangi bir sağlık, idari, hukuki veya maddi sebep bulunmadığı sürece danışmanımın tez konusu ile ilgili vereceği akademik görevleri zamanında ve eksiksiz yerine getirmek için gayret edeceğimi, 2547 sayılı Yükseköğretim Kanunu’nun Disiplin konulu 53. Maddesi ve devamında tanımlandığı gibi; Tez çalışmalarımdan elde edilecek sonuçların herhangi bir biçimde saptırılmasının veya eksiltilmesinin suç olduğunu bildiğimi, tez çalışmalarımdan elde edilecek sonuçları tüm dürüstlüğümle toplumsal sorumluluk ve etik kurallar çerçevesinde tezimde kullanacağımı, adı geçen Kanunla tanımlanan diğer akademik suçların neler olduğunu okuyup anladığımı, bu beyanlarımın aksi tespit edilmesi halde Enstitü Yönetim Kurulu tarafından alınacak tüm kararlara uyacağımı bildiririm.</p>
    <p style="text-align: center ;padding-top:15px">Tez Danışmanı olarak, bu Tez Konusu ve Planı Önerisi’nin sorumlu olduğum bölümlerini titizlikle kontrol ettiğimi; resmi belgeye dayalı sağlık, idari veya hukuki bir problem bulunmadığı, öğrenciye vereceğim tez konusu ile ilgili akademik görevleri zamanında ve eksiksiz yerine getirdiği sürece tez danışmanlığı görevimi etik kurallara bağlı olarak yürüteceğimi, öğrencinin tez çalışmalarını tamamlayabilmesi için gerekli çalışma ortamını ve laboratuvar imkanlarını sağlayacağımı, 2547 sayılı Kanun’un Disiplin konulu 53. Maddesinde yer alan tüm akademik suç teşkil eden davranışları okuyup anladığımı ve bu suçlar hakkında toplumsal sorumluluğum ile eğitimci sorumluluğumun farkında olarak öğrencimi her fırsatta bilinçlendirmek için çaba sarf edeceğimi, bu taahhütlerimin aksi tespit edilirse Enstitü Yönetim Kurulu tarafından alınacak tüm kararlara uyacağımı bildiririm.</p> <br>
    <p style="text-align: center; padding-top:15px"> Yukarıdaki Akademik Çalışma Beyannamesini okuyup onayladığımızı ve her türlü hatadan ve yanlış beyandan doğacak yasal sorumluluğun bizlere ait olduğunu beyan ederiz. </p>
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
            <td style="text-align: center">  İmza </td>
            <td></td>
            <td style="text-align: center">    İmza</td>
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
            <td style="text-align: center"> Öğrenci</td>
            <td style="text-align: center">Tez Danışmanı</td>
        </tr>
    </table>
</div>

</body>
</html>

