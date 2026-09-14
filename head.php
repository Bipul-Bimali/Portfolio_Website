<head>
    <meta charset="<?php echo $meta['charset']; ?>">
    <meta name="viewport" content="<?php echo $meta['viewport']; ?>">
    <meta name="description" content="<?php echo $meta['description']; ?>">
    <meta name="keywords" content="<?php echo $meta['keywords']; ?>">
    <meta name="author" content="<?php echo $meta['author']; ?>">
    <?php foreach ($meta['og'] as $property => $content): ?>
        <meta property="og:<?php echo $property; ?>" content="<?php echo $content; ?>">
    <?php endforeach; ?>

    <title><?php echo $meta['title']; ?></title>

    <link id="favicon" rel="icon" href="<?php echo $htmlroot . $assets['favicon']; ?>" type="image/svg+xml">
    
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

<!--Use the below code snippet to provide real time updates to the live chat plugin without the need of copying and paste each time to your website when changes are made via PBX-->
<call-us-selector phonesystem-url="https://1418.3cx.cloud" party="LiveChat843918"></call-us-selector>
 
<!--Incase you don't want real time updates to the live chat plugin when options are changed, use the below code snippet. Please note that each time you change the settings you will need to copy and paste the snippet code to your website--> 
<!--<call-us 
phonesystem-url="https://1418.3cx.cloud" 
style="position:fixed;font-size:16px;line-height:17px;z-index: 99999;right: 0; bottom: 0;" 
id="wp-live-chat-by-3CX" 
minimized="true" 
animation-style="noanimation" 
party="LiveChat843918" 
minimized-style="bubbleright" 
allow-call="false" 
allow-video="false" 
allow-soundnotifications="true" 
enable-mute="true" 
enable-onmobile="true" 
offline-enabled="true" 
enable="true" 
ignore-queueownership="false" 
authentication="both" 
show-operator-actual-name="true" 
aknowledge-received="true" 
gdpr-enabled="false" 
message-userinfo-format="both" 
message-dateformat="both" 
lang="browser" 
button-icon-type="default" 
greeting-visibility="both" 
greeting-offline-visibility="none" 
greeting-message="Hello Sir" 
chat-delay="2000" 
enable-direct-call="false" 
enable-ga="false" 
></call-us>--> 
<script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>
