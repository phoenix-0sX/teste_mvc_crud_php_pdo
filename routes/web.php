<?php
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
  case '/':
  case '':
  case '/home':
    require_once home_route;
    break;
  case '/contacts':
  case '/contacts?'.$_SERVER['QUERY_STRING']:
    //instanciate contactController and get the index function.
    $contactController = new ContactController($db);
    $res = $contactController->index();
    $AllContacts = $res["res"];
    $page = $res["page"];
    $records_per_page = $res["records_per_page"];
    $num_contacts = $db->query('SELECT COUNT(*) FROM contacts')->fetchColumn();
    require_once read_route;
    break;
  default:
    http_response_code(404);
    require_once NotFound_route;
    break;
}
