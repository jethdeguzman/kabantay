<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mata - Open Data</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="assets/css/tuktuk.css">
    <link rel="stylesheet" href="assets/css/tuktuk.theme.mock.css">
    <!-- TUKTUK.WIDGETS -->
    <link rel="stylesheet" href="assets/css/tuktuk.icons.css">
    <style>
        aside > header .logo {
            margin-top: 10px;
            max-height: 30px; }

        aside footer img {
          height: 16px;
          position: relative;
          top: 5px;
          left: 2px; }

        .thumb {
            height: 96px;
            margin-bottom: 2.5em;
            text-align: center;
            line-height: 96px;
        }
        .column_4.thumb {
            height: 220px;
            line-height: 220px;
        }
        #map-canvas {
        height: 550px;
        margin :0px;
        padding: 0px;


      }
    </style>
</head>
<body data-tuktuk="boxes">
    <aside id="menu" class="absolute bck light column_3">
        <header class="bck dark">
            <div class="session on-left">
                <strong>logged in as <a href="#" class="color default">soyjavi</a></strong>
            </div>
            <a href="#" data-box="close" class="on-right text big icon remove color white"></a>
        </header>
        <article class="bck light scroll">

            <!-- <img src="http://cdn.tapquo.com/photos/javi_color.jpg" class="responsive padding-left padding-top padding-right"/>

            <div class="margin-left margin-right">
                <h4 class="text bold color theme inline">Javi Jiménez</h4>
                <span class="margin-left tag bck color inline text bold">pro</span>
                <a href="#" class="block"><span class="icon twitter"></span> soyjavi</a>
            </div>

            <hr/>
            <div class="margin" data-tuktuk="buttons">
                <button data-tuktuk-modal="modal" class="theme" data-tip="Click to view a modal window">Modal</button>
                <button data-tuktuk-modal="modal-right" data-tip="Click to view a side window" class="">Aside Right</button>
            </div>
            <hr>
            <ul class="margin" data-tuktuk="totals">
                <li><strong>3609</strong><small>followers</small></li>
                <li><strong>138</strong><small>following</small></li>
                <li><strong>14</strong><small>lists</small></li>
            </ul>
            <hr>
            <div class="margin">
                <strong class="text big normal block ">About <a href="#">Orman Clark</a></strong>
                <div class="display block  text justify small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
            </div>
            <nav data-tuktuk="menu" class="text bold">
                <a href="#" class="active"><span class="icon user"></span>Shots<small>(100)</small></a>
                <a href="#"><span class="icon heart"></span>Trending<small>(3)</small></a>
                <a href="#"><span class="icon group"></span>Following<small>(192)</small></a>
                <a href="#"><span class="icon star"></span>Debuts<small>(160)</small></a>
            </nav> -->
        </article>
    </aside>

    <aside class="column_3">
        <header class="bck color text center ">
           <h2><span class="icon eye-open"></span>Mata
           <!--  <img src="../images/logo-white.png" class="logo on-left"/> -->
            <!-- <a href="#" class="on-right text big icon cog" data-tuktuk-box="menu"></a> --></h2>
        </header>
        <article class="bck dark scroll">
        <div class="margin-top margin-left margin-right">
           <a href="#" class="button anchor alert" data-tuktuk-modal="modal-right"><span class="icon star"></span>Contribute</a>
       </div>
            <div class="margin-top" style="margin-top:20px; text-align:center;">

                <h4 class="text center bck color" style="padding:5px;"><span  class="icon filter"></span>Set <strong>Filters</strong></h4>
               
            </div>
            <form class="margin-left margin-right margin-top">
            <fieldset>
                <label style="line-height:30px;" class="text">Year</label>
                <span class="select ">
                    <select>
                        <option value="1">2013</option>
                        <option value="2">2012</option>
                        <option value="3">2011</option>
                    </select>
                </span>
            </fieldset>
            <fieldset>
                <label style="line-height:30px;" class="text">Region</label>
                <span class="select ">
                    <select>\
                        <option value="ALL">NATIONWIDE</option>
                        <option value="NCR">NCR</option>
                        <option value="CAR">CAR</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4A">4A</option>
                        <option value="4B">4B</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="ARMM">ARMM</option>
                    </select>
                </span>
            </fieldset>
            </form>
            <div class="margin-top margin-right margin-left">
                <a href="#" class="button anchor theme"><span class="icon search"></span>Search</a>
            </div>
            <hr/>
            <div class="" style="margin-top:20px; text-align:center;">

                <h4 class="text center bck color" style="padding:5px;"><span  class="icon bar-chart"></span>Show <strong>Mood</strong></h4>
               
            </div>
            
            <canvas class="margin-left margin-right margin-top" id="canvas" height="200" width="200"></canvas>
            <span><strong><small style="color: #949FB1;">Dismayed: 50% </small><small style="color: #4D5360;">Satistfied: 25% </small><small style="color: #F7464A;">Sad: 5% </small><small style="color: #46BFBD;">Hopeful: 15% </small><small style="color: #FDB45C;">Angry: 5% </small></strong></span>
            <!-- <img src="http://cdn.tapquo.com/photos/javi_color.jpg" class="responsive padding-left padding-top padding-right"/>

            <div class="margin-left margin-right">
                <h4 class="text bold color theme inline">Javi Jiménez</h4>
                <span class="margin-left tag bck theme inline text bold">pro</span>
                <a href="#" class="block"><span class="icon twitter"></span> soyjavi</a>
            </div>

            <hr/>
            <div class="margin" data-tuktuk="buttons">
                <button data-tuktuk-modal="modal" class="theme" data-tip="Click to view a modal window">Modal</button>
                <button data-tuktuk-modal="modal-right" data-tip="Click to view a side window" class="">Aside Right</button>
            </div>
            <hr>
            <ul class="margin" data-tuktuk="totals">
                <li><strong>3609</strong><small>followers</small></li>
                <li><strong>138</strong><small>following</small></li>
                <li><strong>14</strong><small>lists</small></li>
            </ul>
            <hr>
            <div class="margin">
                <strong class="text big normal block ">About <a href="#">Orman Clark</a></strong>
                <div class="display block  text justify small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
            </div>
            <nav data-tuktuk="menu" class="text bold">
                <a href="#" class="active"><span class="icon user"></span>Shots<small>(100)</small></a>
                <a href="#"><span class="icon heart"></span>Trending<small>(3)</small></a>
                <a href="#"><span class="icon group"></span>Following<small>(192)</small></a>
                <a href="#"><span class="icon star"></span>Debuts<small>(160)</small></a>
            </nav> -->
        </article>
        <!-- <footer class="bck dark text center">
            Handcrafted by <a href="http://appgetlabs.com" class="display inline">AppgetLabs</a>
        </footer> -->
    </aside>


    <section>
        <header style="background:#ECF0F1;">
            <h3 class="on-left text thin"><!-- <span class="tag bck theme">Powered by</span> --><strong>M</strong>ap-assisted <strong>A</strong>ppropriations <strong>T</strong>racking <strong>A</strong>pp </h3>
            <nav class="on-right">
                <!-- <button class="tiny">tiny</button>
                <button class="small success">small</button>
                <button class="alert">normal</button> -->
            </nav>
        </header>
        <article class="padding" id="map-wrapper">
             <div id="map-canvas"></div>
            <!-- <div class="margin-bottom">
                <h4 class="text book inline"><span class="icon star color theme "></span> Featured</h4>
                <nav class="inline on-right">
                    <a href="#" class="button small"><span class="icon search"></span>Search</a>
                    <a href="#" class="button theme small"><span class="icon envelope"></span>Send</a>
                </nav>
            </div>
            <div class="inline">
                <div class="column_4 thumb bck light">thumb</div>
                <div class="column_4 thumb bck light">thumb</div>
            </div>

            <div class="margin-bottom">
                <h4 class="text book inline"><span class="icon group color theme"></span> Friends</h4>
                <nav class="inline on-right">
                    <a href="#" class="button  small"><span class="icon search"></span>Search</a>
                </nav>
            </div>
            <div class="inline">
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
                <div class="column_2 thumb bck light">thumb</div>
            </div> -->
        </article>

        <footer class="bck light">
            <nav class="on-left text bold" data-tuktuk="menu">
                <a href="#" class="active">Shots<small>(100)</small></a>
                <a href="#">Projects<small>(3)</small></a>
                <a href="#">Likes<small>(192)</small></a>
                <a href="#">Tags<small>(160)</small></a>
            </nav>

            <nav class="on-right">
               <!--  <button class="tiny">tiny</button>
                <button class="small success">small</button>
                <button class="alert">normal</button> -->
            </nav>
        </footer>
    </section>

    <div id="modal" data-tuktuk="modal" class="column_5">
        <header>
            <h4 class="text book inline">Normal window</h4>
            <button data-modal="close" class="transparent small on-right inline icon remove"></button>
        </header>
        <article>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum assumenda aperiam nobis quam earum nihil veritatis modi possimus blanditiis perferendis obcaecati voluptatibus fuga eaque ad et atque nostrum porro expedita!
        </article>
    </div>

    <div id="modal-right" data-tuktuk="modal" class="side column_5">
        <header>
            <h4 class="inline text book">Be a citizen. Contribute</h4>
            <button data-modal="close" class="transparent small on-right inline icon remove"></button>
        </header>
        <article class="form" id="contribute-form">
        <form id="project-form" >
            <label>Picture:</label>
            <input type="file" name="projectpic" class="projectpic" >
            <label>Location:</label>
            <input type="text" class="contrib-loc" value="" placeholder="Location"/>
     
          
            <label>Region:</label>
            <span class="select ">
                <select class="contrib-reg">
                    
                    <option value="NCR">NCR</option>
                    <option value="CAR">CAR</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4A">4A</option>
                    <option value="4B">4B</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="ARMM">ARMM</option>
                </select>
            </span>

            <label>Objects Description</label>
            <span class="select ">
                <select class="contrib-desc">
                    <option value="S7">Public Infrastructure</option>
                    <option value="34">Clothing/Uniform Allowance</option>
                    <option value="5A">Cash Allowance</option>
                    <option value="90">Year End Bonus</option>
                    <option value="n3">Assistance to LGU</option>
                    
                </select>
            </span>
            <button id="searchdata-btn" ><span class="icon search"></span> Search Data</button><br>
            <label>Data Reference</label>
            <article id="data-ref-div" class="scroll" style="height:290px;">
                
               
                

            </article>
            
            </form>
        </article>
        <footer>
            <button id="save-btn" >Save</button>

        </footer>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
    <script src="assets/js/jquery-2.0.0.min.js"></script>
    <script src="assets/js/tuktuk.js"></script>
    <script src="assets/js/Chart.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script>
        TukTuk.Modal.loading();
        setTimeout( TukTuk.Modal.hide, 1000);
    </script>
     
     <script>

        var doughnutData = [
                {
                    value: 5,
                    color:"#F7464A"
                },
                {
                    value : 15,
                    color : "#46BFBD"
                },
                {
                    value : 5,
                    color : "#FDB45C"
                },
                {
                    value : 50,
                    color : "#949FB1"
                },
                {
                    value : 25,
                    color : "#4D5360"
                }
            
            ];

     var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(doughnutData);
     
     </script>

    <script>
    $(document).ready(function(){
        $(window).resize(function() {
            $("#map-canvas").css({
                height : $("#map-wrapper").height()
            });

        });
        
        $("#searchdata-btn").click(function(e){
            e.preventDefault();
            $(".proj").remove();
            $(".no-result").remove();
           var region = $(".contrib-reg").val();
           var objcode = $(".contrib-desc").val();
           // alert(objcode);
            $.ajax({
               url : "http://api.kabantayngbayan.ph/saro?app_id=527b3b8e5e13db235fcc3cc4&region="+region+"&object_code="+objcode+"&limit=1000",
               type: "GET",
               success : function(data){
                 // console.log(data);
                 var len = data.data.length;

                 if (len != 0){
                     $(".no-result").remove();
                     for(var i= 0; i<len; i++){
                     $("#data-ref-div").append('<span class="proj" style="display:block;"><small style="display:block;"><input data-department="'+data.data[i].department_code+'"data-spfcode="'+data.data[i].sub_spf_code+'" data-prog="'+data.data[i].program_description+'" data-purpose="'+data.data[i].purpose+'" data-amount="'+data.data[i].amount+'"  type="radio" name="contrib-ref" class="contrib-ref" /><strong>'+data.data[i].agency_code+''+data.data[i].sub_spf_code+'</strong><strong class="color theme " style="font-size:10px;">'+data.data[i].description+'</strong></small><span style="font-size:12px;"><strong>Desc:</strong> '+data.data[i].program_description+'</span><hr/></span>');
                     
                     }
                }else{
                    $("#data-ref-div").append("<span class='no-result'>No Result</span");
                }
               } 
            });
        });
        $("#save-btn").click(function(){
           var projpic =  $(".projectpic").val().replace(/C:\\fakepath\\/i,'');
           // console.log($("input[type='radio'][name='contrib-ref']:checked").data('amount'));
           var location = $(".contrib-loc").val();
           var lat;
           var lng;
           var region = $(".contrib-reg").val();
           var objcode = $(".contrib-desc").val();
           var dept = $("input[type='radio'][name='contrib-ref']:checked").data('department');
           var spfcode = $("input[type='radio'][name='contrib-ref']:checked").data('spfcode');
           var prog = $("input[type='radio'][name='contrib-ref']:checked").data('prog');
           var purpose = $("input[type='radio'][name='contrib-ref']:checked").data('purpose');
           var amount = $("input[type='radio'][name='contrib-ref']:checked").data('amount');
           // alert(dept);
           $.ajax({
                url : "http://maps.googleapis.com/maps/api/geocode/json?address="+location+"&sensor=true",
                type : "GET",
                async : false,
                success : function(data){
                    
                  lat = data.results[0].geometry.location.lat;
                  lng = data.results[0].geometry.location.lng;
                }
           });

           $.ajax({
            url : "/save/project",
            type: "POST",
            data : {
                location    : location,
                latitude    : lat,
                longitude   : lng,
                region      : region,
                department  : dept,
                spfcode     : spfcode,
                programDesc : prog,
                purpose     : purpose,
                amount      : amount,
                picSrc      : projpic

            },
            success : function(){
                // alert("success");
                
               window.location = "/";
            }
           });

        
                
        
        

          
        });
        
       
    });

</script>
<script>


    var map;

    function initialize() {
      var mapOptions = {
        zoom: 6,
        // center: new google.maps.LatLng(12.404389, 122.594719),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      
      map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
      // Try HTML5 geolocation
      if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = new google.maps.LatLng(position.coords.latitude,
                                           position.coords.longitude);
          $.ajax({
            url : "/map",
            type:"GET",
            dataType:"json",
            success : function(data){
                console.log(data[0].latitude);
                var arrlen =  data.length;
                for (var i = 0; i<arrlen; i++){
                    var points = new google.maps.LatLng (data[i].latitude, data[i].longitude); 
                    var infowindow = new google.maps.InfoWindow({
                      map: map,
                      position: points,
                      content: '<img  style="height:30px; width:30px;" src="assets/images/photos/'+ data[i].pic_Src+'">'
                    });

                }
            }
          });
          
          // var myPoints = [
          //      [14.583583,120.979729, 'assets/images/photos/1.jpg'],
          //      [16.393931,120.606194, 'assets/images/photos/2.jpg'],
          //      [13.421681,123.429680, 'assets/images/photos/3.jpg'],
          //      [12.060809,124.616203, 'assets/images/photos/4.jpg'],
          //      [10.703792,122.583733, ''],
          //      [10.325728,123.891106, ''],
          //      [11.824341,119.936028, ''],
          //      [8.472372,125.330315, ''],
          //      [6.937333,122.078362, '']
          //   ];
          // var myMarkers = [];


          // for (var i in myPoints) {
          //     // myMarkers.push (new google.maps.LatLng (myPoints[i][0], myPoints[i][1]) );
          //     var points = new google.maps.LatLng (myPoints[i][0], myPoints[i][1]); 
          //     var infowindow = new google.maps.InfoWindow({
          //       map: map,
          //       position: points,
          //       content: '<img onmouseover="function jeth(){ alert(\'asd\'); }" style="height:30px; width:30px;" src="'+ myPoints[i][2]+'">'
          //     });
          // }
           
          var center = new google.maps.LatLng(12.404389, 122.594719);
          map.setCenter(center);
          
        }, function() {
          handleNoGeolocation(true);
        });
      } else {
        // Browser doesn't support Geolocation
        handleNoGeolocation(false);
      }
    }

    function handleNoGeolocation(errorFlag) {
      if (errorFlag) {
        var content = 'Error: The Geolocation service failed.';
      } else {
        var content = 'Error: Your browser doesn\'t support geolocation.';
      }

      var options = {
        map: map,
        position: new google.maps.LatLng(60, 105),
        content: content
      };

      var infowindow = new google.maps.InfoWindow(options);
      map.setCenter(options.position);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

        </script>

</body>
</html>
