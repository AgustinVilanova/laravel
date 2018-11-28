<?php
echo "<ul>";
foreach ($listado as $key => $value) {
  echo "<li>{$value}</li>";
}
echo "</ul>";

 ?>

 <ul>
   @foreach($listado as $key=>$value)
     <li>{{$value}}</li>
   @endforeach
 </ul>
