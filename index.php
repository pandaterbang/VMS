<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Dashboard</h2>
    </div>
  </header>

<!-- Dashboard Header Section    -->
<section class="dashboard-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="bar-chart-example card">
          <div class="card-close">
            <div class="dropdown">
              <button type="button" id="closeCard6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
              <div aria-labelledby="closeCard6" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">This IS HRIS NEW</h3>
          </div>
          <h2>Let's Try New Experience</h2>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="<?php echo base_url().'assets/js/Chart.min.js'?>"></script>

<script type="text/javascript">
$(document).ready(function () {

    'use strict';


    // ------------------------------------------------------- //
    // Charts Gradients
    // ------------------------------------------------------ //
    var ctx1 = $("canvas").get(0).getContext("2d");
    var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
    gradient1.addColorStop(0, 'rgba(133, 180, 242, 0.91)');
    gradient1.addColorStop(1, 'rgba(255, 119, 119, 0.94)');

    var gradient2 = ctx1.createLinearGradient(146.000, 0.000, 154.000, 300.000);
    gradient2.addColorStop(0, 'rgba(104, 179, 112, 0.85)');
    gradient2.addColorStop(1, 'rgba(76, 162, 205, 0.85)');


    // ------------------------------------------------------- //
    // Bar Chart
    // ------------------------------------------------------ //

    var BARCHARTEXMPLE    = $('#barChart');
    var barChartExample = new Chart(BARCHARTEXMPLE, {
        type: 'bar',
        options: {
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: '#eee'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: '#eee'
                    }
                }]
            },
        },
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
            datasets: [
                {
                    label: "Assembly",
                    backgroundColor: [
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    hoverBackgroundColor: [
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    borderColor: [
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1,
                        gradient1
                    ],
                    borderWidth: 1,
                    data: [
                        parseInt(<?php echo $ass->jan?>),
                        parseInt(<?php echo $ass->feb?>),
                        parseInt(<?php echo $ass->mar?>),
                        parseInt(<?php echo $ass->apr?>),
                        parseInt(<?php echo $ass->mei?>),
                        parseInt(<?php echo $ass->jun?>),
                        parseInt(<?php echo $ass->jul?>),
                        parseInt(<?php echo $ass->aug?>),
                        parseInt(<?php echo $ass->sep?>),
                        parseInt(<?php echo $ass->okt?>),
                        parseInt(<?php echo $ass->nov?>),
                        parseInt(<?php echo $ass->des?>)
                    ],
                },
                {
                    label: "Finish Good",
                    backgroundColor: [
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    hoverBackgroundColor: [
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    borderColor: [
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2,
                        gradient2
                    ],
                    borderWidth: 1,
                    data: [
                        parseInt(<?php echo $fg->jan?>),
                        parseInt(<?php echo $fg->feb?>),
                        parseInt(<?php echo $fg->mar?>),
                        parseInt(<?php echo $fg->apr?>),
                        parseInt(<?php echo $fg->mei?>),
                        parseInt(<?php echo $fg->jun?>),
                        parseInt(<?php echo $fg->jul?>),
                        parseInt(<?php echo $fg->aug?>),
                        parseInt(<?php echo $fg->sep?>),
                        parseInt(<?php echo $fg->okt?>),
                        parseInt(<?php echo $fg->nov?>),
                        parseInt(<?php echo $fg->des?>)
                    ],
                }
            ]
        }
    });



});
   

 // ------------------------------------------------------- //
 
    


</script>
 