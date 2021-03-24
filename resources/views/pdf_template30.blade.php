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

{{-- Sayfa Başlığı     --}}
<div class="row">
    <img src="title_form_30.png" class="ui-icons ui-icons-retina-primary-logo-mobile" alt="Responsive image" width="705px">

    <hr>
    <p class="title"> {{$request->department_name}} ANABİLİM DALI BAŞKANLIĞI</p>
</div>
{{-- Dilekçe Başlığı --}}
<div class="row">
    <div class="row">
    <div class="column">
        <p>Karar Tarihi: ___/___/20___</p>
    </div>
    <div class="column" >
        <p class="right-fix">Sayı: ___________ </p>
    </div>
    </div>

    <div>
        <p class="title">FEN BİLİMLERİ ENSTİTÜSÜ MÜDÜRLÜĞÜNE</p>
        <p style="text-align:center">Anabilim Dalımız 
            @if ($request->program=='y'){{'yüksek lisans'}}@endif
            @if ($request->program=='d'){{'doktora'}}@endif
            @if ($request->program=='b'){{'bütünleşik doktora'}}@endif            
            öğrencisinin danışmanı ile birlikte önerdiği tez konusu aşağıda verilmiş olup tez çalışmalarının Anabilim Dalımız bünyesinde yürütülmesinin uygun olduğuna ve konunun Enstitüye arzına oybirliği ☐ / oyçokluğu (__ / __) ile karar verilmiştir. </p>
    </div>


    <div class="row">
        <div class="column" >
            <p>Önerildiği şekliyle kabul edilmiştir ............. ☐<br>
            Düzeltme yapıldıktan sonra kabul edilmiştir ☐</p>
    </div>

        <div class="column" >
                <p style="text-align: center;" >Unvan Adı SOYADI<br>
                Anabilim Dalı Başkanı <br >İmza </p>
        </div>
    </div>
    <hr>
</div>

{{-- öğrenci bilgileri --}}
<div class="row">

    <div class="column" >
        <p>ÖĞRENCİ BİLGİLERİ</p>
            <p>
                Adı ve Soyadı : {{$request->name_surname}}<br>
                Öğrenci No    : {{$request->student_no}}<br>
                Bilim Dalı    : {{$request->department_name}}<br>
                Danışmanı     : {{$request->advisor_name}}<br>
        </p>

    </div>

    <div class="column" >
        <div class="row-empty"></div>
        <div class="row-empty"></div>
        <div class="row-empty"><p> Öğrenci imza :</p></div>
        <div class="row-empty"></div>
        <div class="row-empty"></div>
        <div class="row-empty"><p> Danışman imza :</p></div>


    </div>

</div>

{{-- Tez Konusu Bilgileri --}}
<hr>

<table >
        <tr>
        <td>TEZ KONUSU BİLGİLERİ  </td>
        </tr>
</table>
<div class="row-empty"></div>


<table>

     <tr>
        <td>Türkçe Tez Başlığı    : {{$request->tr_title}}</td>
    </tr>
</table>

<table>

    <tr>
        <td>İngilizce Tez Başlığı : {{$request->en_title}}</td>
    </tr>

</table>



<table>

    <tr>
        <td>Tez Yazım Dili :    </td>
        <td>Türkçe <input type="checkbox" name="" id="" @if ($request->language==1){{'checked'}} @endif ></td>
        <td>İngilizce <input type="checkbox" name="" id="" @if ($request->language==0){{'checked'}} @endif> </td>
        <td></td>
        <td></td>


    </tr>

</table>


<table>

    <tr>
        <td width="15%"> Çalışma Tarzı :    </td>
        <td>Deneysel <input type="checkbox" name="a" value="yes" @if (isset($request->exp)){{'checked'}} @endif>
            Teorik  <input type="checkbox" name="a" value="yes" @if (isset($request->teo)){{'checked'}} @endif>
            Simülasyon <input type="checkbox" name="a" value="yes" @if (isset($request->sim)){{'checked'}} @endif>
            Sistem/Araç/Yazılım Geliştirme  <input type="checkbox" name="a" value="yes" @if (isset($request->sys_dev)){{'checked'}} @endif>
            Saha Analizi  <input type="checkbox" name="a" value="yes" @if (isset($request->analys)){{'checked'}} @endif></td>
    </tr>

</table><br>

<table >
        <tr>
            <td>Endüstri Alanı : </td>
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

<hr>
{{-- ENSTİTÜ YÖNETİM KURULU KARARI --}}
<table >
        <tr>
        <td>ENSTİTÜ YÖNETİM KURULU KARARI</td>
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
