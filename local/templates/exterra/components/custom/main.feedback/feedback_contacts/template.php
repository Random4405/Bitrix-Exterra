<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
		<div class="feedback_contacts">
			<?if(!empty($arResult["ERROR_MESSAGE"]))
			{
				foreach($arResult["ERROR_MESSAGE"] as $v)
					ShowError($v);
			}
			if(strlen($arResult["OK_MESSAGE"]) > 0)
			{
				?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
			}
			?>

			<p>Если после ознакомления с информацией на нашем сайте у Вас появятся дополнительные вопросы,
напишите нам</p>

			<form action="" method="POST">
			<?=bitrix_sessid_post()?>
				<div class="mf-name">
			<!-- 		<div class="mf-text">
						<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
					</div> -->
					<input type="text" name="user_name" placeholder="<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>" value="<?=$arResult["AUTHOR_NAME"]?>">
				</div>
				<?foreach($arParams["NEW_EXT_FIELDS"] as $i => $ext_field):?>
				<div class="mf-phone">
			<!-- 			<div class="mf-text">
							<?=$ext_field?>
						</div> -->
						<input type="text" name="custom[<?$i?>]" placeholder="<?=$ext_field?>:" value="<?=$arResult["custom_$i"]?>">
					</div>
					<?endforeach;?>
				<div class="mf-email">
			<!-- 		<div class="mf-text">
						<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
					</div> -->
					<input type="text" name="user_email" placeholder="<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>" value="<?=$arResult["AUTHOR_EMAIL"]?>">
				</div>

			<div class="mf-message">
					<textarea name="MESSAGE" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
				</div> 
				<?if($arParams["USE_CAPTCHA"] == "Y"):?>
				<div class="mf-captcha">
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
					<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
					<input type="text" name="captcha_word" size="30" maxlength="50" value="">
				</div>
				<?endif;?>
				<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
			</form>
			</div>