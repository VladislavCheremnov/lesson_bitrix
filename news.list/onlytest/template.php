<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="barba-wrapper">
    <div class="article-list">

		<? foreach ($arResult["ITEMS"] as $arItem): ?>
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'],
				CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'],
				CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
				array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
					<a class="article-item article-list__item" href="for-individuals.html" data-anim="anim-3">

						<div class="article-item__background">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx" alt="<?= $arItem["NAME"] ?>"/>
						</div>

						<div class="article-item__wrapper">

							<div class="article-item__title">
								<?= $arItem["NAME"] ?>
							</div>
							
							<div class="article-item__content">
							<?= $arItem["PREVIEW_TEXT"] ?>
							</div>
							
						</div>
					</a>

		<? endforeach; ?>
	</div>
</div>