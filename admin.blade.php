@extends('master')
@section('content')

       <div id="page-content">
            
        <input type="hidden" id="data" value='<?php  echo json_encode($dulieu); ?>'></input>
        <div class="row">
            <div id="myfirstchart" style="height: 250px;"></div>
        </div>
         <div class="row">
            <div id="graph"></div>
          </div>   
        </div>
     <script type="text/javascript">
            $( document ).ready(function() {
                var jsontext = '{"Ho": "Hoang", "Ten": "Thanh", "Phone": ["0913690366", "016821034**"]}'
                var contact = JSON.parse(jsontext);
                console.log(contact.Ten  + ", " + contact.Ho)
                load_dulieu();

            });
          function load_dulieu() {
             var json_line_chart_data = '<?php echo json_encode($dulieu); ?>';
               var data = JSON.parse(json_line_chart_data)  

             Morris.Line({
          // ID of the element in which to draw the chart.
          element: 'myfirstchart',
          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.
         
          data: data,
          // The name of the data record attribute that contains x-values.
          xkey: 'year',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['value'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['Giá trị']
        });
          }
         var char_2 = '<?php echo json_encode($dulieu2); ?>';
          var data2 = JSON.parse(char_2)
         Morris.Donut({
        element: 'graph',
        data: data2,
         labels: ['label'],
        colors: [
            'green',
            'red',
            'yellow'
        ],
        resize:false
    });
     
     </script>      
@endsection