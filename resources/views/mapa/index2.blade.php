<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script> 
    <style> 
    body {
        padding: 0;
        margin: 0;
    }
    html, body, #map {
        height: 100%;
    }
    </style>
    <title>Mapa de buses RTP</title>
</head>
<body class="bg-dark">
  
    <div class="card bg-dark text-light">
      <nav class="navbar navbar-expand-lg navbar-light bg-">
        <div class="container-fluid">
            <div class="dropdown">
              <button class="btn btn-outline-success dropdown-toggle  " type="button" data-toggle="dropdown" style="width: 10rem">Menú
            </button>
              <ul class="dropdown-menu dropdown-menu-right bg-dark text-light" >
                <button class="dropdownitem btn btn-dark text-light" style="width: 10rem" id="registros">Registros</button>
                <button class="dropdownitem btn btn-dark text-light" style="width: 10rem" id="reportes">Reportes</button>
                <button class="dropdownitem btn btn-dark text-light" style="width: 10rem" id= "mapa">Mapa</button>
              </ul>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="bus">
                <button class="btn btn-outline-success" type="submit" id="btn_bus">Buscar</button>
            </form>
        </div>
      </nav>
    </div>
</div>
  <div id="map" tabindex="0"> 
</div>

<div style="display: none;" class="card bg-light mt-2 text-dark" id="tabla" >
  <div class="card">
    <div class="card-header">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 18rem;">
        <button class="btn btn-success my-2">Buscar</button>
      </form>
  </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col"><button class="btn btn-outline-success">id</button></th>
          <th scope="col"><button class="btn btn-outline-success">Economico</button></th>
          <th scope="col"><button class="btn btn-outline-success">latitud</button></th>
          <th scope="col"><button class="btn btn-outline-success">longitud</button></th>
          <th scope="col"><button class="btn btn-outline-success">velocidad</button></th>
          <th scope="col"><button class="btn btn-outline-success">Validador</button></th>
          <th scope="col"><button class="btn btn-outline-success">fecha</button></th>
          <th scope="col"><button class="btn btn-outline-success">cap</button></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Prueba</td>
          <td>Prueba</td>
          <td>@Prueba</td>
          <td>@Prueba</td>
          <td>@Prueba</td>
          <td>@Prueba</td>
          <td>@Prueba</td>
        </tr>
        
      </tbody>
    </table>
  </div>
</div>
</div>
  <div id="map_search" tabindex="0"> 
</div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/map2.js') }}"></script>
</html>