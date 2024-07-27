<?php 
    include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>お問い合わせ</h1>
    <form method="post">
        名前:<br/>
        <input type="text"><br/>
        会社名:<br/>
        <input type="text"><br/>
        電話番号:<br/>
        <input type="text"><br/>
        メールアドレス:<br/>
        <input type="text"><br/>
        お問い合わせ内容:<br/>
        <input type="text"><br/>
        <input type="submit" value="送信">
    </form>
</body>
</html>

<?php   
    include 'footer.php'; 
?>
