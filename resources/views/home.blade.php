@extends('layouts.app')

@section('content')
<app-root></app-root>
<div class="container">
     <app-root></app-root>
     <div class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard</div>

            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Clientes</div>

            <div class="panel-body">
                <passport-clients></passport-clients>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Clientes autorizados</div>

            <div class="panel-body">
                <passport-authorized-clients></passport-authorized-clients>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Token de acesso</div>

            <div class="panel-body">
                <passport-personal-access-tokens></passport-personal-access-tokens>
            </div>
        </div>
    </div>
</div>
</div>
<?php 
//$i = $loop->index; 
$data = date_create();
echo date_format($data, 'd/m/Y') . ' data atual';
$data7 = $data;
echo '<br>';
$i = new DateInterval('P7D');
date_add($data7, $i);
echo date_format($data7, 'd/m/Y'). ' data incrementada em 7 dias';
$data15 = date_create();
echo '<br>';
$i15 = new DateInterval('P15D');
date_add($data15, $i15);
echo date_format($data15, 'd/m/Y'). ' data incrementada em 15 dias';

$datax = date_create();
$dias = 30;
echo '<br>';
$ix = new DateInterval('P'.$dias.'D');
date_add($datax, $ix);
echo date_format($datax, 'd/m/Y'). ' data incrementada em '.$dias.' dias';
?>
@endsection
