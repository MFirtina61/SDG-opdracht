<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=	, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <?php
    // Controleer of er een album-ID is meegegeven in de URL
    if (isset($_GET['id'])) {
        $sdgId = $_GET['id'];
    
        // Zoek het geselecteerde album op basis van de ID
        include '../source/sdg.php';
    
        $selectedSdg = null;
        foreach ($sdgData as $sdgItem) {
            if ($sdgItem['id'] == $sdgId) { // Gebruik $sdgItem in plaats van $sdgData
                $selectedSdg = $sdgItem; // Gebruik $sdgItem in plaats van $sdgData
                break;
            }
        }
        ?>
    
        <article class="info">
            <section>
    
                <?php
                if ($selectedSdg) { // Gebruik $selectedSdg in plaats van $sdgData
                    echo '<div>';
                    echo '<img src="' . $selectedSdg["image"] . '" alt="' . $selectedSdg["title"] . '">';
                    echo '<h3>' . $selectedSdg["title"] . '</h3>';
                } else {
                    echo 'Album niet gevonden.';
                }
            } else {
                echo 'Geen album-ID meegegeven.';
            }
        ?>
    
        </section>
    </article>



</body>

</html>