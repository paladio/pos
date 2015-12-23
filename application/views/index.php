<?php require 'cabecalho.php'; ?>




    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">BEM VINDO ALUNO</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>


                        <li class="page-scroll">
                            <a href="#contact">LOGIN</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" style="alignment-adjust: central" src="img/profile.png" alt="">
                        <div class="intro-text">

                            <hr class="star-light">
                            <span class="skills" style="alignment-baseline: central">Bem-vindo ao site do Programa de Pós-graduação em Sistemas e Computação</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>LOGIN</h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="container">

                    <?php if ($this->session->flashdata("success")) : ?>
                        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
                    <?php endif ?>

                    <?php if ($this->session->flashdata("danger")) : ?>
                        <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
                    <?php endif ?>


                    <?php if ($this->session->userdata("usuario_logado")) : ?>
                        <?= base_url(anchor('produtos/formulario', 'Gerar requerimento', array("class" => "btn btn-primary"))) ?>
                        <?= base_url(anchor('login/logout', 'Logout', array("class" => "btn btn-primary"))) ?>

                     



                    <?php else : ?>

                        <h1>Login</h1>
                        <?php 
                        echo base_url(form_open("login/autenticar"));

                        echo form_label("Email", "email");
                        echo form_input(array(
                            "name" => "email",
                            "id" => "email",
                            "class" => "form-control",
                            "maxlength" => "255"
                        ));

                        echo form_label("Senha", "senha");
                        echo form_password(array(
                            "name" => "senha",
                            "id" => "senha",
                            "class" => "form-control",
                            "maxlength" => "255"
                        ));

                        echo form_button(array(
                            "class" => "btn btn-primary",
                            "content" => "Login",
                            "type" => "submit"
                        ));


                        echo form_close();
                        ?>
                        
                           <h1>Cadastro</h1>		
                        <?php
                        echo form_open("usuarios/novo");

                        echo form_label("Codigo", "codigo");
                        echo form_input(array(
                            "name" => "codigo",
                            "id" => "codigo",
                            "class" => "form-control",
                            "maxlength" => "11"
                        ));

                        echo form_label("Nome", "nome");
                        echo form_input(array(
                            "name" => "nome",
                            "id" => "nome",
                            "class" => "form-control",
                            "maxlength" => "255"
                        ));

                        echo form_label("Email", "email");
                        echo form_input(array(
                            "name" => "email",
                            "id" => "email",
                            "class" => "form-control",
                            "maxlength" => "255"
                        ));

                        echo form_label("Senha", "senha");
                        echo form_password(array(
                            "name" => "senha",
                            "id" => "senha",
                            "class" => "form-control",
                            "maxlength" => "255"
                        ));

                        echo form_button(array(
                            "class" => "btn btn-primary",
                            "content" => "Cadastrar o Aluno",
                            "type" => "submit"
                        ));








                        echo form_close();
                        ?>



                    <?php endif ?>

                </div>
                </body>
                </html>