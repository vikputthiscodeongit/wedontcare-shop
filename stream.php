<?php include "header.php"; ?>

<div class="container">
    <?php
        if (!$clear) {
            ?>
            <noscript>
                <p>This page requires JavaScript.</p>
            </noscript>

            <script>
                (function() {
                    if (!album.released) {
                        window.location.href = "https://www.wedontcaregroup.com/";
                    }
                })();
            </script>
            <?php
        }
    ?>

    <ul class="stream-grid" aria-label="Stream 'Long Nights, Cold Nights' now!">
        <?php
            $file = file_get_contents("streaming_services.json");

            if ($file) {
                $data = json_decode($file, true);
                // var_dump($data);

                foreach ($data as $tile) {
                    $tile_class = strtolower(str_replace(" ", "-", $tile["name"]));
                    $tile_link  = !empty($tile["albumUrl"]) ? $tile["albumUrl"] : $tile["profileUrl"];

                    if (!empty($tile_link)) {
                        $tag_open  = "a class='stream-grid__tile stream-grid__tile--" . $tile_class . "' href='" . $tile_link . "' target='_blank' rel='noopener'";
                        $tag_close = "a";
                    } else {
                        $tag_open  = "span class='stream-grid__tile stream-grid__tile--" . $tile_class . "'";
                        $tag_close = "span";
                    }
                    ?>
                    <li>
                        <<?php echo $tag_open; ?>>
                            <span class="sr-only"><?php echo $tile["name"]; ?></span>
                        </<?php echo $tag_close; ?>>
                    </li>
                    <?php
                }
            }
        ?>
    </ul>
</div>

<?php include "footer.php"; ?>
