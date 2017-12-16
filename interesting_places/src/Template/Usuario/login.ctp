<?php

$this->layout = false;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Interesting Places
        
    </title>

    <link rel="icon" type="imagem/png" href="https://i.imgur.com/EXJDWGd.png" />

    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->css('../lib/css/bootstrap/bootstrap.min.css') ?>
    
    <?= $this->Html->css('sb-admin-2.css') ?>
    <?= $this->Html->css('estilo.css') ?>
 <style type="text/css">

    .login{background:#e4f1fa url(https://i.imgur.com/rL4rEVj.png) no-repeat center top !important;
-webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
  background-size: cover !important; }
  .panel-title{text-align: center;}

  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body class="login">
<br><br><br>
  <div align="center" style="padding-right: 0px;">
    <?php echo $this->Html->image('logo.png', array('width' => '280px')) ?>
  </div>
<br><br>

  <div align="center" style="padding-top: 60px;">

    <div align="right" style="width: 250px; height: 120px; background: #fff; padding:30px; padding-bottom:0px; border: 1px solid #999999; -moz-border-radius: 5px; -webkit-border-radius: 5px; padding-top: 40px; opacity: 0.7;">
    
      <?= $this->Form->create() ?>
      <?php 
        echo "<center>"; 
      ?>

      <?= $this->Form->input('login', array('label' => "User ",'class'=>'form-control','placeholder'=>'Usuário')) ?>

      <?php
        echo "<br>";
      ?>

      <?= $this->Form->input('senha', array('label' => "Password ",'class'=>'form-control','placeholder'=>'Senha')) ?>
      <?php 
      echo "</center>"; ?>
      <?php
        echo "<br>";
      ?>
      <?= $this->Form->button('<i class="fa fa-sign-in"></i> '. __(''), array('id'=>'botao-logar', 'title' => 'Entrar')) ?>


      <?= $this->Form->end() ?>
    </div>  
    <div align="center" style="width: 250px;"><br>
      <?= $this->Flash->render() ?>
    </div>

  </div>
  <br><br><br>
  
</body>
</html>