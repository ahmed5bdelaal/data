@extends('layout')
@section('script')
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVgQTrG35l7D_VcU-ofvtY61CDquIEVGA&callback=initMap&libraries=&v=weekly"
        defer
      ></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" >
          google.charts.load('current', {
            'packages':['geochart'],
            // Note: you will need to get a mapsApiKey for your project.
            // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
            'mapsApiKey': 'AIzaSyDVgQTrG35l7D_VcU-ofvtY61CDquIEVGA'
          });
          google.charts.setOnLoadCallback(drawRegionsMap);
         
          function drawRegionsMap() {
            var x =document.getElementById("year").value;
            if(x == null){
              x = 2020
            }
            if(x==2020){
         var data = google.visualization.arrayToDataTable([
            
              ['Country', 'Popularity'],
              ['Germany', 200],
              ['United States', 300],
              ['Brazil', 400],
              ['Canada', 500],
              ['France', 600],
              ['RU', 700],
              ['EG',200],
              ['Italy',2000],
              ['Ecuador' , 2000],
            ]);
            
            }else if(x==2019){
            var data = google.visualization.arrayToDataTable([
            ['Country', 'Popularity'],
            ['Germany', 2],
            ['United States', 3],
            ['Brazil', 4],
            ['Canada', 5],
            ['France', 6],
            ['RU', 7],
            ['EG',2],
            ['Italy',2],
            ['Ecuador' , 2],
          ]);
            }
              var options = {};
    
            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
    
            chart.draw(data, options);
          }
          
         
        </script>
@endsection
@section('content')
<div class="row">
  <div class="col-3 col-s-3 menu">
    
  </div>
  <div class="col-3 col-s-12">
    <h1>Population</h1>
    <div id="regions_div"> </div>
    <input type="number" id="year" value="2020"/> <input type='submit' value='get' onclick="drawRegionsMap();"/>
</div>
<div class="col-6 col-s-9">
   
  </div>
@endsection