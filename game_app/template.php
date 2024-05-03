<!-- RENDER -->
<!-- HW1: render coords: horizontal(1, 2, 3, ...), vertical(a, b, c, ...)
     HW2: (experiment) use a form > buttons 
-->

<div class="yDimension">
    <div class="map">
        <? for ($ri = 0; $ri < 10; $ri++) { ?>
            <? for ($ci = 0; $ci < 10; $ci++) { ?>
                <?
                $attributes = $map[$ri][$ci] == 1 ? 'class="ship sq"' : 'class="sq"';
                $attributes .= " href=\"/?shoot={$ri}x{$ci}\" "
                    ?>
                <div>
                    <a <?= $attributes ?>></a>
                </div>
            <? } ?>
        <? } ?>
    </div>
    <div class="y">
        <? for ($i = 0; $i < 10; $i++) { ?>
            <div>
                <?= $y[$i] ?>
            </div>
        <? } ?>
    </div>
</div>

<div class="x">
    <? for ($x = 1; $x < 11; $x++) { ?>
        <div>
            <?= $x ?>
        </div>
    <? } ?>
</div>