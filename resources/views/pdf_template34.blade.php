<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

<style>
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
           font-size: 11px;
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

            font-size: 11px;
            font-style: bold;
            font-family: DejaVu Sans;
           border:solid 0px #fab;


           word-wrap:break-word;}

           table th {

            font-size: 11px;
            font-style: bold;
            font-family: DejaVu Sans;
            font-style: bold;
            font-family: DejaVu Sans;
            border:solid 0px #fab;
            width:100%;
            word-wrap:break-word;
        }



    }






    }

</style>


</head>
<body class="font">
    <div class="row">
        <img src="title_form_34.png" class="ui-icons ui-icons-retina-primary-logo-mobile" alt="Responsive image" width="705px">

        <hr>


    </div>
    {{-- Dilekçe Başlığı --}}







<div>
    <div>
        <p>I - ÖĞRENCİ BİLGİLERİ </p>

    </div>
    <div >
        <table>
            <tr >
                <td width="15%"> Adı ve Soyadı : </td>
                <td >{{$request->name_surname}} </td>
                <td width="35%"; style="text-align: center"> Öğrenci No : {{$request->student_no}} </td>
            </tr>
            <tr>
              <td >Anabilim Dalı :  </td>
              <td > {{$request->department_name}}</td>
              <td  ></td>
          </tr>

            <tr>
              <td >Kayıt Tarihi :  </td>
              <td > {{$request->date}}</td>
              <td  style="text-align: center"></td>
              </tr>
              <tr>
                <td >Tez Danışmanı :  </td>
                <td > {{$request->advisor_name}}</td>
                <td style="text-align: center"></td>
            </tr>
            </table>
      </div>
      <hr>
          <br>
<div>
            <p>II - TEZ BİLGİLERİ</p>

            </div><br>
            <div>
              <table>
                <tr>
                   <td> Tez Başlığı : {{$request->tr_title}} </td>
               </tr>
             </table>
           </div>
           <div class="row-empty"></div>
           <div>
            <table>

                <tr>
                    <td  width="15%"> Tez Yazım Dili :    </td>
                    <td>Türkçe: <input type="checkbox" name="a" value="yes" @if ($request->language==1) {{'checked'}} @endif >
                        İngilizce:  <input type="checkbox" name="a" value="yes" @if ($request->language==0){{'checked'}}@endif ></td>

                </tr>

            </table><br>
            <table>

                <tr>
                    <td width="15%"> Çalışma Tarzı :    </td>
                    <td>Deneysel <input type="checkbox" name="a" value="yes" @if  (isset($request->exp)){{'checked'}} @endif>
                        Teorik  <input type="checkbox" name="a" value="yes" @if  (isset($request->teo)){{'checked'}} @endif>
                        Simülasyon <input type="checkbox" name="a" value="yes" @if(isset($request->sim)){{'checked'}} @endif>
                        Sistem/Araç/Yazılım Geliştirme  <input type="checkbox" name="a" value="yes" @if  (isset($request->sys_dev)){{'checked'}} @endif>
                        Saha Analizi  <input type="checkbox" name="a" value="yes" @if  (isset($request->analys)){{'checked'}} @endif>
                    </td>
                </tr>

            </table><br>
            <table>
                <tr>
                    <td width="25%">Endüstri Alanı : </td>
                    <td width="35%">A. @if ( isset( $request->industrial_sector_a) )
                           {{$request->industrial_sector_a}}
                    @endif

                    </td>
                    <td width="35%">B. @if ( isset( $request->industrial_sector_b) )
                        {{$request->industrial_sector_b}}
                 @endif</td>
                </tr>
            </table> <br>
            <table >
                <tr>
                    <td width="4cm" height="0.1cm" ></td>
                    <td>1. Etik Kurul İzni </td>
                    <td > Gerekmiyor <input type="checkbox" name="" id="" @if (isset($request->permission_1)==false){{'checked'}} @endif></td>
                    <td >Belge Var <input type="checkbox" name="" id="" @if (isset($request->permission_1)){{'checked'}} @endif></td>
                </tr>
        
                <tr>
                    <td width="4cm" height="0.1cm" ></td>
                    <td>2.Veri Kullanımı İzni </td>
                    <td > Gerekmiyor <input type="checkbox" name="" id="" @if (isset($request->permission_2)==false){{'checked'}} @endif></td>
                    <td >Belge Var <input type="checkbox" name="" id="" @if(isset($request->permission_2)){{'checked'}} @endif> </td>
                </tr>
                <tr>
                    <td width="4cm" height="0.1cm" style="text-align: center">Ekler : </td>
                    <td>3.Kurum/Kuruluş İzni</td>
                    <td > Gerekmiyor <input type="checkbox" name="" id="" @if  (isset($request->permission_3)==false){{'checked'}} @endif></td>
                    <td >Belge Var <input type="checkbox" name="" id="" @if (isset($request->permission_3)){{'checked'}} @endif> </td>
                </tr>
        
                <tr>
                    <td width="4cm" height="0.1cm" ></td>
                    <td>4.Tez Konusu ve Planı</td>
                    <td ></td>
                    <td >Belge Var <input type="checkbox" name="" id="" checked> </td>
                </tr>
                <tr>
                    <td width="4cm" height="0.1cm" ></td>
                    <td>5.Fikir Hak Sahipliği Beyanı</td>
                    <td > Gerekmiyor <input type="checkbox" name="" id=""@if ((isset($request->permission_5)==false)){{'checked'}} @endif></td>
                    <td >Belge Var <input type="checkbox" name="" id="" @if (isset($request->permission_5)) {{'checked'}} @endif> </td>
                </tr>
        </table>
         <br> <hr>
            <table>
                <tr>
                    <td width="21%"></td>
                    <td> İLK SAVUNMA    <input type="checkbox" name="a" value="yes" @if ($request->defense=='f'){{'checked'}}@endif></td>
                    <td> İKİNCİ SAVUNMA    <input type="checkbox" name="a" value="yes"@if ($request->defense=='s'){{'checked'}}@endif></td>
                    <td> KONU DEĞİŞİKLİĞİ    <input type="checkbox" name="a" value="yes"@if ($request->defense=='t'){{'checked'}}@endif></td>
                </tr>
            </table>


         </div>
         <hr>
        <div>
            <p> III - TİK TOPLANTI TUTANAĞI</p>
            </div>

         <div>
            <table>
            <tr>
                <td width="35%">Tarih:  ___/___/20___
                  &nbsp; &nbsp;  Saat: __:__   </td>
                <td>  Yer: ...... </td>
            </tr>
            </table> <br>
                <table>
                <tr>
                    <td style="text-align: center">FEN BİLİMLERİ ENSTİTÜSÜ MÜDÜRLÜĞÜNE</td>
                </tr>
            </table> <br>

                <table>
                    <tr>
                        <td style="text-align: right">Yukarıda bilgileri verilen doktora öğrencisinin tez konusu önerisi aşağıda imzaları bulunan </td>
                    </tr>
                </table> <br>

                <table>
                    <tr>
                        <td style="text-align: right">Komitemiz Üyelerince incelenmiş olup öğrencinin sözlü savunmasından sonra tez konusu önerisinin; </td>
                    </tr>
                  </table> <br>

                  <table>
                    <tr>
                        <td style="text-align: right">Mevcut haliyle KABULÜNE............................................ </td>
                        <td width="5%"><input style="text-align: right"  type="checkbox" name="a" value="yes"></td>
                    </tr>
                  </table> <br>
                  <table>
                    <tr>
                        <td style="text-align: right">Düzeltmeler yapıldıktan sonra KABULÜNE....................</td>
                        <td width="5%"><input style="text-align: right"  type="checkbox" name="a" value="yes"> </td>
                    </tr>
                  </table> <br>
                  <table>
                    <tr>
                        <td style="text-align: right">Başlığı aşağıdaki şekilde değiştirilerek KABULÜNE.......</td>
                        <td width="5%"><input style="text-align: right"  type="checkbox" name="a" value="yes"></td>
                    </tr>
                  </table> <br>
                  <table>
                    <tr>
                        <td style="text-align: right">Aşağıda belirtilen gerekçe ile REDDİNE........................</td>
                        <td width="5%"><input style="text-align: right"  type="checkbox" name="a" value="yes"></td>
                    </tr>
                  </table> <br>

                  <table>
                      <tr>
                          <td width="21%" style="text-align: right">oybirliği </td>
                          <td width="3%"><input style="text-align: right"  type="checkbox" name="a" value="yes"> </td>
                          <td>/ oyçokluğu (___ /3)  ile karar verilmiştir</td>
                      </tr>
                  </table> <br>
                  <table>
                      <tr>
                          <td width="21%" height="10%" style="text-align: right">RET <br> Gerekçesi</td>
                          <td></td>
                      </tr>

                      <tr>
                          <td width="21%" height="10%" style="text-align: right">Değiştirilen <br>Tez Başlığı </td>
                      </tr>

                  </table> <br> <hr>

                  <table>
                      <tr>
                          <td height="10%" style="text-align: center">İmza</td>
                          <td height="10%" style="text-align: center">İmza</td>
                          <td height="10%" style="text-align: center">imza</td>
                      </tr>
                      <tr><td></td></tr>
                      <tr>
                        <td  style="text-align: center">Unvanı Adı SOYADI</td>
                        <td  style="text-align: center">Unvanı Adı SOYADI</td>
                        <td  style="text-align: center">Unvanı Adı SOYADI</td>
                    </tr>
                    <tr>
                        <td  style="text-align: center">Tez Danışmanı</td>
                        <td  style="text-align: center">Üye</td>
                        <td  style="text-align: center">Üye</td>
                    </tr>
                  </table>

        </div>



        <div>
        <div>

<div>

</div>



        </div>



</div>

</body>
</html>

