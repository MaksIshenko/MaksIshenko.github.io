<div style="align: center;">
		<p>Сколько будет 3*3?</p>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
			<input type='radio' name='answer' value='b1'>6<br>
			<input type='radio' name='answer' value='b2'>8<br>
			<input type='radio' name='answer' value='b3'>9<br>
			<input type='hidden' name='title' value='Ответьте на вопрос'>
			<input type='hidden' name='q' value='<?php echo ++$q; ?>'>
			<input type='submit' value='Ответить'>
		</form>
</div>