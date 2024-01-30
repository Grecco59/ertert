<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>FAICC Rodeio Show</title>
    <style>
        .participant {
            text-align: center;
            margin-bottom: 20px;
        }

        .participant img {
            max-width: 100%;
            height: 300px; /* Defina a altura desejada para as imagens */
            width: 300px;
            object-fit: cover; /* Isso garante que a imagem mantenha a proporção e cubra a área designada */
            cursor: pointer;
            border-radius: 8px;
            transition: transform 0.2s;
        }

        .mt-5 {
            padding: 5px;
        }
        .participant img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?> 
<div class="container mt-5">
    <h2 class="mb-4">Concurso Rainha da FAICC</h2>

    <div class="row">
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=1';">
                <img src="https://i.pinimg.com/736x/5c/1a/4b/5c1a4b3fd62d2e83832b0d01c88fb3d4.jpg" alt="Participante 1">
                <hr>
                <p>Josana de Souza</p>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://i.pinimg.com/736x/95/f0/61/95f0616e1da111222490211351f5c660.jpg" alt="Participante 2">
                <hr>
                <p>Maria de Lourdes</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=1';">
                <img src="https://i.pinimg.com/736x/16/88/4b/16884b31627a54436536045b0bb7f4ad.jpg" alt="Participante 1">
                <hr>
                <p>Josefina do Bar</p>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://i.pinimg.com/736x/49/88/5e/49885e5ea741de497f00debf48d2eb0f.jpg" alt="Participante 2">
                <hr>
                <p>Cleide Coinceição</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=1';">
                <img src="https://i.pinimg.com/736x/a1/95/ba/a195ba795cec175c9870a42be091316f.jpg" alt="Participante 1">
                <hr>
                <p>Dona Rosa</p>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://i.pinimg.com/736x/b4/df/c6/b4dfc6e6bb635020ae5407739428d640.jpg" alt="Participante 2">
                <hr>
                <p>Mirtes do Santos</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://s2-glamour.glbimg.com/0tEcF3T8TViiOzmeO233pgdBVL4=/0x0:536x674/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2022/v/L/Bund8kSTuAeBPQEp4isQ/captura-de-tela-2022-01-21-as-12.28.46.png" alt="Participante 2">
                <hr>
                <p>Luquinhas da transfusão</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://cdn.meutimao.com.br/_upload/torcida-do-corinthians/2017/01/31/vaiserhepta_k90.jpg" alt="Participante 2">
                <hr>
                <p>Danilo Dorigon</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=1';">
                <img src="https://i.pinimg.com/736x/5c/1a/4b/5c1a4b3fd62d2e83832b0d01c88fb3d4.jpg" alt="Participante 1">
                <hr>
                <p>Josana de Souza</p>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://i.pinimg.com/736x/95/f0/61/95f0616e1da111222490211351f5c660.jpg" alt="Participante 2">
                <hr>
                <p>Maria de Lourdes</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=1';">
                <img src="https://i.pinimg.com/736x/16/88/4b/16884b31627a54436536045b0bb7f4ad.jpg" alt="Participante 1">
                <hr>
                <p>Josefina do Bar</p>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://i.pinimg.com/736x/49/88/5e/49885e5ea741de497f00debf48d2eb0f.jpg" alt="Participante 2">
                <hr>
                <p>Cleide Coinceição</p>
            </div>
        </div>

        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=1';">
                <img src="https://i.pinimg.com/736x/a1/95/ba/a195ba795cec175c9870a42be091316f.jpg" alt="Participante 1">
                <hr>
                <p>Dona Rosa</p>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://i.pinimg.com/736x/b4/df/c6/b4dfc6e6bb635020ae5407739428d640.jpg" alt="Participante 2">
                <hr>
                <p>Mirtes do Santos</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://s2-glamour.glbimg.com/0tEcF3T8TViiOzmeO233pgdBVL4=/0x0:536x674/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2022/v/L/Bund8kSTuAeBPQEp4isQ/captura-de-tela-2022-01-21-as-12.28.46.png" alt="Participante 2">
                <hr>
                <p>Luquinhas da transfusão</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="participant" onclick="window.location.href='apresentacao.php?id=2';">
                <img src="https://cdn.meutimao.com.br/_upload/torcida-do-corinthians/2017/01/31/vaiserhepta_k90.jpg" alt="Participante 2">
                <hr>
                <p>Danilo Dorigon</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>