<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Opto Servi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pacientes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Paciente","Paciente","getInsert"); ?>">Registrar Paciente</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Paciente","Paciente","consult"); ?>">Consultar Paciente</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
    
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Historias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo getUrl("Ciudad","Ciudad","getInsert"); ?>">Registrar</a></li>
            <li><a class="dropdown-item" href="<?php echo getUrl("Ciudad","Ciudad","consult"); ?>">Consultar</a></li>
            <li><hr class="dropdown-divider"></li>
           
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
