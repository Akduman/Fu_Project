
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Signin Template · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body class="text-center">
<img class="fixed-top" src="public/logo2.png" width="300" alt="">
<main id="center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">THESIS TYPE</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">INFO</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Department</a>
                        <a class="nav-link" id="v-pills-title-tab" data-bs-toggle="pill" href="#v-pills-title" role="tab" aria-controls="v-pills-title" aria-selected="false">Title</a>
                        <a class="nav-link" id="v-pills-lang-tab" data-bs-toggle="pill" href="#v-pills-lang" role="tab" aria-controls="v-pills-lang" aria-selected="false">Study Type</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">About</a>
                        <a class="nav-link" id="v-pills-purpose-tab" data-bs-toggle="pill" href="#v-pills-purpose" role="tab" aria-controls="v-pills-purpose" aria-selected="false">Resources</a>
                        <a class="nav-link" id="v-pills-others-tab" data-bs-toggle="pill" href="#v-pills-others" role="tab" aria-controls="v-pills-others" aria-selected="false">Others</a>
                        <a class="nav-link" id="v-pills-workpacks-tab" data-bs-toggle="pill" href="#v-pills-workpacks" role="tab" aria-controls="v-pills-workpacks" aria-selected="false">Workpacks</a>
                        <a class="nav-link" id="v-pills-workpacks-tab" data-bs-toggle="pill" href="#v-pills-result" role="tab" aria-controls="v-pills-result" aria-selected="false">Result</a>
                    </div>
                    <form class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">THESIS TYPE</h3>
                                    <div class="custom-control custom-radio btn btn-secondary rounded-pill mb-1">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Initial Thesis Proposal</label>
                                    </div>
                                    <div class="custom-control custom-radio btn btn-secondary rounded-pill mb-1">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Edit an existing thesis</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- 
                        2-personel information form 30...
                        ----------------------
                    
                    -->
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Personel Information</h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control rounded-pill" name="name_surname" type="text" placeholder="Name Surname">
                                        </div>

                                        <div class="col-12 mt-2">
                                            <input class="form-control rounded-pill" name="student_no" type="text" placeholder="Student number">
                                        </div>
                                        
                                        <div class="col-12 mt-2">
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check" name="program" name="btnradio" id="btnradio1" autocomplete="off">
                                                <label class="btn btn-outline-secondary" value="y" for="btnradio1">Graduate</label>

                                                <input type="radio" class="btn-check" value="d"  name="program" name="btnradio" id="btnradio2" autocomplete="off">
                                                <label class="btn btn-outline-secondary" for="btnradio2">Doctorate</label>

                                                <input type="radio" class="btn-check" value="b" name="program" name="btnradio" id="btnradio3" autocomplete="off">
                                                <label class="btn btn-outline-secondary" for="btnradio3">Integrated thesis</label>
                                            </div>
                                        </div>
                                        <div class="offset-4 col-4 mt-2">
                                            <label for="kayit_date" class="form-label fw-bold text-secondary">Kayıt Tarihi</label>
                                            <input id="kayit_date" class="form-control rounded-pill" type="text" name="date"  name="field-name" data-mask="00/00/0000" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    <!-- 
                        3- Department information form 30...
                        ----------------------
                    
                    -->
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Choose The Department</h3>
                                    <div class="text-center">
                                        <div class="spinner-border" role="status"></div>
                                    </div>
                                    <div class="row">
                                        <select  id="departments" name="department_name" class="form-select rounded-pill mb-2">
                                            <option selected>Departments</option>
                                        </select>
                                        <select id="supervisors" name="advisor_name" class="form-select rounded-pill" disabled>
                                            <option selected>Supervisor's</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    <!-- 
                        4- thesis information  from 30...
                        ----------------------
                    
                    -->
                        <div class="tab-pane fade" id="v-pills-title" role="tabpanel" aria-labelledby="v-pills-title-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Enter Thesis Title</h3>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <input class="form-control rounded-pill" name="tr_title" type="text" placeholder="Enter thesis Title in Turkish">
                                        </div>
                                        <div class="col-12 my-2">
                                            <input class="form-control rounded-pill" name="en_title" type="text" placeholder="Enter thesis Title in English">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check" value="1" name="language" name="btnradio" id="tr" autocomplete="off">
                                                <label class="btn btn-outline-secondary" for="tr">Türkçe</label>

                                                <input type="radio" class="btn-check" value="0" name="language" name="btnradio" id="eng" autocomplete="off">
                                                <label class="btn btn-outline-secondary" for="eng">English</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                    <!-- 
                        5- form 30 check boxlar 
                        ----------------------
                    
                    -->
                        <div class="tab-pane fade" id="v-pills-lang" role="tabpanel" aria-labelledby="v-pills-lang-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Study Type</h3>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" value="1" class="custom-control-input" id="customCheck1" name="exp">
                                        <label class="custom-control-label" for="customCheck1">Experimental</label>
                                    </div>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" value="1" class="custom-control-input" id="customCheck2" name="analys">
                                        <label class="custom-control-label" for="customCheck2">Field Analysis</label>
                                    </div>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" value="1" class="custom-control-input" id="customCheck3" name="sys_dev">
                                        <label class="custom-control-label" for="customCheck3">System/Tool/Software Development</label>
                                    </div>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" value="1" class="custom-control-input" id="customCheck4" name="teo">
                                        <label class="custom-control-label" for="customCheck4">Theoric</label>
                                    </div>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" value="1" class="custom-control-input" id="customCheck5" name="sim">
                                        <label class="custom-control-label" for="customCheck5">Simulation</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <input class="form-control rounded-pill" type="text" placeholder="Industrial A" name="industrial_sector_a">
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control rounded-pill" type="text" placeholder="Industrial B" name="industrial_sector_b">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    
                    <!-- 
                        form 31 içeriği 
                        ----------------------
                    
                    -->   
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Thesis Purpose</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="purpose" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea"></label>
                                    </div>
                                    <h3 class="title">Problem Definition</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="requirement_1" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                                        <label for="floatingTextarea2"></label>
                                    </div>
                                    <h3 class="title">Hypothesis</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="requirement_2" class="form-control" placeholder="Leave a comment here" id="floatingTextarea3"></textarea>
                                        <label for="floatingTextarea2"></label>
                                    </div>
                                    <h3 class="title">Feasibility</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="requirement_3" class="form-control" placeholder="Leave a comment here" id="floatingTextarea4"></textarea>
                                        <label for="floatingTextarea2"></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                    <!-- 
                        31 kaynaklar 
                        ----------------------
                    
                    -->
                        <div class="tab-pane fade" id="v-pills-purpose" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Resources</h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="inputcontent">
                                                <div class="input-group mb-3">
                                                    <button id="add_button" class="btn btn-secondary" type="button">Add</button>
                                                    <input id="urlenter" type="text" class="form-control" placeholder="Url girin" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                    <!-- 
                        form 31 devam  
                        ----------------------
                    
                    -->   
                        <div class="tab-pane fade" id="v-pills-others" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Subject Detail</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="subject_scope_1" class="form-control" placeholder="Leave a comment here" id="floatingTextarea5"></textarea>
                                        <label for="floatingTextarea5"></label>
                                    </div>
                                    <h3 class="title">Literature Summary</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="subject_scope_2" class="form-control" placeholder="Leave a comment here" id="floatingTextarea5"></textarea>
                                        <label for="floatingTextarea5"></label>
                                    </div>
                                    <h3 class="title">Methods</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="method" class="form-control" placeholder="Leave a comment here" id="floatingTextarea26"></textarea>
                                        <label for="floatingTextarea26"></label>
                                    </div>
                                    <h3 class="title">Eigen value</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="org_val" class="form-control" placeholder="Leave a comment here" id="floatingTextarea38"></textarea>
                                        <label for="floatingTextarea38"></label>
                                    </div>
                                    <h3 class="title">Widespread Effect</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="effect" class="form-control" placeholder="Leave a comment here" id="floatingTextarea47"></textarea>
                                        <label for="floatingTextarea47"></label>
                                    </div>
                                    <h3 class="title">External Dependency</h3>
                                    <div class="form-floating mb-2">
                                        <textarea style="height: 120px" name="addicted" class="form-control" placeholder="Leave a comment here" id="floatingTextarea47"></textarea>
                                        <label for="floatingTextarea47"></label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    
                    <!-- 
                        form 31 çalışma paketleri 
                        ----------------------
                    
                    -->
                        <div class="tab-pane fade" id="v-pills-workpacks" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Workpacks</h3>
                                    <div class="row">
                                        <div class="col-6">
                                            <div id="add_workpack" class="btn btn-outline-success w-100 mb-1">ADD</div>
                                        </div>
                                        <div class="col-6">
                                            <div id="delete_workpack" class="btn btn-outline-danger w-100 mb-1">DELETE</div>
                                        </div>
                                    </div>
                                    <div class="row mb-1"><div class="col-6"><input id="workname" class="form-control" type="text" placeholder="Name of the workpack"></div><div class="col-3"><input class="form-control" type="number" id="button-start" placeholder="Start"></div><div class="col-3"><input class="form-control" type="number" id="button-end" placeholder="End"></div></div>
                                    <div id="workpacks">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>



                        
                    <!-- 
                        Son 
                        ----------------------
                    
                    -->
                        <div class="tab-pane fade" id="v-pills-result" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="form-container">
                                <div class="form-horizontal">
                                    <h3 class="title">Result</h3>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck30" name="example30">
                                        <label class="custom-control-label" for="customCheck30">30</label>
                                    </div>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck31" name="example31">
                                        <label class="custom-control-label" for="customCheck31">31</label>
                                    </div>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck33" name="example33">
                                        <label class="custom-control-label" for="customCheck33">33</label>
                                    </div>
                                    <div class="custom-control custom-checkbox btn btn-secondary rounded-pill mb-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck34" name="example34">
                                        <label class="custom-control-label" for="customCheck34">34</label>
                                    </div>
                                    <hr>
                                    <div style="display: none;" id="form34check">
                                        <div class="custom-control custom-radio btn btn-secondary rounded-pill mb-1">
                                            <input type="radio" id="customRadio34" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio34">Initial Thesis Proposal</label>
                                        </div>
                                        <div class="custom-control custom-radio btn btn-secondary rounded-pill mb-1">
                                            <input type="radio" id="customRadio35" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio35">Edit an existing thesis</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">GÖNDER</button>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info btn-lg prevtab text-white">Previous</button>
                        <button class="btn btn-info btn-lg nexttab text-white">Next</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('#kayit_date').mask("00/00/0000", {placeholder: "__/__/____"});

        var tabEl = $('a[data-bs-toggle="pill"]');
        tabEl.on('shown.bs.tab', function (event) {
            var e=parseInt($('#v-pills-tab .active').index());


            if (e==2){
                getDepartments();
            }
        })

        $add_button=$('#add_button');
        $inputcontent=$('#inputcontent');

        let input_limit=0;
        let work_limit=0;

        $add_button.on('click',()=>{

            if(input_limit<15){
                let text=$('#urlenter').val();
                var d = new Date();
                var n = d.getFullYear();
            
                let find=false;
                for(let i=0;i<5;i++){
                    console.log(text.search('('+n+')'));
                    if(text.search('('+n+')')>0){
                        $inputcontent.append('<div class="input-group mb-3">'+text+ '&nbsp;<div class="btn btn-danger delete" id="button-addon2">Delete</div></div>');
                        input_limit++;
                        find=true;
                        return;
                    }
                    n--;
                }
                if(!find){
                    alert("Olmaz");
                }
                
            }else{
                alert("Limit doldu");
            }

        });
        let k=0;
        $(document).on('click','.delete',function(){
            $(this).parent().remove();
            input_limit--;
        })

        $('#add_workpack').on('click',()=>{
            let start=$('#button-start').val();
            let end=$('#button-end').val();
            let workname=$('#workname').val();
            if(end>start){
                let i=`<div class="row mb-1">
                    <div class="col-6">${workname}</div> <div class="col-3">${start}</div> <div class="col-3">${end}</div>  
                </div>`;
                if(work_limit<10){
                    $('#workpacks').append(i);
                    work_limit++
                    k++;
                }else{
                    alert("Workpack limit!");
                }
            }else{
                alert('Küçük büyükten büyük ya da boş');
            }
            
        });


        $('#delete_workpack').on('click',()=>{
            $('#workpacks').children().last().remove();
            work_limit--;
        });

    });
    var dep=true;
    function getDepartments(){
        if (dep){
            $.ajax({
                url: "https://fenbilimleri.herokuapp.com/api/departments",
                type: "GET",
                dataType: "JSON",
                success: function (res) {
                    var departmanlar = res.Response.data;
                    dep=false;
                    for (var i=0;departmanlar.length>i;i++){
                        $('#departments').append('<option value="'+departmanlar[i].department_id+'">'+departmanlar[i].department_name+'</option>');
                    }
                    $('.spinner-border').hide();
                }
            });
        }
    }
    function bootstrapTabControl(){
        var i, items = $('.nav-link'), pane = $('.tab-pane');

        $('.nexttab').on('click', function(){

            i=parseInt($('#v-pills-tab .active').index());
            if (i==1){
                getDepartments();
            }

            $(items[i]).removeClass('active');
            $(items[i+1]).addClass('active');

            $(pane[i]).removeClass('show active');
            $(pane[i+1]).addClass('show active');

        });

        $('.prevtab').on('click', function(){
            i=parseInt($('#v-pills-tab .active').index());
            if(i!= 0){

                $(items[i]).removeClass('active');
                $(items[i-1]).addClass('active');

                $(pane[i]).removeClass('show active');
                $(pane[i-1]).addClass('show active');
            }
        });

        $('#customCheck34').on('change', function() { 
            console.log(this.checked);
            if (this.checked) {
                $('#form34check').show();
            }else{
                $('#form34check').hide();
            }
        });
    }

    $("#v-pills-tabContent").submit(function(e) {

        e.preventDefault();
        var form = $(this);
        
        if($('#customCheck30').is(':checked')){
            //Form 30 u gönderen ajax window.open(url,'_blank')
            $.ajax({
                type: "GET",
                url: "http://127.0.0.1:8000/api/pdf_30",
                data: form.serialize(), 
                success: function(data)
                {
                    window.open("127.0.0.1:8000/api/pdf_30");
                }
            });
        }

        if($('#customCheck31').is(':checked')){
            //Form 31 u gönderen ajax
            $.ajax({
                type: "GET",
                url: "",
                data: form.serialize(), 
                success: function(data)
                {
                alert(data);
                }
            });
        }

        if($('#customCheck33').is(':checked')){
            //Form 33 u gönderen ajax
            $.ajax({
                type: "GET",
                url: "",
                data: form.serialize(), 
                success: function(data) 
                {
                alert(data);
                }
            });
        }

        if($('#customCheck34').is(':checked')){
            //Form 34 u gönderen ajax
            $.ajax({
                type: "GET",
                url: "",
                data: form.serialize(), 
                success: function(data)
                {
                alert(data);
                }
            });
        }
        
        
    });
    bootstrapTabControl();
</script>
</body>
</html>
