<?php exit('404');?>
	</div>
	<div class="footer">
		<div class="footer-left">
			<span>© 2024 <a href="/" class="a-line">{$conf.name}</a> All Rights Reserved.</span>
			<span>开源系统 - <a href="https://xhnzz.com" target="_blank">清雨v{#V}</a></span>
			<span><a href="http://xhnzz.com" class="icp" target="_blank">{$conf.icp}</a></span>
		</div>
		<div class="footer-right">
			<span style="margin-left:auto;">浏览量 : {$conf.views}</span>
			<span>RunTime : {#getRunTime()}s</span>
			<span>Memory : {#getMemory()}kb</span>
		</div>
		{$conf.js}
	</div>
	<!-- hook.body_footer -->
</body>
</html>