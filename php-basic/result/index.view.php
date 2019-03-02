<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bulma.css"> 
    <link rel="stylesheet" href="../style.css"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <div id="content">
            <div class="profile">
                <?php echo '<img src="'. $profile .'"alt="profilepic" class="display-centered"> ' ?>
            </div>
            <div class="detail">
                <?php echo '<h1>'. $name .'</h1>' ?>
            </div>
            <?php echo '<a href="'. $_SERVER['HTTP_REFERER'] .'" class="button display-centered" id="back-btn">back</a>' ?>
            <div class="netDisplay">
                <?php echo $NET ?>
                <?php foreach ($NETS as $key => $data): ?>
                    <?=$key." pay ". $data ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("back-btn").addEventListener('click', function(){
            <?php session_unset() ?>
        })
    </script>
</body>
</html>