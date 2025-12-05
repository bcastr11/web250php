<?php
$page = $_GET['page'] ?? 'home';

$page_titles = [
    'home' => 'Home',
    'contract' => 'Contract',
    'intro' => 'Introduction',
    'multi' => 'MultiPage'
];

$current_title = $page_titles[$page] ?? 'Home';

$content_file = "contents/{$page}.php";

if (!file_exists($content_file)) {
    $content_file = "contents/home.php";
    $current_title = 'Home';
    $page = 'home';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baltazar Castro Luz's Bold Cardinal | WEB250 | <?php echo $current_title; ?></title>
    <link rel="stylesheet" href="styles/default.css">
    <script src="https://lint.page/kit/880bd5.js" crossorigin="anonymous"></script>
</head>
<body>
        
    <?php include("components/header.php"); ?>

    <main>
        <?php include($content_file); ?>
    </main>

    <?php include("components/footer.php"); ?>
    <script src="scripts/HTMLInclude.js"></script>
</body>
</html>

