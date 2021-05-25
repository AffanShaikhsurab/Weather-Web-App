<?php 
        $sunny = "https://vod-progressive.akamaized.net/exp=1621270686~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F1049%2F6%2F155246338%2F480767160.mp4~hmac=d4ef0930d324cf27c085091ba464912a6a941778cd93ae66631c7d1c5b48bd64/vimeo-prod-skyfire-std-us/01/1049/6/155246338/480767160.mp4?filename=Cloud+-+2142.mp4";
        $cloudy = "https://vod-progressive.akamaized.net/exp=1621270934~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3336%2F14%2F366684733%2F1513829972.mp4~hmac=fdd269090b8673645c3bee741b12ce107db9b692d9006a6333a1b1e2a1bb49fd/vimeo-prod-skyfire-std-us/01/3336/14/366684733/1513829972.mp4?filename=Clouds+-+27954.mp4";
        $rainy ="https://vod-progressive.akamaized.net/exp=1621270967~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3906%2F10%2F269534741%2F1000324760.mp4~hmac=876ea08811330c08d6f8ae039730394636cc35c01af3a155fd259757fecf3af3/vimeo-prod-skyfire-std-us/01/3906/10/269534741/1000324760.mp4?filename=Storm+-+16160.mp4";
        $night = "https://vod-progressive.akamaized.net/exp=1621271168~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4526%2F7%2F197634410%2F664785004.mp4~hmac=cd94c5417c672962c5b360744b4a2c3d4add454ac14e184a7563e1486dea63ad/vimeo-prod-skyfire-std-us/01/4526/7/197634410/664785004.mp4?filename=Star+-+6962.mp4";

        if(str_contains($result['weather'][0]['description'] , 'clouds')){
            $weather = $cloudy;
        }elseif(str_contains($result['weather'][0]['description'] , 'clear sky')){
            $weather = $sunny;
        }
        elseif(str_contains($result['weather'][0]['description'] , 'rain')){
            $weather = $rainy;
        }
        elseif(str_contains($result['weather'][0]['description'] , 'drizzel')){
            $weather = $rainy;
        }
        elseif(str_contains($result['weather'][0]['description'] , 'thunderstorm')){
            $weather = $rainy;
        }
        else{
            $weather = $cloudy;
        }
        

?>