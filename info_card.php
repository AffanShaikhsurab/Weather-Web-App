<html>
<body>

<div id="content">
            <div id="up">
                    <div id="menu-card">
                        <h4>Weather</h4>
                        <h4>Alert</h4>
                        <h4>Satellite</h4>
                        <h4>News</h4>
                        <h4>Map</h4>
        </div>
                  <h2> Today</h2>
                    <div id="card">
                            <div id="temp">
                                    <h2 id="degree"><?php echo round($result['main']['temp'] - 273 ).'°' ?></h2>
                                <div id="image">
                                <h4 id="weather"> <?php echo $result['weather'][0]['main'] ?></h4> 
                                <img src="http://openweathermap.org/img/w/<?php echo $result['weather'][0]['icon']?>.png"  >
                                </div>
                                <h5>   <?php echo date('d M Y',$result['dt']) ?></h5>
                                
                            </div>
                            <div id="line">
                            
                            </div>
                            <div id="info">
                                    <h5 id="margin_info">Feels Like: <?php echo round($result['main']['feels_like'] - 273.15)?></h5>
                                    <h5>Humidity: <?php echo $result['main']['humidity'] ?></h5>
                                    <h5>Wind :  <?php echo $result['wind']['speed'] ?>></h5>
                                    <h5>Cloud:  <?php echo $result['clouds']['all'] ?></h5>
                                    <h5>Visibility:  <?php echo $result['visibility']/100?></h5>
                            </div>
                    </div>
            </div>
            
            <div id="down">
                   <h3> Daily</h3>
                   <div id="card" class="main-gallery js-flickity"  data-flickity-options='{ "freeScroll": true }'>
                   <?php 
                   $dt =  date('d',$result1['list'][0]['dt']);
                   $list = $result1['list'];
                   $count = count($list);
                       for ($i=0;$i<$count;$i++)
                       {
                           
                           if (date('d',$result1['list'][$i]['dt'])==$dt+1)
                               {
                                   $temp1 = round($result1['list'][$i]['main']['temp']- 273.15);
                                   $weather1= $result1['list'][$i]['weather'][0]['main'];
                                   $date1= date('D j ,F Y ',$result1['list'][$i]['dt']);
                                   $img1=  $result1['list'][$i]['weather'][0]['icon'];

                                   
                               }
                               if (date('d',$result1['list'][$i]['dt'])==$dt+2)
                               {
                                $temp2 = round($result1['list'][$i]['main']['temp']- 273.15);
                                $weather2= $result1['list'][$i]['weather'][0]['main'];
                                $date2= date('D j ,F Y ',$result1['list'][$i]['dt']);
                                $img2 =  $result1['list'][$i]['weather'][0]['icon'];
                                   
                               }
                               if (date('d',$result1['list'][$i]['dt'])==$dt+3)
                               {
                                $temp3 = round ($result1['list'][$i]['main']['temp'] - 273.15 );
                                $weather3= $result1['list'][$i]['weather'][0]['main'];
                                $date3= date('D j ,F Y ',$result1['list'][$i]['dt']);
                                $img3=  $result1['list'][$i]['weather'][0]['icon'];
                                   break;

                               }
                       }
                   
                   ?>
                        
                        <div class="downcard" class="gallery-cell">
                            <h3><?php echo $temp1.'°'?></h3>
                            <div class = "image" >
                            <h4><?php echo $weather1 ?></h4>  <img src="http://openweathermap.org/img/w/<?php echo $img1 ?>.png"  >
                            </div>
                            <h5><?php echo $date1 ?></h5>
                        </div>
                        <div class="downcard" class="gallery-cell">
                        <h3><?php echo $temp2.'°'?></h3>
                            <div class= "image">
                            <h4><?php echo $weather2 ?></h4>
                            <img src="http://openweathermap.org/img/w/<?php echo $img2 ?>.png"  >
                            </div>
                            <h5><?php echo $date2 ?></h5>
                        </div>
                        <div class="downcard" class="gallery-cell">
                        <h3><?php echo $temp3.'°'?></h3>
                        <div class= "image">
                            <h4><?php echo $weather3 ?></h4>
                            <img src="http://openweathermap.org/img/w/<?php echo $img3 ?>.png"  >
                            </div>
                            <h5><?php echo $date3 ?></h5>
                        </div>

                    </div>

            </div>
        
        </div>
        </div>
</body>
</html>