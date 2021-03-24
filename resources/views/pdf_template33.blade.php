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
           width:100%;
           height: 0.5cm;
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
        <img src="title_form_33.png" class="ui-icons ui-icons-retina-primary-logo-mobile" alt="Responsive image" width="705px">

        <hr>
        <p class="title"> {{$request->department_name}}  ANABİLİM DALI BAŞKANLIĞI   <p style="float:right;">Elazığ ___/___/20__</p></p>

    </div>
    
    {{-- Dilekçe Başlığı --}}
    <div class="row">
            <p style="text-align:center"> Aşağıda bilgileri bulunan Anabilim Dalınız 
                @if ($request->program=='y'){{'yüksek lisans'}}@endif
                @if ($request->program=='d'){{'doktora'}}@endif
                @if ($request->program=='b'){{'bütünleşik doktora'}}@endif 
                öğrencisinin,<br>
                Tez Konusu Önerisi Savunması ..................................................	☐<br>
                Tez İlerleme Raporu Sözlü Savunmasının................................... ☐<br>
                Tez izleme komitesi üyeleri ve öğrenci ile görüşülüp aşağıda belirtilen tarih, saat ve yerde yapılması kararlaştırılmıştır. Bilgilerinizi ve gereğini arz ederim.
             </p>
    </div>


        <div class="row">
            <div class="column" style="text-align:center" >
                <p>Ekler;<br>Tez Konusu Önerisi (FORM-31)..	☐<br>
                Tez İlerleme Raporu (FORM-35). ☐</p>
        </div>
            <div class="column" >
                    <p style="text-align: center;" >İmza<br > Unvan Adı SOYADI<br>
                    Tez Danışmanı </p>
            </div>
        </div>


        <table>
            <tr>
                <td>Toplantı Tarihi : </td>
                <td>
                    <table>
                            <td> ____/____/20____ </td>
                            <td >  Saati: ____:____</td>
                    </table>

                </td>



                <td style="text-align: center">
                     UYGUNDUR <br>
                     <div class="row-empty"></div>
                     İmza <br>
                </td>
            </tr>
            <tr>
                <td> Yeri : </td>
                <td>......</td>
                <td style="text-align: center">    <div class="row-empty"></div> Unvan Adı SOYADI  <br>    <div class="row-empty"></div> Anabilim Dalı Başkanı  <br></td>
            </tr>
        </table>
    </div>

    <hr>




<div>
    <div>
        <p>I - ÖĞRENCİ BİLGİLERİ </p>

    </div>
    <div > <!-- part0 -->
        <div >


           <table>
                <tr>
                  <td >   Adı ve Soyadı : {{$request->name_surname}}     </td>
                  <td width="350"> </td>
                  <td style="text-align: center"><p >  Öğrenci No : {{$request->student_no}}  </td>
                </tr>
               <tr>
                <td >  Kayıt Tarihi :     </td>
                <td >    {{$request->date}}      </td>
                <td ></td>
              </tr>
           </table>
           <div class="row-empty"></div>
            <table>
                    <tr>
                        <td >Programı :    </td>
                        <td >Y.Lisans    <input type="checkbox" name="a" value="yes" @if ($request->program=='y'){{'checked'}} @endif >
                             Doktora    <input type="checkbox" name="a" value="yes" @if ($request->program=='d'){{'checked'}} @endif>
                             B. Doktora <input type="checkbox" name="a" value="yes" @if ($request->program=='b'){{'checked'}} @endif></td>
                        <td  style="text-align: center"> İmza </td>
                    </tr>
            </table>
        </div>
        <hr>
       </div>
          <br>
          <div>
            <p>II - TEZ BİLGİLERİ</p>

            </div><br>
            <div>
              <table>
                <tr>
                   <td> Tez Başlığı    :  {{$request->tr_title}} </td>
               </tr>
             </table>
           </div>
           <div class="row-empty"></div>
           <div>
            <table>

                <tr>
                    <td> Tez Yazım Dili :    </td>
                    <td width="180">Türkçe  <input type="checkbox" name="a" value="yes" @if ($request->language==1){{'checked'}} @endif>
                                   İngilizce  <input type="checkbox" name="a" value="yes" @if ($request->language==0){{'checked'}} @endif></td>
                    <td>     </td>
                </tr>

            </table><br>
         </div>
         <hr>
        <div>
            <p> III - TEZ İZLEME KOMİTESİ ÜYELERİ</p>
            </div>

        <div>
        <div>

<div>

</div>



<table >
    <tr>

        <td  style="text-align: center">  Öğretim Üyesi<br> (Unvanı, Adı ve Soyadı)</td>
        <td width="150">  Kurum/Anabilim Dalı </td>
        <td width="120"> EPOSTA  </td>
    </tr>

    <tr>

        <td width="150"> @if (isset($request->advisor_name))
            {{$request->advisor_name}} <br>
        @else
        ......   <br>  Danışman   
        @endif 
        </td>

        <td width="150">  ......  </td>
        <td > <table>
            <tr>
                <td>..............@....</td>
                <td >  </td>
            </tr>
            <tr>
                <td width="120"> Tarih:	 </td>
                <td > İmza  </td>
            </tr>
        </td></table>
    </tr>
    <tr>

        <td> ......    </td>
        <td >  ......    </td>
        <td > <table>
            <tr>
                <td> ..............@....</td>
                <td >  </td>
            </tr>
            <tr>
                <td width="120"> Tarih:	 </td>
                <td > İmza     </td>
            </tr>
        </td></table>
    </tr>

    <tr>
        <td> ......   </td>
        <td > ......     </td>
        <td > <table>
            <tr>
                <td> ..............@....</td>
                <td >  </td>
            </tr>
            <tr>
                <td width="120"> Tarih:	 </td>
                <td > İmza  </td>
            </tr>
        </td></table>
    </tr>

</table>
        </div>



</div>

</body>
</html>

