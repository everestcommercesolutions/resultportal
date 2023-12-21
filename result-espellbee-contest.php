<?php
	
	include('db_connect.php');
	
	$sql1="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=1 ORDER BY `rank` ASC";
	$records1=$con->query($sql1);
	
	$sql2="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=2 ORDER BY `rank` ASC";
	$records2=$con->query($sql2);
	
	$sql3="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=3 ORDER BY `rank` ASC";
	$records3=$con->query($sql3);
	
	$sql4="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=4 ORDER BY `rank` ASC";
	$records4=$con->query($sql4);
	
	$sql5="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=5 ORDER BY `rank` ASC";
	$records5=$con->query($sql5);
	
	$sql6="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=6 ORDER BY `rank` ASC";
	$records6=$con->query($sql6);
	
	$sql7="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=7 ORDER BY `rank` ASC";
	$records7=$con->query($sql7);
	
	$sql8="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=8 ORDER BY `rank` ASC";
	$records8=$con->query($sql8);
	
	$sql9="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=9 ORDER BY `rank` ASC";
	$records9=$con->query($sql9);
	
	$sql10="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=10 ORDER BY `rank` ASC";
	$records10=$con->query($sql10);
	
	$sql11="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=11 ORDER BY `rank` ASC";
	$records11=$con->query($sql11);
	
	$sql12="SELECT mainespellbeecontest_result.*,
		  registration.student_section,registration.student_schoolname,registration.student_name               	                                       	             
		  FROM mainespellbeecontest_result,registration
		  WHERE registration.student_ID = mainespellbeecontest_result.student_id AND mainespellbeecontest_result.stud_class=12 ORDER BY `rank` ASC";
	$records12=$con->query($sql12);
		
?>

<!DOCTYPE html>
<html lan="en" oncontextmenu="return false;">
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<link rel="icon" type="image/png" sizes="96x96" href="resultdashboardfiles/images/espellbee.png"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CSS-->
		<link rel="stylesheet" type="text/css" href="resultdashboardfiles/css/main.css">
		<link rel="stylesheet" type="text/css" href="resultdashboardfiles/css/result-footer.css">
		<!-- Font-awesome -->
		<link href="resultdashboardfiles/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<!-- Font-icon css-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>eSpellBee</title>
		
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window,document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			 fbq('init', '526480108455874'); 
			fbq('track', 'PageView');
		</script>
		
		<noscript>
			<img height="1" width="1" src="https://www.facebook.com/tr?id=526480108455874&ev=PageView&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
		
	</head>
	<style type="text/css">
        @supports (-moz-appearance:none) 
		{
			:root
			{
				scrollbar-color: #f9a821  #ccd1d1 !important;
				scrollbar-width: thin !important;
			}
		}
    </style>
	<style type "text/css">
        
        .header__link1 a, .header__link2 a 
        {
            color: #2e2e2e;
            position: relative;
            display: inline-block;
            padding: 30px 0;
            height: 80px;
            font-weight: 800;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 13px;
        }
        
    	@media screen and (min-width:0\0) 
    	{ 
    	    .tablinks
    	    {
    		    background-color:#1b1b1b;
    	    }
    	}
	
        .loading-blink
        {
            display:none;
        }

        .fixed .header 
        {
            top: 0;
            position: fixed;
            transition: top 250ms ease-out;
        }
        
        .fixed .header__logo 
        {
            background: 0 0;
            height: 100px;
            top: 19px;
        }

        .alg 
        {
            margin-right: 50px;
            display: block;
        }
        
        /* @group Blink */
        .blink 
        {
        	-webkit-animation: blink .75s linear infinite;
        	-moz-animation: blink .75s linear infinite;
        	-ms-animation: blink .75s linear infinite;
        	-o-animation: blink .75s linear infinite;
        	 animation: blink .75s linear infinite;
        }

        @-webkit-keyframes blink 
        {
	        0% { opacity: 1; }
	        50% { opacity: 1; }
	        50.01% { opacity: 0; }
	        100% { opacity: 0; }
        }
        
        @-moz-keyframes blink 
        {
	        0% { opacity: 1; }
	        50% { opacity: 1; }
	        50.01% { opacity: 0; }
	        100% { opacity: 0; }
        }

        @-ms-keyframes blink 
        {
	        0% { opacity: 1; }
	        50% { opacity: 1; }
	        50.01% { opacity: 0; }
	        100% { opacity: 0; }
        }
        
        @-o-keyframes blink 
        {
	        0% { opacity: 1; }
	        50% { opacity: 1; }
	        50.01% { opacity: 0; }
	        100% { opacity: 0; }
        }
        
        @keyframes blink 
        {
	        0% { opacity: 1; }
	        50% { opacity: 1; }
	        50.01% { opacity: 0; }
	        100% { opacity: 0; }
        }
        
        /* @end */
        a:-webkit-any-link 
        {
            cursor: pointer;
            text-decoration: none;
        }
        
        .page-title h1 
        {
            margin: 0;
            font-size: 24px;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            /* font-size: 13px; */
            text-align: center;
        }
    </style>
    
	<style>
		
		.rec 
		{
			width: 10px;
			padding: 10px;
			border: 2px solid white;
			margin: 0;
		}
			
		.loading
		{
            display:none;
        }
		
		.navbaradd
		{
			margin-bottom: 0px;
			background-color: #1B1B1B;
			padding-left: 0.2%;
			border: 0;
			min-height: 49px;
		}

		.tablinks 
		{
			background-color: inherit;
			color: #ffffff;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
			font-size: 13px;
			margin-top: 3px;
		}

		.tablinks.active 
		{
			margin-top: 3px;
			background-color: white;
			color: black;
		}

		.irevenue 
		{
			border: none;
			width: 300%;
			height: 400px;
		}
		
		.pending 
		{
			color:#FD6A02;
		}
		
		.page-title h1 
		{
            margin: 0;
            font-size: 24px;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            text-transform: uppercase;
            /* font-size: 13px; */
            margin-top: 39px!important;
            text-align: center;
        }
        
	</style>
	
	<style type="text/css">
	
        @media (max-width: 700px) and (min-width: 200px)
        {
            .loading 
            {
                display: block!important;
                height: 140px;
                margin-top: 50%;
            }
			
			html
			{
                overflow-y: hidden!important;
            }
     
            .loading-blink
            {
                display:block!important;
            }
            
            .fixed .header
            {
                display:none!important;
            }
            
            #canvas
            {
                background-image:url(images/mob-result.jpg)!important;
                background-size: 100% 100%!important;
				position: absolute;
				width: 100%;
				height: 100%;
				z-index: -1;
            }
            
            .wrapper
            {
                display:none;
            }
      	
      	    .blink
      	    {
            	width: 304px;
                height: 50px;
                background-color: #f9a821;
                font-weight: bold;
                border: 1px solid #2e2e2e;
                padding: 15px;
                text-align: center;
                line-height: 19px;
                animation: blink 1s linear infinite!important;
                font-family: Rajdhani,sans-serif;
	        }
	
	        span
	        {
        		font-size: 25px;
        		font-family: cursive;
        		color: #2e2e2e;
		        font-family: Rajdhani,sans-serif;
	        }
	        
            @keyframes blink
            {
                0%{opacity: 0;}
                50%{opacity: .5;}
                100%{opacity: 1;}
            }
        }
        
    </style>
    
    <style type="text/css">
    
        @media (max-width: 1100px) and (min-width: 700px)
        {
         
            .loading 
            {
                display: block!important;
                height: 140px;
                margin-top: 30%;
            }
     
            .loading-blink
            {
                display:block!important;
            }

            .fixed .header
            {
                display:none!important;
            }
            
            #canvas
            {
                background-image:url(images/mob-result.jpg)!important;
                background-size: 100% 100%!important;
				position: absolute;
				width: 100%;
				height: 100%;
				z-index: -1;
            }
            
            .wrapper
            {
                display:none;
            }
            
      	    .blink
      	    {
            	width: 304px;
                height: 50px;
                background-color: #f9a821;
                font-weight: bold;
                border: 1px solid #2e2e2e;
                padding: 15px;
                text-align: center;
                line-height: 19px;
                animation: blink 1s linear infinite!important;
                font-family: Rajdhani,sans-serif;
	        }
	
	        span
	        {
		        font-size: 25px;
		        font-family: cursive;
		        color: #2e2e2e;
		        font-family: Rajdhani,sans-serif;
	        }
	        
            @keyframes blink
            {
                0%{opacity: 0;}
                50%{opacity: .5;}
                100%{opacity: 1;}
            }
        }
        
    </style>
    
    <?php include('topbar-sidebar.php'); ?>
		
	<body id="canvas" class="sidebar-mini fixed" style="background: url(images/result.jpg) no-repeat top center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover; background-color: #fff9c7;">
	    	<center><img src="images/loading.gif" class="loading" draggable="false"><div class="blink loading-blink"><span>VISIBLE IN DESKTOP VIEW</span></div></center>
		<div class="wrapper">    
			<div class="content-wrapper">
			    
				<div class="page-title">
					<div class="container">
						<h1>Results of <span style="text-transform:none;">eSpellBee</span> Contest</h1>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="navbaradd">              
							<button class="tablinks" onclick="contest(event, 'class1')" id="defaultOpen">Class 1</a>
							<button class="tablinks" onclick="contest(event, 'class2')">Class 2</a> 
							<button class="tablinks" onclick="contest(event, 'class3')">Class 3</a>	
							<button class="tablinks" onclick="contest(event, 'class4')">Class 4</a>	
							<button class="tablinks" onclick="contest(event, 'class5')">Class 5</a>	
							<button class="tablinks" onclick="contest(event, 'class6')">Class 6</a>	
							<button class="tablinks" onclick="contest(event, 'class7')">Class 7</a>	
							<button class="tablinks" onclick="contest(event, 'class8')">Class 8</a>	
							<button class="tablinks" onclick="contest(event, 'class9')">Class 9</a>	
							<button class="tablinks" onclick="contest(event, 'class10')">Class 10</a>	
							<button class="tablinks" onclick="contest(event, 'class11')">Class 11</a>	
							<button class="tablinks" onclick="contest(event, 'class12')">Class 12</a>	
						</div>
						<div class="card">
							<div class="card-body">
							
								<div class="content" id="class1">
									<table class="table table-hover table-bordered" id="sampleTable1">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
											
											<?php
											
												while($contest=$records1->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class2">
									<table class="table table-hover table-bordered" id="sampleTable2">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($contest=$records2->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class3">
									<table class="table table-hover table-bordered" id="sampleTable3">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($contest=$records3->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class4">
									<table class="table table-hover table-bordered" id="sampleTable4">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
											
											<?php
											
												while($contest=$records4->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class5">
									<table class="table table-hover table-bordered" id="sampleTable5">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
											
											<?php
											
												while($contest=$records5->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class6">
									<table class="table table-hover table-bordered" id="sampleTable6">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($contest=$records6->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class7">
									<table class="table table-hover table-bordered" id="sampleTable7">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($contest=$records7->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>			
										</tbody>
									</table>
								</div>
								
								<div class="content" id="class8">
									<table class="table table-hover table-bordered" id="sampleTable8">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($contest=$records8->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class9">
									<table class="table table-hover table-bordered" id="sampleTable9">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($contest=$records9->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>	
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class10">
									<table class="table table-hover table-bordered" id="sampleTable10">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($contest=$records10->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
								
											?>
											
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class11">
									<table class="table table-hover table-bordered" id="sampleTable11">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
    										<?php
    											
    											while($contest=$records11->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
    							
    										?>
    										
										</tbody>
									</table>
								</div>
								
								
								<div class="content" id="class12">
									<table class="table table-hover table-bordered" id="sampleTable12">
										<thead>
											<tr>
												<th>Student Name</th>
												<th>Class</th>
												<th>Section</th>
												<th>School</th>
												<th>Rank</th>														
											</tr>
										</thead>
										<tbody>
										    
    										<?php
    											
    											while($contest=$records12->fetch_assoc())
												{
																						
													$classid = $contest['stud_class'];
													
													$showstatus = $contest['showresult_status'];
													
													$ranks =$contest['rank'];
													
													
													if($showstatus==1)
													{
													
														if($classid==1)
														{ 
															$class= "Class 1";
														}
														if($classid==2)
														{ 
															$class= "Class 2";
														}
														if($classid==3)
														{ 
															$class= "Class 3";
														}
														if($classid==4)
														{ 
															$class= "Class 4";
														}
														if($classid==5)
														{ 
															$class= "Class 5";
														}
														if($classid==6)
														{ 
															$class= "Class 6";
														}
														if($classid==7)
														{ 
															$class= "Class 7";
														}
														if($classid==8)
														{ 
															$class= "Class 8";
														}
														if($classid==9)
														{ 
															$class= "Class 9";
														}
														if($classid==10)
														{ 
															$class= "Class 10";
														}
														if($classid==11)
														{ 
															$class= "Class 11";
														}
														if($classid==12)
														{ 
															$class= "Class 12";
														}
											
														echo "<tr>";
														
															echo "<td>".$contest['student_name']."</td>";
						
															echo "<td>".$class."</td>";
								
															echo "<td>".$contest['student_section']."</td>";
									
															echo "<td>".$contest['student_schoolname']."</td>";
									
															?>
																				
																<td align="center"><font size="3" color="blue"><b> <?php echo $ranks ?> </b></font></td>
																
															<?php
																															
														echo "</tr>";
													
													}
						
												}//end while
    							
    										?>
    										
										</tbody>
									</table>
								</div>
								
								
							</div>  
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer id="footer">
			<div class="container1">
				<div class="" style="background:#2e2e2e;">
					<div class="footer-bottom">
						<div class="col-lg-12">
							<p class="mbr-text mbr-fonts-style display-7 alg1" style="color: #fff;font-family: Open Sans, sans-serif;text-align:center;"> © Copyright
								<script>
									document.write(new Date().getFullYear())
								</script> eSpellBee - All Rights Reserved. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<!-- Javascripts-->
		<script src="resultdashboardfiles/js/jquery-2.1.4.min.js"></script>
		<script src="resultdashboardfiles/js/bootstrap.min.js"></script>
		<script src="resultdashboardfiles/js/plugins/pace.min.js"></script>
		<script src="resultdashboardfiles/js/main.js"></script>
		<script type="text/javascript" src="resultdashboardfiles/js/plugins/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="resultdashboardfiles/js/plugins/dataTables.bootstrap.min.js"></script>
		<script>
		function contest(evt, btype) 
		{
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("content");
			for (i = 0; i < tabcontent.length; i++) 
			{
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) 
			{
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(btype).style.display = "block";
			evt.currentTarget.className += " active";
		}	

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
		</script>
		<script>
        $(function()
        {
            $('#sampleTable1').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable2').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable3').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable4').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable5').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable6').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
			
			$('#sampleTable7').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable8').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable9').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable10').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable11').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })
            
            $('#sampleTable12').DataTable({
            //  'paging'      : true,
            //  'lengthChange': false,
              'searching'   : true,
              'ordering'    : false,
              'info'        : true,
              'autoWidth'   : false
            })	
        })
        </script>
        
        <style>
        
	        .content-wrapper
	        {
	            margin-left: 0;
	            background: url(images/bg-pg.png);
            }
            
            .page-title 
            {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row;
                background: none;
                margin-top: -30px;
                margin-left: -30px;
                margin-right: -30px;
                margin-bottom: -20px;
                padding: 20px 30px;
                -webkit-box-shadow: none;
                box-shadow: none;
            }
            
		    .rec 
    		{
    			width: 10px;
    			padding: 10px;
    			border: 2px solid white;
    			margin: 0;
    		}
		
    		.fixed .content-wrapper 
    		{
                margin-top: 77px;
            }
		
    		.navbaradd
    		{
    			margin-bottom: 0px;
    			background-color: #1B1B1B;
    			padding-left: 0.2%;
    			border: 0;
    			min-height: 49px;
    		}

    		.tablinks 
    		{
    			background-color: inherit;
    			color: #ffffff;
    			float: left;
    			border: none;
    			outline: none;
    			cursor: pointer;
    			padding: 14px 16px;
    			transition: 0.3s;
    			font-size: 13px;
    			margin-top: 3px;
    		}

    		.tablinks.active 
    		{
    			margin-top: 3px;
    			background-color: white;
    			color: black;
    		}

    		.irevenue 
    		{
    			border: none;
    			width: 300%;
    			height: 400px;
    		}
			
    		/* width */
            ::-webkit-scrollbar 
            {
                 width: 10px;
            }

            /* Track */
            ::-webkit-scrollbar-track
            {
				box-shadow: inset 0 0 5px grey; 
				border-radius: 10px;
			}
 
			/* Handle */
			::-webkit-scrollbar-thumb 
			{
				background: red; 
				border-radius: 10px;
				background: #f9a821; 
			}

			/* Handle on hover */
			::-webkit-scrollbar-thumb:hover 
			{
				background: #ccc; 
			}
            	
	    </style>
	    
	</body>
	
</html>