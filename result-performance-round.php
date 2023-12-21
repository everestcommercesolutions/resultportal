<?php
	
	include('db_connect.php');
	
	$sql1="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=1 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records1=$con->query($sql1);
	
	$sql2="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=2 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records2=$con->query($sql2);
	
	$sql3="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=3 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records3=$con->query($sql3);
	
	$sql4="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=4 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records4=$con->query($sql4);
	
	$sql5="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=5 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records5=$con->query($sql5);
	
	$sql6="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=6 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records6=$con->query($sql6);
	
	$sql7="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=7 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records7=$con->query($sql7);
	
	$sql8="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=8 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records8=$con->query($sql8);
	
	$sql9="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=9 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records9=$con->query($sql9);
	
	$sql10="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=10 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records10=$con->query($sql10);
	
	$sql11="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=11 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
	$records11=$con->query($sql11);
	
	$sql12="SELECT registration.student_class,registration.student_section,registration.student_schoolname,
         tbl_finalresult.student_name,tbl_finalresult.select_status,tbl_finalresult.showresult_status
		 FROM registration,tbl_finalresult
		 WHERE registration.student_ID = tbl_finalresult.stu_id AND 
		 registration.student_class=12 AND tbl_finalresult.maintestid=2 ORDER BY res_ID DESC";
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
	<style>
		
		.rec 
		{
			width: 10px;
			padding: 10px;
			border: 2px solid white;
			margin: 0;
		}
		
		@media screen and (min-width:0\0) 
		{ 
		    .tablinks
		    {
		        background-color:#1b1b1b;
		    }
		}
					
		.loading
		{
            display:none;
        }

        .loading-blink
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
						<h1>Results of Performance Round</h1>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="navbaradd">              
							<button class="tablinks" onclick="performance(event, 'class1')" id="defaultOpen">Class 1</a>
							<button class="tablinks" onclick="performance(event, 'class2')">Class 2</a> 
							<button class="tablinks" onclick="performance(event, 'class3')">Class 3</a>	
							<button class="tablinks" onclick="performance(event, 'class4')">Class 4</a>	
							<button class="tablinks" onclick="performance(event, 'class5')">Class 5</a>	
							<button class="tablinks" onclick="performance(event, 'class6')">Class 6</a>	
							<button class="tablinks" onclick="performance(event, 'class7')">Class 7</a>	
							<button class="tablinks" onclick="performance(event, 'class8')">Class 8</a>	
							<button class="tablinks" onclick="performance(event, 'class9')">Class 9</a>	
							<button class="tablinks" onclick="performance(event, 'class10')">Class 10</a>	
							<button class="tablinks" onclick="performance(event, 'class11')">Class 11</a>	
							<button class="tablinks" onclick="performance(event, 'class12')">Class 12</a>	
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records1->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==1)
													{ 
														$class= "Class 1";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records2->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==2)
													{ 
														$class= "Class 2";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";	
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records3->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==3)
													{ 
														$class= "Class 3";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records4->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==4)
													{ 
														$class= "Class 4";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records5->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==5)
													{ 
														$class= "Class 5";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records6->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==6)
													{ 
														$class= "Class 6";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records7->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==7)
													{ 
														$class= "Class 7";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records8->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==8)
													{ 
														$class= "Class 8";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records9->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==9)
													{ 
														$class= "Class 9";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
											<?php
											
												while($performance=$records10->fetch_assoc())
												{
													$selectstatus = $performance['select_status'];
													
													$showstatus = $performance['showresult_status'];
													
													if($selectstatus==0 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
												    if($selectstatus==1 && $showstatus==0)
													{ 
														$active= "<font class='pending'><b>Result Pending</b></font>";
													}
													
													if($selectstatus==0 && $showstatus==1)
													{ 
														$active= "<font color='red'><b>Not Selected</b></font>";
													}
													
													if($selectstatus==1 && $showstatus==1)
													{ 
														$active= "<font color='green'><b>Selected</b></font>";
													}
													
													$classid = $performance['student_class'];
													
													if($classid==10)
													{ 
														$class= "Class 10";
													}
											
													echo "<tr>";
																						
														echo "<td>".$performance['student_name']."</td>";
									
														echo "<td>".$class."</td>";
													
														echo "<td>".$performance['student_section']."</td>";	
														
														echo "<td>".$performance['student_schoolname']."</td>";
									
														echo "<td>".$active."</td>";
																															
													echo "</tr>";	
			
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    <?php
											
    											while($performance=$records11->fetch_assoc())
    											{
    												$selectstatus = $performance['select_status'];
    												
    												$showstatus = $performance['showresult_status'];
    												
    												if($selectstatus==0 && $showstatus==0)
    												{ 
    													$active= "<font class='pending'><b>Result Pending</b></font>";
    												}
    												
    											    if($selectstatus==1 && $showstatus==0)
    												{ 
    													$active= "<font class='pending'><b>Result Pending</b></font>";
    												}
    												
    												if($selectstatus==0 && $showstatus==1)
    												{ 
    													$active= "<font color='red'><b>Not Selected</b></font>";
    												}
    												
    												if($selectstatus==1 && $showstatus==1)
    												{ 
    													$active= "<font color='green'><b>Selected</b></font>";
    												}
    												
    												$classid = $performance['student_class'];
    												
    												if($classid==11)
    												{ 
    													$class= "Class 11";
    												}
    										
    												echo "<tr>";
    																					
    													echo "<td>".$performance['student_name']."</td>";
    								
    													echo "<td>".$class."</td>";
    												
    													echo "<td>".$performance['student_section']."</td>";
    													
    													echo "<td>".$performance['student_schoolname']."</td>";
    								
    													echo "<td>".$active."</td>";
    																														
    												echo "</tr>";	
    		
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
												<th>Result</th>														
											</tr>
										</thead>
										<tbody>
										    
    										<?php
    											
    											while($performance=$records12->fetch_assoc())
    											{
    												$selectstatus = $performance['select_status'];
    												
    												$showstatus = $performance['showresult_status'];
    												
    												if($selectstatus==0 && $showstatus==0)
    												{ 
    													$active= "<font class='pending'><b>Result Pending</b></font>";
    												}
    												
    											    if($selectstatus==1 && $showstatus==0)
    												{ 
    													$active= "<font class='pending'><b>Result Pending</b></font>";
    												}
    												
    												if($selectstatus==0 && $showstatus==1)
    												{ 
    													$active= "<font color='red'><b>Not Selected</b></font>";
    												}
    												
    												if($selectstatus==1 && $showstatus==1)
    												{ 
    													$active= "<font color='green'><b>Selected</b></font>";
    												}
    												
    												$classid = $performance['student_class'];
    												
    												if($classid==12)
    												{ 
    													$class= "Class 12";
    												}
    										
    												echo "<tr>";
    																					
    													echo "<td>".$performance['student_name']."</td>";
    								
    													echo "<td>".$class."</td>";
    												
    													echo "<td>".$performance['student_section']."</td>";
    													
    													echo "<td>".$performance['student_schoolname']."</td>";
    								
    													echo "<td>".$active."</td>";
    																														
    												echo "</tr>";	
    		
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
		function performance(evt, btype) 
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
            $(document).ready(function() 
            {
                $('#sampleTable1').DataTable({
                        responsive: true
                });
				$('#sampleTable2').DataTable({
                        responsive: true
                });
				$('#sampleTable3').DataTable({
                        responsive: true
                });
				$('#sampleTable4').DataTable({
                        responsive: true
                });
				$('#sampleTable5').DataTable({
                        responsive: true
                });
				$('#sampleTable6').DataTable({
                        responsive: true
                });
				$('#sampleTable7').DataTable({
                        responsive: true
                });
				$('#sampleTable8').DataTable({
                        responsive: true
                });
				$('#sampleTable9').DataTable({
                        responsive: true
                });
				$('#sampleTable10').DataTable({
                        responsive: true
                });
				$('#sampleTable11').DataTable({
                        responsive: true
                });
				$('#sampleTable12').DataTable({
                        responsive: true
                });
            });
        </script>
        
        <style>
        
	        .content-wrapper
	        {
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