<!DOCTYPE html>
<html lang="">
<head>
    <title><?php echo isset($title) ? $title : ''; ?></title>
    <!--[if IE]>
    <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo \ShootingStar\Router::url('/css/style.css', false, 'v'); ?>">
</head>
<body>
<?php /** @var string $contents */
echo $contents; ?>
</body>
</html>
