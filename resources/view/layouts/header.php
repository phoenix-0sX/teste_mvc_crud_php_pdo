<?php
function template_header($title, $css)
{
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
    <style type="text/css">$css</style>
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><h6>CONTACT LISTS SITES</h6></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a aria-current="page" class="nav-link active" href="/home"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts"><i class="fas fa-address-book"></i>Contacts</a>
            </li>
          <form class="d-flex">
            <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-sm btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
EOT;
}
