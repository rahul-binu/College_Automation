<!DOCTYPE html>
<html>

<?php
include("student_view.php");
// include("cdn.php");
?>
<link rel="stylesheet" href="<?= base_url() ?>public\homestyle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<style>
    .container {
        display: flex;
    }

    .con {
        margin-top: 100px;
        width: 35vw;
        height: 80vh;
        background-color: rgb(45, 57, 70);
        box-shadow: 2px 2px 10px rgb(29, 37, 45);
        display: grid;
        justify-content: center;
        padding: 20px; /* Added padding to create space at the top */
    }

    .head {
        width: 435px;
        height: 50px;
        padding: 10px;
    }

    .head h5 {
        color: #D2E3C8;
        margin-left: 30px;
    }

    .content {
        display: grid;
        justify-content: center;
        position: relative;
        overflow-y: scroll;
        
    }

    .notifi {
        width: 350px;
        height: 50px;
        background-color: rgb(159, 168, 178);
        border-radius: 3px;
        margin-bottom: 20px; 
        display: flex;
        align-items: center;
        justify-content: space-between;
       
    }
    .notifi p{
        font-weight: bold;
        margin-left: 8px;
        margin-top: 10px;
    }
    .tm{
        height: 40px;
        width: 50px;
      
       margin-right: 7px;
       border-radius: 5px;
    }
</style>

<body>
    <div class="container">
        <div style="width: 80%; margin: auto;">
            <canvas id="myChart" style="max-width: 600px; margin-top: 200px;"></canvas>
        </div>

        <div class="con">
            <div class="head">
                <h5>Notifications</h5>
            </div>
            <div class="content">
                <div class="notifi">
                    <p>ajay you have 3 fee dues</p>
                    <div class="tm">
                        <h6>5h</h6>
                    </div>
                </div>
                <div class="notifi">
                    <p>Tomorrow is first internal</p>
                    <div class="tm">
                        <h6>15h</h6>
                    </div>
                </div>  <div class="notifi">
                    <p>Last day for 5th sem exam fee is 18/01/2024</p>
                    <div class="tm">
                        <h6>27h</h6>
                    </div>
                </div>  <div class="notifi">
                    <p>Tomorrow will be a speech by principal</p>
                    <div class="tm">
                        <h6>1h</h6>
                    </div>
                </div>  <div class="notifi">
                    <p>Meeting for representative is starts 10 am 24th</p>
                    <div class="tm">
                        <h6>7h</h6>
                    </div>
                </div>  <div class="notifi">
                    <p>please notify who will participate in sports</p>
                    <div class="tm">
                        <h6>5h</h6>
                    </div>
                </div>  <div class="notifi">
                    <p>Please fill your academic details</p>
                    <div class="tm">
                        <h6>14h</h6>
                    </div>
                </div>  <div class="notifi">
                    <p>Your lab exam registration will start on 08/02/2024</p>
                    <div class="tm">
                        <h6>5h</h6>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <script>
        const xValues = ["month 1", "month 2", "month 3", "month 4", "month 5"];
        // Replace these values with your new y-values ranging from 0 to 100

        const month1 = 70;
        const month2 = 95;
        const month3 = 75;
        const month4 = 64;
        const month5 = 60;

        const yValues = [month1, month2, month3, month4, month5];

        const barColors = yValues.map(value => {
            if (value >= 85) {
                return "green";
            } else if (value >= 75) {
                return "yellow";
            } else if (value >= 65) {
                return "orange";
            } else if (value <= 64) {
                return "red";
            } else {
                return "red";
            }
        });

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "5th sem attendance"
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
    </script>
</body>

</html>
