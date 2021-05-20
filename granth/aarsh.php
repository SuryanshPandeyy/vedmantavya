<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>अन्य आर्ष ग्रन्थ</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <!--------jquery--------------->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body> 
    <div class="flex-aarsh">
        <button class="tablink-aarsh active" onclick="openPage2('mainPage', this, 'red')"> मुख्य पृष्ठ</button>
        <button class="tablink-aarsh active" onclick="openPage2('manu', this, 'red')"  id="manusmriti"
            name="manu">मनुस्मृति</button>
        <button class="tablink-aarsh active" onclick="openPage2('nirukt', this, 'green')" id="defaultOpen" id="nirukta"
            name="yajurveda">निरुक्त</button>
        <button class="tablink-aarsh active" onclick="openPage2('samved', this, 'blue')" id="samveda">सामवेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
        <button class="tablink-aarsh active" onclick="openPage2('atharvaved', this, 'orange')" id="atharvaveda">अथर्ववेद</button>
    </div>

    <div id="mainPage" class="tabcontent">
        <h3><span style="color:rgb(68, 68, 68);">वेद</span><span>मन्तव्य</span></h3>
        <p>
        <div class="search-bar">
            <input type="text" placeholder="वेदों में खोजें...">
            <input type="submit" value="Go">
        </div>
        <p>
    </div>

    <div id="manu" class="tabcontent">
        <div>
            <div class="boxs">
                <img src="img/rigveda.png" alt="manusmriti">
                <div class="flex-text">
                    <div class="info_box">
                        <p>
                        <div><i class="fa fa-book"></i>ग्रन्थ: मनुस्मृति</div>
                        <div><i class="fa fa-book"></i>ऋषि: मनु</div>
                        </p>
                    </div>
                    <div class="info_box">
                        <p>
                        <div><i class="fa fa-book"></i>अध्याय: 12</div>
                        <div><i class="fa fa-book"></i>कुल श्लोक: </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="description">
                <h2>मनुस्मृति सम्बंधित जानकारी</h2>
                
            </div>
        </div>
        <div class="ved-search-bar">
            <input type="text" placeholder="मनुस्मृति में खोजें...">
            <input type="submit" value="Go">
        </div>

        <div class="option-mantra">
            <div class="headline">
                <h3>श्लोक खोजें</h3>
            </div>
            <form role="search-shlok" class="form-inline">
                <div class="col-md-4">
                    <select name="manuAdhyay" id="manuAdhyay" class="1-12 rig manuAdhyay">
                        <option value="select" selected disabled>अध्याय चुनें</option>
                        <script>
                            $(function () {
                                var $select = $(".1-12");
                                for (i = 1; i <= 12; i++) { $select.append($('<option class=' + i + ' value=' + i + '></option>').val(i).html(i)) }
                            });
                        </script>
                    </select>
                </div>
        
                <div class="col-md-4">
                    <!-- sukt one -->
                    <select id="manuShlok" class="manuShlok rig">
                        <option disabled selected>श्लोक चुनें</option>
                        <script>
                            $("#manuAdhyay").change(function () {
                                $("#manuShlok").load("manudata/" + $(this).val() + ".html");
                            });
                        </script>
                    </select>
                </div>
            </form>
        </div>
    </div>

<!-- निरुक्त  -->


    <div id="nirukt" class="tabcontent">
        <div>
            <div class="boxs">
                <img src="img/nirukt.png" alt="manusmriti">
                <div class="flex-text">
                    <div class="info_box">
                        <p>
                        <div><i class="fa fa-book"></i>ग्रन्थ: निरुक्त</div>
                        <div><i class="fa fa-book"></i>ऋषि: यास्क</div>
                        </p>
                    </div>
                    <div class="info_box">
                        <p>
                        <div><i class="fa fa-book"></i>अध्याय: 13</div>
                        <div><i class="fa fa-book"></i>कुल श्लोक: </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="description">
                <h2>निरुक्त सम्बंधित जानकारी</h2>
        
            </div>
        </div>
        <div class="ved-search-bar">
            <input type="text" placeholder="निरुक्त में खोजें...">
            <input type="submit" value="Go">
        </div>
        
        <div class="option-mantra">
            <div class="headline">
                <h3>श्लोक खोजें</h3>
            </div>
            <form role="search-shlok" class="form-inline">
                <div class="col-md-4">
                    <select name="nirukt" id="nirukt-adhyay" class="1-13 rig nirukt-adhyay">
                        <option value="select" selected disabled>अध्याय चुनें</option>
                        <script>
                            $(function () {
                                var $select = $(".1-13");
                                for (i = 1; i <= 13; i++) { $select.append($('<option class=' + i + ' value=' + i + '></option>').val(i).html(i)) }
                            });
                        </script>
                    </select>
                </div>
            </form>
        </div>

        <div class="box-box selectSection" id="box-box">
            <a href="#first-ad" >
           <div class="content-box"  data-number="1">1</div>
            </a>
           <div class="content-box"  data-number="2">2</div>
           <div class="content-box"  data-number="3">3</div>
           <div class="content-box"  data-number="4">4</div>
           <div class="content-box"  data-number="5">5</div>
           <div class="content-box"  data-number="6">6</div>
           <div class="content-box"  data-number="7">7</div>
           <div class="content-box"  data-number="8">8</div>
           <div class="content-box"  data-number="9">9</div>
           <div class="content-box"  data-number="10">10</div>
           <div class="content-box"  data-number="11">11</div>
           <div class="content-box"  data-number="12">12</div>
           <div class="content-box"  data-number="13">13</div>
        </div>
        <div class="write-box">
            <?php
            include 'anya/nirukt.php';
            ?> 
        </div>
    </div>



    <div id="mainPage" class="tabcontent">
        <h3><span style="color:rgb(68, 68, 68);">वेद</span><span>मन्तव्य</span></h3>
        <p>
        <div class="search-bar">
            <input type="text" placeholder="वेदों में खोजें...">
            <input type="submit" value="Go">
        </div>
        <p>
    </div>
    


    <script type="text/javascript" src="main.js"></script>
</body>
</html>