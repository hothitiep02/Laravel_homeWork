<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        $csrf
        <div class="form-group">
            <input type="number" class="form-controller" placohodor="so a" name="soA">
        </div>
        <div class="form-group">
            <input type="number" class="form-controller" placohodor="so b" name="soB">
        </div>
        <button type="submit" class="btn btn-primary">Tinh</button>
        <div class="form-group">
            <input type="number" class="form-controller" placohodor="ket qua" disabel="" value=<?php if(isset($sum)) echo $sum; ?>">
        </div>
    </form>
</body>
</html>