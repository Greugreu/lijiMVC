<h1 style="text-align: center;font-size:33px;margin-top: 100px;">
    <?= $message; ?>
</h1>

<div class="banner">
    <img src="asset/img/banner.jpg" height="300px" width="600px" alt="" class="banner-img">
</div>
<div class="search">
    <p>Que pouvons nous pour vous</p>
    <p>J'ai besoin d'une garde</p>
    <div class="geo-search">
        <input type="text" placeholder="Destination"/>
        <input type="submit" name="loc" value="Go">
    </div>
    <a href="#"><i class="fa fa-dot-circle-o"></i></a>
    <p>Je propose de garder</p>
    <button class="btn-primary">+ d'infos</button>
</div>
<p>Des professionnels près de chez vous</p>
<div id='map' style='width: 400px; height: 300px;'></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JldWdyZXUiLCJhIjoiY2s4Zm92bWNyMDJqODNlbXB5OTN1dHZ3MCJ9.kW-zI5MDfeGM1Bffs1JuiA';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>
