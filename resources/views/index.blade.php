<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="public/assets/img/favicon.png">
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bower_components/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/fresh-table/assets/css/fresh-bootstrap-table.css" />
    <link rel="stylesheet" href="assets/main.css">
    <title>Admin Panel</title>
</head>
<body>
<div style="display:none;position: fixed;width: 100%;height: 100%;background: rgba(51,51,51,0.8);z-index: 999" class="loader justify-content-center align-items-center">
    <div class="lds-dual-ring"></div>
</div>
<header class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" height="60"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="menu" class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="/">Başvurular <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul id="menu_right" class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="mr-2 img-fluid rounded-circle" src="https://picsum.photos/id/107/30" alt=""><span id="kadi"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a style="cursor: pointer" onclick="logout()" class="dropdown-item">Çıkış Yap</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container pt-3">
    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <h2 class="underline text-white pb-2 font-weight-bold">Başvurular
                <svg class="underline_effect" viewBox="0 0 154 13">
                    <use href="#line"></use>
                </svg>
                <svg class="underline_effect" viewBox="0 0 154 13">
                    <use href="#line"></use>
                </svg>
            </h2>
        </div>
    </div>
    <hr class="border-white mb-2">
    <div class="container">

        <div class="row">
            <div class="table-responsive fresh-table full-color-q">

                <table class="table table-dark bg-transparent">
                    <thead>
                        <th>#ID</th>
                        <th>Ad Soyad</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Departman</th>
                        <th>Tarih</th>
                        <th>Durum</th>
                    </thead>
                    <tbody id="basvurular">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <svg id="stroke" xmlns="http://www.w3.org/2000/svg" width="0" height="0">
    <defs>
        <path id="line" d="M2 2c49.7 2.6 100 3.1 150 1.7-46.5 2-93 4.4-139.2 7.3 45.2-1.5 90.6-1.8 135.8-.6" fill="none" stroke-linecap="round" stroke-linejoin="round" vector-effect="non-scaling-stroke"/>
    </defs>
</svg>
</main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content text-white" style="background: black">
          <div class="bg-success modal-header">
              <h5 class="modal-title font-weight-bold">aaa4c8c86ac9fd14acc795c8eeee2114</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form class="">
                  <div class="form-row">
                      <div class="col-md-9">
                          <div class="form-group">
                              <label for="exampleEmail">Cihaz Adı</label>
                              <input autocomplete="off" name="cihazADI" placeholder="antp27prmrmsy" type="text" class="form-control dark-input">
                          </div>
                          <div class="form-group">
                              <label for="examplePassword">Cihaz Radiorder Linki Giriniz!</label>
                              <input autocomplete="off" name="cihazLINK" type="text" class="form-control dark-input">
                          </div>
                          <div class="form-group">
                              <select class="form-control dark-input">
                                  <option selected>Kategori Seç</option>
                                  <option value="1">Kategori 1</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-3" style="display: flex; align-items: center;">
                          <button class="btn btn-dark btn-sm btn-block" style="height: 100px;">KAYDET</button>
                      </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm btn-block">Sıfırla</button>
          </div>
      </div>
    </div>
  </div>

<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function loader() {
            $('.loader').toggleClass('d-flex');
        }

        const $table = $('#fresh-table');


        $(function () {

            $('#kadi').text(localStorage.getItem('mail'));

            $table.bootstrapTable({
                classes: 'table table-hover table-striped',
                toolbar: '.toolbar',

                search: true,
                pagination: true,
                striped: true,
                sortable: true,
                pageSize: 8,
                pageList: [8, 10, 25, 50, 100],

                formatShowingRows: function (pageFrom, pageTo, totalRows) {
                    return ''
                },
                formatRecordsPerPage: function (pageNumber) {
                    return pageNumber;
                }
            });
        });
    </script>

    <script>
        var departmanlar=null;
        $(function () {

            if (localStorage.getItem('auth')){
                $.ajax({
                    url : "/api/departments",
                    type : "GET",
                    dataType : "JSON",
                    beforeSend: function () {
                        $('.loader').addClass('d-flex');
                    },
                    success : function(res){
                        departmanlar=res.Response.data;
                    },
                    complete:function (){
                        $.ajax({
                            url : "/api/fsa/Auth_forms",
                            type : "GET",
                            dataType : "JSON",
                            xhrFields: {
                                withCredentials: true
                            },
                            beforeSend: function (xhr) {
                                $('.loader').addClass('d-flex');
                                xhr.setRequestHeader('Authorization', 'Basic ' + btoa(localStorage.getItem('auth')));
                            },
                            success : function(res){

                                console.log(res);

                                var data=res;

                                console.log(data);

                                for (var i=0;data.length>i;i++){
                                    var salt=data[i];
                                    console.log(salt);
                                    var departman=departmanlar.find(d=>d.department_id==salt.department_id);
                                    $('#basvurular').append('<tr><td>'+salt.id+'</td><td>'+salt.name_surname+'</td><td>'+salt.email+'</td><td>'+salt.phone+'</td><td>'+departman.department_name+'</td><td>'+new Date(salt.created_at)+'</td><td>'+durum(salt.status,salt.id)+'</td><td><a target="_blank" href="'+salt.passport+'"><i class="fas fa-passport"></i></a><a href="'+salt.transcript+'"></a><a target="_blank" href="'+salt.graduation_document+'"><i class="fas fa-file-download"></i></a><a href="'+salt.language_document+'" target="_blank"><i class="fas fa-globe"></i></a></td></tr>');
                                }

                            },
                            complete:function (){
                                $('.loader').removeClass('d-flex');
                            },
                            error : function(e){
                                console.log("hata", e)
                            }
                        });
                    },
                    error : function(e){
                        console.log("hata", e)
                    }
                });
            }else{
                window.location="/login";
            }
        });

        function logout(){
            localStorage.removeItem('auth');
            window.location="/login";
        }

        function durum(durum,id){
            if(durum==null){
                return '<span class="badge badge-warning">Beklemede</span><br/>' +
                    '<div onclick="onay('+id+',true)" class="btn btn-success">Onayla</div></br><div onclick="onay('+id+',false)" class="btn btn-danger">Reddet</div>';
            }else if (durum=="1"){
                return '<span class="badge badge-success">Onaylı</span>';
            }else{
                return '<span class="badge badge-danger">Reddedildi</span>';
            }
        }


        function onay(id,durum){
            var text;
            if (durum){
                text="Başvuru onaylanacaktır"
            }else{
                text="Başvuru reddedilecektir"
            }
            Swal.fire({
                title: 'Emin misiniz?',
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, eminim'
            }).then((result) => {
                if (result.isConfirmed) {
                    var d=durum ? "1":"0";
                    console.log(d);
                    var url="/api/f_s_a_form/"+id+"?status="+d;
                    console.log(url);
                    $.ajax({
                        url: url,
                        type: "PUT",
                        dataType: "JSON",
                        xhrFields: {
                            withCredentials: true
                        },
                        beforeSend: function (xhr) {
                            $('.loader').addClass('d-flex');
                            xhr.setRequestHeader('Authorization', 'Basic ' + btoa(localStorage.getItem('auth')));
                        },
                        success: function (res) {
                            $('.loader').removeClass('d-flex');
                            Swal.fire(
                                'Başarılı!',
                                'İşleminiz başarıyla gerçekleşti',
                                'success'
                            );
                            setTimeout(()=>{
                                window.location.reload();
                            },1000);

                        }
                    });


                }
            })
        }
    </script>
</body>
</html>
