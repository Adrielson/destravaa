<?php

//puxando a conexao do arquivo conexao.php
require 'conexao.php';

session_start();


// exibir as informações de contato do usuario na pagina aluno
$id_usuario = $_SESSION['idUsuario'];
$sql = "SELECT * FROM usuarios WHERE usuarios.id ='$id_usuario'";

$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">



    <title>Destrava</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/area-aluno2.css">

    <!-- Importação kit de icones fontawesome -->
    <script src="https://kit.fontawesome.com/84532cf285.js" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body>

    <body>
        <?php
        include_once 'header.php';
        ?>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
            <div class="profile-wrapper">
                <div class="profile-section-user">
                    <div class="profile-info-brief p-3"><img class="img-fluid user-profile-avatar"
                            src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                        <div class="text-center">
                            <h5 class="text-uppercase mb-4"><?php echo $rows[0]["nome"];?></h5>
                        </div>
                    </div>

                    <hr class="m-0">
                    <div class="hidden-sm-down">
                        <hr class="m-0">
                        <div class="profile-info-contact p-4">
                            <h6 class="mb-3">Informações de Contato</h6>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>
                                            <p class="text-muted mb-0"><a href="/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="e59784918d80888096a58288848c89cb868a88"><?php echo $rows[0]["email"];?></a>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Telefone:</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">9399199-9999</p>
                                        </td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>

                        <hr class="m-0">
                        <div class="profile-info-general p-4">
                            <h6 class="mb-3">Informações Gerais</h6>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Título:</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">Fundamental</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Cidade</strong></td>
                                        <td>
                                            <p class="text-muted mb-0">Santarém</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <hr class="m-0">
                    </div>

                </div>


                <div class="profile-section-main">
                    <div class="tab-content profile-tabs-content">
                        <div class="card mb-3">
                            <h5 class="titulos-area-aluno ">Encontre seu professor</h5>
                            <div class="post-editor">
                                <h6 class="form-buscar">Busque sua aula</h6>
                                <p class="descricao-busca">Consulte livremente as aulas disponíveis
                                    e entre em contato com o professor ideal de acordo com os seus critérios
                                    (tarifa, diplomas, avaliações, aulas online ou presenciais).</p>
                                <form class="form-inline" action="lista-pacotes-busca.php" method="post">
                                    <input class="form-control mr-sm-2" type="search"
                                        placeholder="O que deseja aprender?" aria-label="Buscar" name="query">
                                    <button class="btn btn-outline-success my-2 my-sm-0"
                                        type="submit">Pesquisar</button>
                                </form>
                            </div>

                            <div class="resultados-busca">
                                <h6 class="form-buscar">Aulas disponíveis</h6>
                                <?php
                                include_once 'lista-pacotes-busca.php';
                                ?>
                            </div>

                        </div>

                        <div class="minhas-aulas">
                            <div class="card mb-3">
                                <h5 class="titulos-area-aluno ">Aulas solicitadas</h5>
                                <?php
                                include_once 'lista-pacotes-solicitados.php';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript">

        </script>
    </body>

</html>
