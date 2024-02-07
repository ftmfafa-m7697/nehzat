<div class="ostan-items-container">
    {foreach from=$allData.contents item=$content name=cnts}

        <div class="ostan-item d-flex">

            <div class="ostan-img">
                <img src="img/5553_936.jpg">
            </div>

            <div class="ostan-item-content">
                <p class="ostan-item-title">
                    {$content.title} </p>
                <a href="#" class="ostan-item-text">
                    <i class="fas fa-circle title-icon"></i>
                    {$content.subtitle}
                </a>
                <p class="ostan-item-title-end"></p>
            </div>

        </div>

        {if !$smarty.foreach.cnts.last}
            <hr class="hr-ostan">
        {/if}

    {/foreach}

</div>