<div>
    <h2><?= $selectedSdg["title"] ?></h2>
</div>

<ul class="sdgTekst">
    <li>
        <p><?= $selectedSdg["info_text"] ?></p>
    </li>
    <li>
        <img src="<?= $selectedSdg["image_path"] ?>" alt="">
    </li>
</ul>

<div class="sdgSub">
    <p><?= $selectedSdg["subtext"] ?></p>
</div>