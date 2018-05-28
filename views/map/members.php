<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MapSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maps of Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<input type="hidden" value='<?= $location ?>' id="location">
<div class="pdf-dealer container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Username</td>
                <th>User ID</td>
                <th>Lat</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= Yii::$app->user->identity->username ?></td>
                <td><?= Yii::$app->user->identity->id ?></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>


<style>
  /* Always set the map height explicitly to define the size of the div
   * element that contains the map. */
  #map {
    height: 100%;
  } 
  /* Optional: Makes the sample page fill the window. */
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>

<div id="map" style="width:500px;height:500px;"></div>
  <script>
    var map;
    function initMap() {
         var str_location = document.getElementById('location').value;
         var arr_location = str_location!=='' ? JSON.parse(str_location): [];
         map = new google.maps.Map(document.getElementById('map'), {
           center: {lat: -27.4954258, lng: 153.0098414},
           zoom: 4
         });

         for (var i=0; i<arr_location.length; i++)
         {
              var location = arr_location[i];
              //console.log({lat: parseFloat(location.lat), lng: parseFloat(location.lng)});
             var marker = new google.maps.Marker({
                 position: {lat: parseFloat(location.lat), lng: parseFloat(location.lng)},
                 map: map,
                 title: 'Hello World!'
             });  
         }
    }
  </script>
     
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHxf6ELukFVk-CCXMUSeA1A7xCV64qm4k&callback=initMap" async defer>
  </script>

<?php




