<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <title>Form</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/css/intlTelInput.css'>
    <style>
        .mdc-text-field--filled:not(.mdc-text-field--disabled){
            background-color:transparent;
        }

        .input-group > .intl-tel-input.allow-dropdown {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            width: 1%;
        }

        .input-group > .intl-tel-input.allow-dropdown > .flag-container {
            z-index: 4;
        }

        .iti-flag {
            background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/img/flags.png");
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .iti-flag {
                background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/img/flags@2x.png");
            }
        }
        .row-sm{
            border-style: groove;
            border-color: #bcc7c6;
            border-radius:15px;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
<div class="container" style="width: 65%;">

    <div class="row" style="margin-bottom: 20px; background-color: #ad303c">
        <div class="col"></div>
        <div class="col">
            <br>
            <img src="logo.png" class="ui-icons ui-icons-retina-primary-logo-mobile" alt="Responsive image">
        </div>
        <div class="col"></div>
    </div>
    <form id="basvuru">
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">

            <div class="form-group row-lg">
                <div>
                    <label for="name">Name*</label><br>
                    <label>Your name And Surname</label>
                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input class="mdc-text-field__input" type="text" placeholder="Your name and Surname" id="name">
                        <span class="mdc-line-ripple"></span>
                    </label>
                </div>

            </div>
        </div>
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">
            <div class="form-group row-lg">
                <div>
                    <label for="email">Email*</label><br>
                    <label>Your email address</label>
                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input class="mdc-text-field__input" type="email" required placeholder="example@example.com" id="email">
                        <span class="mdc-line-ripple"></span>
                    </label>
                </div>

            </div>


        </div>

        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">

            <div class="form-group row-lg">
                <div class="row">
                    <div class="col-lg">
                        <label>Phone Number*</label>
                        <div class="input-group">
                            <input id="phone" type="tel" class="form-control form-control-sm rounded-0 w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">

            <div class="form-group row-lg">
                <div>
                    <label for="department">Department*</label><br>
                    <label>Department to apply</label>
                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <select id="department" class="form-control" style="cursor: pointer"></select>
                    </label>
                </div>

            </div>
        </div>
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">

            <div class="form-group row-lg">
                <div>
                    <label for="passport">Passport*</label><br>
                    <label for="passport">Your Passport</label>
                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input type="file" id="passport">
                    </label>
                </div>

            </div>
        </div>
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">

            <div class="form-group row-lg">
                <div>
                    <label for="diploma">Graduation Document*</label><br>

                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input type="file" id="diploma">
                    </label>
                </div>
            </div>
            <div class="form-group row-lg">
                <div>
                    <label for="diploma">Graduation Avarage*</label><br>

                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input type="text" id="notortalama">
                    </label>
                </div>
            </div>
        </div>
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">

            <div class="form-group row-lg">
                <div>
                    <label for="transcript">Transcript*</label><br>

                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input type="file" id="transcript">
                    </label>
                </div>

            </div>
        </div>
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px;">

            <div class="form-group row-lg">
                <div>
                    <label for="languageDoc">Language Document*</label><br>

                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input type="file" id="languageDoc">
                    </label>
                </div>
            </div>
        </div>
        <div class="row-sm" style="border-style: groove; border-color: #bcc7c6; border-radius:15px; padding: 10px; margin: 10px; alignment: center;">

            <div class="form-group row-lg">
                <div>
                    <label for="reason">Reason for application</label><br>
                    <label>Why do you want to apply to our University?</label>
                    <label style="width: 100%;" class="mdc-text-field mdc-text-field--filled mdc-text-field--focused">
                        <input class="mdc-text-field__input" type="text" placeholder="Type the reason here" id="reason">
                        <span class="mdc-line-ripple"></span>
                    </label>
                </div>

            </div>
        </div>
        <div class="row-sm" style="padding: 10px; margin-bottom: 25px;">
            <input type="submit" class="btn btn-primary w-100"/>
        </div>
    </form>

</div>
<!-- Jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/intlTelInput.min.js'></script>

<!-- check inputs-->
<script type="text/javascript">

    $(function () {
        $.ajax({
            url: "/api/departments",
            type: "GET",
            dataType: "JSON",
            beforeSend: function () {

            },
            success: function (res) {
                var departmanlar = res.Response.data;
                console.log(departmanlar);
                for (var i=0;departmanlar.length>i;i++){
                    $('#department').append('<option value="'+departmanlar[i].department_id+'">'+departmanlar[i].department_name+'</option>');
                }

            },
            complete: function () {

            }
        });
        });

    $("#basvuru").on('submit',function(e){
        e.preventDefault();
        var isim = $("#name").val();
        var email = $("#email").val();
        var numara = $("#phone").val();
        var alanKodu=$("#areaCode").val();
        var transcript=$("#transcript")[0].files.length;
        var passport=$("#passport")[0].files.length;
        var languageDoc=$("#languageDoc")[0].files.length;
        var diploma=$("#diploma")[0].files.length;


        if (!isim){
            alert("Please enter your name");
            $("#name").focus();
        }
        else if(!email){
            alert("Please enter your email address");
            $("#email").focus();
        }
        else if(numara===""){
            alert("Please enter your phone number");
            $("#phone").focus();

        }
        else if (!(transcript)){
            alert("Please upload your Transcript file");
            $("#transcript").focus();
        }
        else if (!(passport)){
            alert("Please upload your Passport file");
            $("#passport").focus();

        }
        else if (!(diploma)){
            alert("Please upload your Graduation File");
            $("#diploma").focus();
        }
        else if (!(languageDoc)){
            alert("Please upload your Language Document file");
            $("#languageDoc").focus();
        }
        else {



            var form = new FormData();
            form.append("name_surname", isim);
            form.append("email", email);
            form.append("phone", numara);
            form.append("passport", $("#passport")[0].files[0],$("#passport")[0].value );
            form.append("transcript", $("#transcript")[0].files[0], $("#transcript")[0].value);
            form.append("graduation_document", $('#diploma')[0].files[0],$('#diploma')[0].value);
            form.append("language_document", $('#languageDoc')[0].files[0], $('#languageDoc')[0].value);
            form.append("explanation", $('#reason').val());
            form.append("department_id", $('#department').val());
            form.append("graduation_average",$('#notortalama').val());

            var settings = {
                "url": "http://127.0.0.1:8000/api/f_s_a_form/",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Accept": "application/json"
                },
                "processData": false,
                "mimeType": "multipart/form-data",
                "contentType": false,
                "data": form
            };

            $.ajax(settings).done(function (response) {
                var res=JSON.parse(response);

                if(res.message=="Success"){
                    alert("Başvurunuz başarı ile gönderildi");
                    window.location.reload();
                }else{
                    alert("Başvuru gönderilirken bir sorun oluştu!");
                }

            });

        }




    });


    let telInput = $("#phone");

    // initialize
    telInput.intlTelInput({
        initialCountry: 'auto',
        preferredCountries: ['us','gb','br','ru','cn','es','it'],
        autoPlaceholder: 'aggressive',
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js",
        geoIpLookup: function(callback) {
            fetch('https://ipinfo.io/json', {
                cache: 'reload'
            }).then(response => {
                if ( response.ok ) {
                    return response.json()
                }
                throw new Error('Failed: ' + response.status)
            }).then(ipjson => {
                callback(ipjson.country)
            }).catch(e => {
                callback('us')
            })
        }
    });

    let telInput2 = $("#phone2");

    // initialize
    telInput2.intlTelInput({
        initialCountry: 'br',
        preferredCountries: ['us','gb','br','ru','cn','es','it'],
        autoPlaceholder: 'aggressive',
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.6/js/utils.js"
    });
</script>
</body>
</html>
