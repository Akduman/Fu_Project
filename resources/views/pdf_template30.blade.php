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




        table {       font-size: 11px;
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
           /* width:100%; */
           word-wrap:break-word;}

        table th {
            font-size: 11px;
            font-style: bold;
            font-family: DejaVu Sans;
            border:solid 0px #fab;
            width:100%;
            word-wrap:break-word;
        }





    </style>
</head>


<body class="font">

{{-- Sayfa Ba??l??????     --}}
<div class="row">
    <img src="title_form_30.png" class="ui-icons ui-icons-retina-primary-logo-mobile" alt="Responsive image" width="705px">

    <hr>
    <p class="title"> {{$request->department_name}} ANAB??L??M DALI BA??KANLI??I</p>
</div>
{{-- Dilek??e Ba??l?????? --}}
<div class="row">
    <div class="row">
    <div class="column">
        <p>Karar Tarihi: ___/___/20___</p>
    </div>
    <div class="column" >
        <p class="right-fix">Say??: ___________ </p>
    </div>
    </div>

    <div>
        <p class="title">FEN B??L??MLER?? ENST??T??S?? M??D??RL??????NE</p>
        <p style="text-align:center">Anabilim Dal??m??z 
            @if ($request->program=='y'){{'y??ksek lisans'}}@endif
            @if ($request->program=='d'){{'doktora'}}@endif
            @if ($request->program=='b'){{'b??t??nle??ik doktora'}}@endif            
            ????rencisinin dan????man?? ile birlikte ??nerdi??i tez konusu a??a????da verilmi?? olup tez ??al????malar??n??n Anabilim Dal??m??z b??nyesinde y??r??t??lmesinin uygun oldu??una ve konunun Enstit??ye arz??na oybirli??i ??? / oy??oklu??u (__ / __) ile karar verilmi??tir. </p>
    </div>


    <div class="row">
        <div class="column" >
            <p>??nerildi??i ??ekliyle kabul edilmi??tir ............. ???<br>
            D??zeltme yap??ld??ktan sonra kabul edilmi??tir ???</p>
    </div>

        <div class="column" >
                <p style="text-align: center;" >Unvan Ad?? SOYADI<br>
                Anabilim Dal?? Ba??kan?? <br >??mza </p>
        </div>
    </div>
    <hr>
</div>

{{-- ????renci bilgileri --}}
<div class="row">

    <div class="column" >
        <p>????RENC?? B??LG??LER??</p>
            <p>
                Ad?? ve Soyad?? : {{$request->name_surname}}<br>
                ????renci No    : {{$request->student_no}}<br>
                Bilim Dal??    : {{$request->department_name}}<br>
                Dan????man??     : {{$request->advisor_name}}<br>
        </p>

    </div>

    <div class="column" >
        <div class="row-empty"></div>
        <div class="row-empty"></div>
        <div class="row-empty"><p> ????renci imza :</p></div>
        <div class="row-empty"></div>
        <div class="row-empty"></div>
        <div class="row-empty"><p> Dan????man imza :</p></div>


    </div>

</div>

{{-- Tez Konusu Bilgileri --}}
<hr>

<table >
        <tr>
        <td>TEZ KONUSU B??LG??LER??  </td>
        </tr>
</table>
<div class="row-empty"></div>


<table>

     <tr>
        <td>T??rk??e Tez Ba??l??????    : {{$request->tr_title}}</td>
    </tr>
</table>

<table>

    <tr>
        <td>??ngilizce Tez Ba??l?????? : {{$request->en_title}}</td>
    </tr>

</table>



<table>

    <tr>
        <td>Tez Yaz??m Dili :    </td>
        <td>T??rk??e <input type="checkbox" name="" id="" @if ($request->language==1){{'checked'}} @endif ></td>
        <td>??ngilizce <input type="checkbox" name="" id="" @if ($request->language==0){{'checked'}} @endif> </td>
        <td></td>
        <td></td>


    </tr>

</table>


<table>

    <tr>
        <td width="15%"> ??al????ma Tarz?? :    </td>
        <td>Deneysel <input type="checkbox" name="a" value="yes" @if (isset($request->exp)){{'checked'}} @endif>
            Teorik  <input type="checkbox" name="a" value="yes" @if (isset($request->teo)){{'checked'}} @endif>
            Sim??lasyon <input type="checkbox" name="a" value="yes" @if (isset($request->sim)){{'checked'}} @endif>
            Sistem/Ara??/Yaz??l??m Geli??tirme  <input type="checkbox" name="a" value="yes" @if (isset($request->sys_dev)){{'checked'}} @endif>
            Saha Analizi  <input type="checkbox" name="a" value="yes" @if (isset($request->analys)){{'checked'}} @endif></td>
    </tr>

</table><br>

<table >
        <tr>
            <td>End??stri Alan?? : </td>
            <td>A : @if (isset($request->industrial_sector_a))
                {{$request->industrial_sector_a}}
            @endif </td>
            <td>B : @if (isset($request->industrial_sector_b))
                {{$request->industrial_sector_b}}
                @endif</td>
        </tr>

</table>
<hr>

<table >
        <tr>
            <td width="4cm" height="0.1cm" ></td>
            <td>1. Etik Kurul ??zni </td>
            <td > Gerekmiyor <input type="checkbox" name="" id="" @if (isset($request->permission_1)==false){{'checked'}} @endif></td>
            <td >Belge Var <input type="checkbox" name="" id="" @if (isset($request->permission_1)){{'checked'}} @endif></td>
        </tr>

        <tr>
            <td width="4cm" height="0.1cm" ></td>
            <td>2.Veri Kullan??m?? ??zni </td>
            <td > Gerekmiyor <input type="checkbox" name="" id="" @if (isset($request->permission_2)==false){{'checked'}} @endif></td>
            <td >Belge Var <input type="checkbox" name="" id="" @if(isset($request->permission_2)){{'checked'}} @endif> </td>
        </tr>
        <tr>
            <td width="4cm" height="0.1cm" style="text-align: center">Ekler : </td>
            <td>3.Kurum/Kurulu?? ??zni</td>
            <td > Gerekmiyor <input type="checkbox" name="" id="" @if  (isset($request->permission_3)==false){{'checked'}} @endif></td>
            <td >Belge Var <input type="checkbox" name="" id="" @if (isset($request->permission_3)){{'checked'}} @endif> </td>
        </tr>

        <tr>
            <td width="4cm" height="0.1cm" ></td>
            <td>4.Tez Konusu ve Plan??</td>
            <td ></td>
            <td >Belge Var <input type="checkbox" name="" id="" checked> </td>
        </tr>
        <tr>
            <td width="4cm" height="0.1cm" ></td>
            <td>5.Fikir Hak Sahipli??i Beyan??</td>
            <td > Gerekmiyor <input type="checkbox" name="" id=""@if ((isset($request->permission_5)==false)){{'checked'}} @endif></td>
            <td >Belge Var <input type="checkbox" name="" id="" @if (isset($request->permission_5)) {{'checked'}} @endif> </td>
        </tr>
</table>

<hr>
{{-- ENST??T?? Y??NET??M KURULU KARARI --}}
<table >
        <tr>
        <td>ENST??T?? Y??NET??M KURULU KARARI</td>
        </tr>
</table>
<div class="row-empty"></div>

<div class="row-empty"></div>

{{-- Footer --}}
<div class="row">
    <img src="form_33_bottom.png" class="ui-icons ui-icons-retina-primary-logo-mobile" alt="Responsive image" width="705px">
</div>
</body>
</html>
