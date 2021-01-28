<?php defined('_JEXEC') or die; ?>

<style>
	.popup-addSalon {
		display: none;
	}

	[data-current-value="addSalon"] .popup-addSalon {
		display: block;
		max-width: 440px;
		min-width: 290px;
		width: 100%;
		background-color: #fff;
		border-top: 7px solid #dc025e;
		position: absolute;
		top: 200px;
		left: 50%;
		transform: translateX(-50%);
		padding-bottom: 20px;
	}

	.popup-addSalon .title {
		text-align: center;
		text-transform: uppercase;
		font-size: 24px;
		padding: 10px 0;
		background: #ffe5f2;
	}

	.popup-addSalon .status {
		margin: 10px 0;
		padding: 10px 15px;
		background: #94ffb6;
	}

	.popup-addSalon .field {
		display: block;
		width: 100%;
		padding: 0 15px;
		margin: 10px 0;
	}

	.popup-addSalon .field input {
		display: block;
		height: 30px;
		width: 100%;
		padding: 0 10px;
	}

	.popup-addSalon button {
		display: block;
		padding: 10px 20px;
		border: 0;
		margin: auto;
		border-radius: 10px;
		text-transform: uppercase;
		font-size: 16px;
		color: white;
		background-color: #dc025e;
	}

</style>

<div class="popup-addSalon">
	<div class="title">Добавление салона
        <button class="multi-popup__navigation-popup-close button-cross" type="button"></button>
    </div>
	<div class="status"></div>
	<form action="/?option=com_lasercity&task=addSalonForm" method="post" id="add-salon-form" enctype="multipart/form-data">
		<label class="field">
			<input type="text" name="title-clinic" placeholder="Название салона" required>
		</label>
		<label class="field">
			<input type="text" name="city-clinic" placeholder="Город" required>
		</label>
		<label class="field">
			<input type="text" name="address-clinic" placeholder="Адресс" required>
		</label>
		<label class="field">
			<input type="file" name="image-clinic" accept="image/*" required>
		</label>
		<label class="field">
			<input type="text" name="phone" placeholder="номер телефона" required>
		</label>
		<button>Отправить заявку</button>
	</form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        $(document).ready(function () {
            $('#add-salon-form').ajaxForm({ 
                dataType: 'json',
                success: function (data) {
                    $('#add-salon-form .status').html('Заявка отправлена').show();
                    location.reload();
                }
            });
        });
    });
</script>