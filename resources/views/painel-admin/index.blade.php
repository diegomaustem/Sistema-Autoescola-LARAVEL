@extends('template.painel-admin')
@section('title', 'Painel Administrativo')
@section('content')
Home do Admin
<?php 
@session_start();
if(@$_SESSION['nivel_usuario'] != 'admin'){ 
  echo "<script language='javascript'> window.location='./' </script>";
}
if(!isset($id)){
  $id = ""; 
  
}

?>
@endsection