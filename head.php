<head>
    <meta charset="<?php echo $meta['charset']; ?>">
    <meta name="viewport" content="<?php echo $meta['viewport']; ?>">
    <meta name="description" content="<?php echo $meta['description']; ?>">
    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
    <meta name="author" content="<?php echo $meta['author']; ?>">

    <!-- Open Graph -->
    <?php foreach ($meta['og'] as $property => $content): ?>
        <meta property="og:<?php echo $property; ?>" content="<?php echo $content; ?>">
    <?php endforeach; ?>

    <title><?php echo $meta['title']; ?></title>

    <link rel="icon" href="<?php echo $htmlroot . $assets['favicon']; ?>" type="image/svg+xml">

    <?php foreach ($assets['css'] as $css): ?>
        <link rel="stylesheet" href="<?php echo $htmlroot . $css; ?>">
    <?php endforeach; ?>

    <?php foreach ($assets['js'] as $js): ?>
        <script src="<?php echo $htmlroot . $js; ?>"></script>
    <?php endforeach; ?>
</head>

