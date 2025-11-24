<head>
    <meta charset="<?php echo $meta['charset']; ?>">
    <meta name="viewport" content="<?php echo $meta['viewport']; ?>">
    <meta name="description" content="<?php echo $meta['description']; ?>">
    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
    <meta name="author" content="<?php echo $meta['author']; ?>">
    
    <link rel="stylesheet" href="<?php echo $htmlroot; ?>bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="<?php echo $htmlroot; ?>bootstrap-5.0.2/dist/js/bootstrap.bundle.js"></script>

    <?php foreach ($meta['og'] as $property => $content): ?>
        <meta property="og:<?php echo $property; ?>" content="<?php echo $content; ?>">
    <?php endforeach; ?>

    <title><?php echo $meta['title']; ?></title>

    <link rel="icon" href="<?php echo $htmlroot . $assets['favicon']; ?>" type="image/svg+xml">
    
    <?php foreach ($assets['css'] as $css): ?>
        <?php 
        // **Compatibility Check:** If it's a string, use the old logic.
        if (is_string($css)): 
            $path = $css;
            $attributes = '';
        
        // If it's an array, use the new structured logic.
        elseif (is_array($css) && isset($css['path'])):
            $path = $css['path'];
            // Use the null coalescing operator (??) for safety
            $attributes = $css['attributes'] ?? ''; 
        
        // Skip if the format is invalid
        else:
            continue; 
        endif;
        ?>
        <link rel="stylesheet" href="<?php echo $htmlroot . $path; ?>" <?php echo $attributes; ?>>
    <?php endforeach; ?>

    <?php foreach ($assets['js'] as $js): ?>
        <?php 
        // **Compatibility Check:** If it's a string, use the old logic.
        if (is_string($js)): 
            $path = $js;
            $attributes = '';
        
        // If it's an array, use the new structured logic.
        elseif (is_array($js) && isset($js['path'])):
            $path = $js['path'];
            // Use the null coalescing operator (??) for safety
            $attributes = $js['attributes'] ?? ''; 
        
        // Skip if the format is invalid
        else:
            continue; 
        endif;
        ?>
        <script src="<?php echo $htmlroot . $path; ?>" <?php echo $attributes; ?>></script>
    <?php endforeach; ?>
</head>