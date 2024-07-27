<?php 
    include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホームページ</title>
    <link rel="stylesheet" href="assets/css/index.css?<?php echo date('Ymd-Hi'); ?>">
</head>
<body>
    <div class="container">
        <div class="home">
            <img src="./assets/images/home.jpg" alt="">
            <h1>あなたのフィットネス、あなたの方法で</h1>
            <p>カスタマイズされたフィットネスプランの提供をします。</p>
        </div>
        <img src="./assets/images/gym.jpg" alt="">
        <h2>ミッション</h2>
        <p>健康と幸福のための変革</p>

        <img src="./assets/images/meal.jpg" alt="">
        <h2>事業内容</h2>
        <ul>
            <li>FitLife Workouts</li>
            <li>FitLife Eats</li>
            <li>FitLife Challenges</li>
        </ul>
    </div>
</body>
</html>

<?php   
    include 'footer.php'; 
?>
