
<html>
    <?php
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "admin";
        $dbpass = "password";
        $db = "apsystem";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        
    return $conn;
    echo "Connected Successfully";
    }
    

        $dbhost = "localhost";
        $dbuser = "admin";
        $dbpass = "password";
        $db = "apsystem";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    $mysqli -> select_db("id14748631_clouds");
    if(isset($_SESSION[conn])){
        session_start();
    }
    
    ?>

<head>
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
<style>

	 
    .announce_tab { 
        width:418px;
        height:1300px;
        position:absolute;
        zoom:58%;
        left:50px;
        top:-229px;
        
        
    }
    .announcement { 
        width:418px;
        height:453px;
        position:absolute;
        left:0px;
        top:310px;
        
    }
    .announcement2 { 
        width:418px;
        height:453px;
        position:absolute;
        left:0px;
        top:795px;
        
    }
    .bgblack { 
        background-color:rgba(98.00000175833702, 189.00000393390656, 92.00000211596489, 0.5);
        width:418px;
        height:453px;
        position:absolute;
        left:0px;
        top:0px;
        mix-blend-mode: luminosity;
    }
    .a1 { 
        color:rgba(0, 0, 0, 1);
        width:319.6553649902344px;
        height:36px;
        position:absolute;
        left:51.44830322265625px;
        top:38px;
        font-family:Nunito Sans;
        font-weight: bold;
        text-align:left;
        font-size:30px;
        letter-spacing:0;
    }
    .info_box { 
        width:400.58905029296875px;
        height:354.7972106933594px;
        position:absolute;
        left:8.91259765625px;
        top:85.5314712524414px;
    }
    .infobg { 
        background-color:rgba(248.0000004172325, 248.0000004172325, 248.0000004172325, 0.8500000238418579);
        width:400.58905029296875px;
        height:354.7972106933594px;
        position:absolute;
        left:0px;
        top:0px;
        border-color: rgba(217, 194, 137, 0.50);
        border-style: solid;
    }
    .508_26 { 
        border:5px solid rgba(216.75000607967377, 194.34528350830078, 136.7331549525261, 1);
    }
    .what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit { 
        color:rgba(0, 0, 0, 1);
        width:375px;
        height:185px;
        position:absolute;
        left:25.08740234375px;
        top:159.468505859375px;
        text-align:left;
        font-size:22px;
        letter-spacing:0;
        line-height:normal;
    }
    .imageee { 
        background-color:rgba(217.0000022649765, 217.0000022649765, 217.0000022649765, 1);
        width:277px;
        height:135px;
        position:absolute;
        background-image:url(s/imageee.png);
        background-repeat:no-repeat;
        background-size:cover;
        left: 58px;
        top:12px;
    }
    .ellipse { 
        width:364.0453186035156px;
        height:15.919315338134766px;
        position:absolute;
        left:28.987688064575195px;
        top:15px;
        background-image:url(admin/images/ellipseellipse.png);
    }

    .514_28 { 
        border:5px solid rgba(216.75000607967377, 194.34528350830078, 136.7331549525261, 1);
    }
    .imagee { 
        background-color:rgba(217.0000022649765, 217.0000022649765, 217.0000022649765, 1);
        width:277px;
        height:135px;
        position:absolute;
        background-image:url(admin/images/imagee.png);
        background-repeat:no-repeat;
        background-size:cover;
        left: 10px;
        top:5px;
    }
    .vector { 
        width:32px;
        height:26px;
        position:absolute;
        left:32px;
        bottom: 0px;
        transform: rotate(180deg);
        background-image:url(admin/images/Vectorarrow.png);
        
    }

    .vector2 { 
        width:32px;
        height:26px;
        position:absolute;
        left:352px;
        bottom:0px;
        transform: scaleY(-1);
        background-image:url(admin/images/Vectorarrow.png);
        
        
    }


 </style>


<div class=announce_tab>
                                 
            <div class=announcement><div  class="bgblack"></div>
			  <div class=ellipse></div>
                            <?php
                                    $sql2 = "SELECT *, announcements.a_id AS a_id FROM announcements";
                                    $query = $conn->query($sql2);
                                    while($query->fetch_assoc()){ 
                                    ?>
              <span  class="a1">ANNOUNCEMENT # <?php echo $row['announce_no']; ?> </span>
              	
			 	<div class=info_box> 
					<div  class="infobg"></div>
					<div  class="imageee"> <img src="<?php echo (!empty($row['photo']))? '../images/'.$row['photo']:'../images/profile.jpg'; ?>" width="30px" height="30px"> <a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['a_id']; ?>"><span class="fa fa-edit"></span></a> </div>
                        
					<span  class="what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit">
					<label class=""> What: </label>  <?php echo $row['announce_name']; ?> <br>
					<label> When: </label> <?php echo $row['date_start']; ?> - <?php echo $row['date_end']; ?>  <br>
					<label> Where:</label> <?php echo $row['announce_venue']; ?>  <br>
					<label> Who:  </label> <?php echo $row['announce_persons']; ?>  <br>
					<label> Why:  </label> <?php echo $row['announce_details']; ?> 
					</span> 
				</div>
                <?php  }
                  ?>            
			</div> 

			<div class=announcement2><div  class="bgblack"></div>
			  <div class=ellipse></div>
              <span  class="a1">ANNOUNCEMENT #1</span>
              	
			 	<div class=info_box> 
					<div  class="infobg"></div>
					<div  class="imageee"></div>
			 
					<span  class="what__lorem_ipsum_dolor_sit_when__lorem_ipsum_dolor_sit_where__lorem_ipsum_dolor_sit_who__lorem_ipsum_dolor_sit_why__lorem_ipsum_dolor_sit_dolor_sitdolor_sitdolor_sit">
					<label class=""> What: </label>  Lorem ipsum dolor sit <br>
					<label> When: </label> Lorem ipsum dolor sit  <br>
					<label> Where:</label> Lorem ipsum dolor sit  <br>
					<label> Who:  </label> Lorem ipsum dolor sit  <br>
					<label> Why:  </label> Lorem ipsum dolor sit dolor sitdolor sitdolor sit 
					</span> 
				</div>
              
			</div> 
        

              
			<!--arrows--> <div  class="vector"></div> <div  class="vector2"></div>
    </div>

    </body>

    <?php include 'includes/scripts.php'; ?>
<script>

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'admin/announce_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      
      $('#a_id').val(response.a_id);
      $('#announce_no').val(response.announce_no);
      $('#announce_name').val(response.announce_name);
      $('#ate_start').val(response.date_start);
      $('#date_end').val(response.date_end);
      $('#announce_persons').val(response.announce_persons);
      $('#announce_venue').val(response.announce_venue);
      $('#announce_details').val(response.announce_details);

    
    }
  });
}
</script>
</html>