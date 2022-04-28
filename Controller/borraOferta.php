<?php
  require_once '../Model/Oferta.php';
  $ofertaAux = new Oferta($_GET['id'], "nada", "nada","nada");
  $ofertaAux->delete();
  header("Location: index.php");
