<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <title>Section Code</title>
        <link type="text/css" rel="stylesheet" href="  <?php echo base_url('assets/css/materialize.min.css'); ?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/prism.css'); ?>"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/ghpages-materialize.css'); ?>"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/sh.css'); ?>"  media="screen,projection"/>
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/favicon/bettercodes-logo.png'); ?>">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="<?php echo base_url('assets/images/favicon/bettercodes-logo.png'); ?>">
        <link rel="icon" href="<?php echo base_url('assets/images/favicon/bettercodes-logo.png'); ?>" sizes="32x32">
        <!--Let browser know website is optimized for mobile-->
        <meta name="theme-color" content="#EE6E73">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <div class="container">
                <div class="header">
                    <h1>Welcome</h1>
                </div>
                <div class="divider"></div>
                <div class="col s12">
					<h4>Bem vindo</h4>
					<p>Essa é a primeira página de demonstração do sistema.</p>
					<p>Para alterala, vá até o diretorio <code class="directory-markup">app/view</code> e crie sua nova pagina inicial</p>
					<p>Em seguida altere a informação da pagina no controle do seu site no arquivo <code class="directory-markup">app/controle/Home_controle</code></p>
				</div>
				<div class="col s12">
                       <pre>
                        <code class="language-php">
<p>&lt;?php
/*
&nbsp;* To change this license header, choose License Headers in Project Properties.
&nbsp;* To change this template file, choose Tools | Templates<
&nbsp;* and open the template in the editor.
&nbsp;*/
/**
&nbsp;* Description of Home
&nbsp;*
&nbsp;* @author F&aacute;bio
&nbsp;*/
class Home extends Controller{
	&nbsp;&nbsp; &nbsp;
	&nbsp;&nbsp; &nbsp;
	&nbsp;&nbsp;&nbsp; public function __construct() {
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; parent::__construct();
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
		&nbsp;&nbsp;&nbsp; }
		&nbsp;&nbsp;&nbsp; public function index(){
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $this-&gt;view('welcome'); //Aqui você pode alterar "welcome" pelo nome de sua nova pagina.
			&nbsp;&nbsp;&nbsp; }
			}</p>
                            </code>
                        </pre>
                    </div>
					
					<div class="divider"></div>
					<div class="col s12">Para maiores detalhes sobre o sistema acesse <a href="user_guide/index.php">Guia do Usuario</a> e comece seus estudos.
					 <p>Visite nosso Page <a target="blanck" href="https://presstencao.github.io/SectionCode/">GitHub</a> </p>
					 </div>
        </div>



        <footer class="page-footer">

               
            <div class="footer-copyright">
                <div class="container">© 2016 SectionCode, All rights reserved. <a class="grey-text text-lighten-4 right" href="https://github.com/presstencao/SectionCode/wiki/LICENSE" target="_blanck">MIT License</a> </div>
            </div>
        </footer>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <script src="<?php echo base_url('assets/js/jquery.timeago.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/prism.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/lunr.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jade_search.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/init.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/sh.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/quiktag.js'); ?>"></script>
    </body>
</html>