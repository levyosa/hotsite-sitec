<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://www.fontify.me/wf/888133e7b534c7e8f2034947a81b81c3" rel="stylesheet" type="text/css"/>
    <title>SITEC</title>
    <link rel="stylesheet" type="text/css" href="./../style.css" />
</head>
<body>
    <?php
    $chave = $_POST["chave"];
    $chavemestra = "3301,Hmm,Level-up,Athene cunicularia,14058,404,foi a língua,enforcada,skyrim,0,8,0,3,1,7,Binario,Patas Do Acolhimento,TADS17";


    if($chave == "ENTRAR"){
        print '
        
    <div class="container">
        <div class="box">
            <img src="https://usercontent1.hubstatic.com/14122792_f520.jpg" alt="cicada">
            <h3>_ _ _ _</h3>
            <p>Atenção! A partir de agora, anote as respostas corretas de cada fase.</p>
            <p>Apenas a primeira pessoa a solucionar o enigma receberá o prêmio.</p>
            
        </div>
    </div>
        
        ';
    }else if ($chave == "3301"){
        print '
        <div class="container">
                <div class="box">
                   <img src="../img/villager.jpeg" alt="">
                </div>
        </div>
        ';
    }else if ($chave == "Hmm"){
        echo('
        
        <iframe src="../audio/morse.mpeg" frameborder="0"></iframe>
        ');
    }else if ($chave == "Level-up"){
        print '
        <div class="container">
                <div class="box binario" >
                <img src="../img/qr.png" alt="">
                </div>
        </div>
        ';
    }else if ($chave == "Athene cunicularia"){
        print '
        <div class="container">
                <div class="box">
                <p>Mês e ano em que o IFPR Paranguá foi fundado</p>
                </div>
        </div>
        ';
    }else if ($chave == "14058"){
        print '
        <div class="container">
                <div class="box">
                <h3> Página não encontrada</h3>
                </div>
        </div>
        ';
    }else if ($chave == "404"){
        print '
        <!-- "Vá até o Levy e diga: "Tucunaré"" -->
        <div class="container">
                <div class="box">
                <h3> Parece que você encontrou </h3>
                
                </div>
        </div>
        ';
    }else if ($chave == "foi a língua"){
        print '
        
        <div class="container">
                <div class="box">
                <h3> "Foi a Língua", diz a caveirinha. Mas esta semana, a caveira morreu como? </h3>
                
                </div>
        </div>
        ';
    }else if ($chave == "enforcada"){
        print '
        
        <div class="container">
                <div class="box">
                <img src="../img/logo.png" alt="hehe procurando algo?">
                </div>
        </div>
        ';
    }else if ($chave == "skyrim"){
        print '
        
            <div class="container">
                    <div class="box">
                                    <h3>Shhhhh...</h3>
                                    
                                    <p><img src="../img/logowifi.png" alt="" class="icone"> 25°35\'11.2"S 48°33\'50.9"W</p>                 
                                    <p><img src="../img/logowifi.png" alt="" class="icone"> 25°35\'08.4"S 48°33\'55.6"W</p>          
                                    <p><img src="../img/logowifi.png" alt="" class="icone"> 25°35\'07.1"S 48°33\'56.6"W</p>               
                                    <p><img src="../img/logowifi.png" alt="" class="icone"> 25°35\'09.3"S 48°33\'51.9"W</p>                 
                                    <p><img src="../img/logowifi.png" alt="" class="icone"> 25°35\'07.4"S 48°33\'53.3"W</p>            
                                    <p><img src="../img/logowifi.png" alt="" class="icone"> 25°35\'12.0"S 48°33\'57.3"W</p>          
                                    <p><img src="../img/iconqr.png" alt="" class="icone"> 25°35\'07.6"S 48°33\'56.7"W</p>        
                                    <p><img src="../img/iconqr.png" alt="" class="icone"> 25°35\'07.9"S 48°33\'52.7"W</p>   
                                    <p><img src="../img/iconqr.png" alt="" class="icone"> 25°35\'05.9"S 48°33\'53.9"W</p>    
                        
                                    <p>Você está na reta final! Fique quieto.
                                        vá sorrateiramente até as coordenadas acima, e colete as últimas respostas para formar a chave mestra!.
                                        A frase mestra é composta pelas respostas de cada enigma em ordem. (ex:resposta,resposta,resposta,etc).
                                    </p>
                        
                    </div>
            </div>
        ';

        
    }else if ($chave == $chavemestra){
        print '
        
        <div class="container">
                <div class="">
                <h3>Você chegou ao fim, mas será que foi o primeiro?</h3>
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScXgOA6HSKVIhMKTK3yiJFf7J35og_yTOgNTXNP0jj54-p-jg/viewform?embedded=true" width="100%" height="507" frameborder="0" marginheight="0" marginwidth="0">Carregando…</iframe>
                <p>O projeto Campus Inteligente parabeniza sua dedicação. </p>
                <p>Junte-se a nós, envie um email para: gil.andrade@ifpr.edu.br</p>
                </div>
        </div>
        ';
    }else{
        print '
        
        <div class="container">
                <div class="box">
                <H3>Vish... Você está perdidinho...</H3>
                <img src="../img/faro.gif" alt="">
                </div>
        </div>
        ';
    }
    
    
    if ($chave != $chavemestra){

        print '
        <div class="container">
            <div class="box">
                <p>What`s wrong? Too difficult?</p>
                <form action="" method="POST">
                    <input type="text" name="chave" value="" class="form-cicada" />
                    <input type="submit" value="OK!" class="button" />
                </form>
            </div>
        </div>
        ';
    }
?>
<script src="countdown.js"></script>
</body>
</html>
