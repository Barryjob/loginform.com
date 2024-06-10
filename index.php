
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "meta.php"?> 
<title>gethostel.com </title>
<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
</head>
<body>

          
<div class="body-div">
    <div class="header-div">
        <div class="inner">

            <div class="logo-dash-pro">
                <div class="logo">
                    <img src="all-images/images/logo2.png" alt="Gethostel Logo">
                </div>

                

            </div>

            <div class="middle-div">

                <ul class="dash-pro">
                    <li class="dash">
                        <a href="#" title="facebook">
                        <i class="bi bi-facebook"></i></a>
                        <p>Dashboard</p>
                    </li>

                    <li class="pro">
                        <a href="#" title="facebook">
                        <i class="bi bi-facebook"></i></a>
                        <p>Profile</p>
                    </li>
                </ul>

                <ul class="icon">
                    <li>
                        <a href="#" title="facebook">
                        <i class="bi bi-facebook"></i></a>
                    </li>

                    <li>
                        <a href="#" title="facebook">
                        <i class="bi bi-facebook"></i></a>
                    </li>
                </ul>

            </div>

            <div class="icon-profile">

                <!-- <div class="profile"> -->
                    <div class="pic">
                        <img src="all-images/images/me.jpg" alt=" profile picture">
                    </div>
                    <div class="txt-div">
                        <h4>John Doe</h4>
                        <p>Superadmin</p>
                    </div>
                <!-- </div> -->
            </div>


        </div>

    </div>

    <div class="first-second">
        <div class="first">
            <ul class="inner">
                <li>
                    <a href="#" title="facebook">
                    <i class="bi bi-facebook"></i></a>
                    <p>Dashboard</p>
                </li>

                <li>
                    <a href="#" title="facebook">
                    <i class="bi bi-facebook"></i></a>
                    <p>Staff</p>
                </li>

                <li>
                    <a href="#" title="facebook">
                    <i class="bi bi-facebook"></i></a>
                    <p>Hostel</p>
                </li>

                <li>
                    <a href="#" title="facebook">
                    <i class="bi bi-facebook"></i></a>
                    <p>FAQ</p>
                </li>

                <li>
                    <a href="#" title="facebook">
                    <i class="bi bi-facebook"></i></a>
                    <p>Blog</p>
                </li>
            </ul>
        </div>
        
        <div class="second">
            <div class="inner">
                <div class="name">
                    <p>Admin Information</p>
                    <h2>Hi, Barry Job</h2>
                </div>
                <div class="booking">
                    <div class="con">
                        <div class="txt-icon">
                            <div class="txt">
                                <h3>827</h3>
                                <p>New Booking</p>
                            </div>

                            <a href="#" title="facebook">
                           <i class="bi bi-facebook"></i></a>

                        </div>
                    </div>

                    <div class="con shedule">
                        <div class="txt-icon">
                            <div class="txt">
                                <h3>827</h3>
                                <p>New Booking</p>
                            </div>

                            <a href="#" title="facebook">
                           <i class="bi bi-facebook"></i></a>
                           
                        </div>
                    </div>

                    <div class="con check-in">
                        <div class="txt-icon">
                            <div class="txt">
                                <h3>827</h3>
                                <p>New Booking</p>
                            </div>

                            <a href="#" title="facebook">
                           <i class="bi bi-facebook"></i></a>
                           
                        </div>
                    </div>

                    <div class="con check-out">
                        <div class="txt-icon">
                            <div class="txt">
                                <h3>827</h3>
                                <p>New Booking</p>
                            </div>

                            <a href="#" title="facebook">
                           <i class="bi bi-facebook"></i></a>
                           
                        </div>
                    </div>

                    
                </div>
                <div class="statistics">
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                
                <script>
window.onload = function () {

var options = {
	animationEnabled: true,
	theme: "#fff",
	title:{
		text: "Monthly Expenses, 2016-17"
	},
	axisY :{
		includeZero: false,
		prefix: "$",
		lineThickness: 0
	},
	toolTip: {
		shared: true
	},
	legend: {
		fontSize: 13
	},
	data: [{
		type: "splineArea",
		showInLegend: true,
		name: "Salaries",
		yValueFormatString: "$#,##0",
		xValueFormatString: "MMM YYYY",
		dataPoints: [
			{ x: new Date(2016, 2), y: 28000 },
			{ x: new Date(2016, 3), y: 31500 },
			{ x: new Date(2016, 4), y: 28500 },
			{ x: new Date(2016, 5), y: 30400 },
			{ x: new Date(2016, 6), y: 26900 },
			{ x: new Date(2016, 7), y: 31400 },
			{ x: new Date(2016, 8), y: 31400 },
			{ x: new Date(2016, 9), y: 31000 },
			{ x: new Date(2016, 10), y: 33000 },
			{ x: new Date(2016, 11), y: 35000 },
			{ x: new Date(2017, 0),  y: 37900 },
			{ x: new Date(2017, 1),  y: 38000 }
		]
 	},
	{
		type: "splineArea", 
		showInLegend: true,
		name: "Office Cost",
		yValueFormatString: "$#,##0",
		dataPoints: [
			{ x: new Date(2016, 2), y: 18100 },
			{ x: new Date(2016, 3), y: 15000 },
			{ x: new Date(2016, 4), y: 14000 },
			{ x: new Date(2016, 5), y: 18500 },
			{ x: new Date(2016, 6), y: 18500 },
			{ x: new Date(2016, 7), y: 21800 },
			{ x: new Date(2016, 8), y: 20000 },
			{ x: new Date(2016, 9), y: 23000 },
			{ x: new Date(2016, 10), y: 22000 },
			{ x: new Date(2016, 11), y: 24000 },
			{ x: new Date(2017, 0), y: 23000 },
			{ x: new Date(2017, 1), y: 20500 }
		]
 	},
	{
		type: "splineArea", 
		showInLegend: true,
		name: "Entertainment",
		yValueFormatString: "$#,##0",     
		dataPoints: [
			{ x: new Date(2016, 2), y: 13100 },
			{ x: new Date(2016, 3), y: 8000 },
			{ x: new Date(2016, 4), y: 5400 },
			{ x: new Date(2016, 5), y: 4000 },
			{ x: new Date(2016, 6), y: 7000 },
			{ x: new Date(2016, 7), y: 7500 },
			{ x: new Date(2016, 8), y: 6200 },
			{ x: new Date(2016, 9), y: 8500 },
			{ x: new Date(2016, 10), y: 11300 },
			{ x: new Date(2016, 11), y: 12500 },
			{ x: new Date(2017, 0), y: 10500 },
			{ x: new Date(2017, 1), y: 9500 }
		]
 	},
	{
		type: "splineArea", 
		showInLegend: true,
		yValueFormatString: "$#,##0",      
		name: "Maintenance",
		dataPoints: [
			{ x: new Date(2016, 2), y: 1900 },
			{ x: new Date(2016, 3), y: 2300 },
			{ x: new Date(2016, 4), y: 1650 },
			{ x: new Date(2016, 5), y: 1860 },
			{ x: new Date(2016, 6), y: 1200 },
			{ x: new Date(2016, 7), y: 1000 },
			{ x: new Date(2016, 8), y: 1200 },
			{ x: new Date(2016, 9), y: 4500 },
			{ x: new Date(2016, 10), y: 1300 },
			{ x: new Date(2016, 11), y: 3700 },
			{ x: new Date(2017, 0), y: 2700 },
			{ x: new Date(2017, 1), y: 2300 }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
                
                </div>
            </div>
        </div>
    </div>
    
</div>

  
</body>
</html>