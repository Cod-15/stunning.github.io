<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project_Skillfactory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="flex-container">

        <div class="header">
            <?php include "menu.inc.php" ?>
            <?php include "logo.inc.php" ?>
        </div>
        
        <div class="about_me">

            <?php include 'index.php' ?>
            <h1> <?php echo $p ?> </h1>
        
            <div class="data">

                <div class="myimg">
                   <?php echo'<img class="img_php" src="img/prof.jpg">'; ?>
                </div>
        
                <div class="fullname">
                    <p>Меня зовут
                    <?php echo $name, ' ', $surname . '<br>'; 
                        echo 'Город', ' ', $siti ?>
                    </p>
                    <p>Я изучил простые переменные</p>
                    <p>Изучил простые операции над ними</p>
                </div>
            
            </div>

            <div class="knowledge">
                <?php include 'knowledge.inc.php' ?>
                <?php   echo $a, ' ', $b, ' ', $c; ?><p>__</p>

                <?php
                    $a = 10;
                    $b = 20;
                    $c = $a + $b;
                    echo $c;
                ?> <p>__</p>    
                <?php 
                    echo $d;
                ?>
             </div>

            <div class="article">
                <p class="text">На данный момент я изучаю курс "Белый хакер" от онлайн школы</p> <a href="#" style="color: aliceblue;">Skillfaktory</a>.
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>
</body>
</html>